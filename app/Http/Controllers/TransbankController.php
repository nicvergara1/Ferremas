<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\WhatsappController;
use Transbank\Webpay\WebpayPlus;
use Transbank\Webpay\WebpayPlus\Transaction;
use App\Models\Compra;
use Cart;
use App\Http\Controllers;

class TransbankController extends Controller
{
    public function __construct()
    {
        if( app()->environment('production')){
            WebpayPlus::configureForProduction(
                env('webpay_plus_cc'),
                env('webpay_plus_api_key')
            );
        }else{
            WebpayPlus::configureForTesting();
        }

        

    }
    function iniciar_compra(Request $request)
    {
        $nueva_compra = new Compra();
        $nueva_compra->session_id = Session::getId();
        $nueva_compra->total = Cart::subtotal();
        $nueva_compra->save();
        $url_to_pay = self::start_web_pay_plus_transaction( $nueva_compra );
        return $url_to_pay;
    }

    public function start_web_pay_plus_transaction( $nueva_compra )
    {
        $transaccion = (new Transaction)->create(
            $nueva_compra->id, //buy_order
            $nueva_compra->session_id,//session_id
            $nueva_compra->total, //ammount
            route('confirmar_pago') //return_url
        );
        $url = $transaccion->getUrl().'?token_ws='.$transaccion->getToken();
        return redirect::to($url);

        
    }
    
    public function confirmar_pago(Request $request)
    {
        $confirmacion = (new Transaction)->commit( $request->get('token_ws'));

        $compra = Compra::where('id',$confirmacion->buyOrder)->first();

        if( $confirmacion->isApproved() ){
            $compra->status = 2; //aprobada
            $compra->update();

            return redirect()->route('send-whatsapp');
            Cart::destroy();
            return redirect( env('URL_FRONTEND_AFTER_PAYMENT')."?compra_id={$compra->id}" )->with('success','Compra exitosa!');
        }else{
            //Fallida o rechazada
            return redirect( env('URL_FRONTEND_AFTER_PAYMENT')."?compra_id={$compra->id}" )->with('failure ','Compra rechazada');
        }
    }
}
