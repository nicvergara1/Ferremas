<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Models\Compra;
use Cart;

class WhatsappController extends Controller
{
    
    public function sendWhatsAppMessage(){
        $twilioSid    = env('TWILIO_SID');
        $twilioToken  = env('TWILIO_AUTH_TOKEN');
        $twilioWhatsAppNumber = env('TWILIO_WHATSAPP_NUMBER');
        $recipientNumber = 'whatsapp:+56993627967';
        $total = floatval(Cart::subtotal());
        $message = 'Usted a hecho una compra por $'.$total.' y ahora su pedido esta en Proceoso!';

        $twilio = new Client($twilioSid, $twilioToken); 
        
        try{
        $message = $twilio->messages
          ->create($recipientNumber, // to
            [
              "from" => 'whatsapp:'.$twilioWhatsAppNumber ,
              "body" => $message,
            ]
          );
          Cart::destroy();
          return redirect()->route('home');
    }catch (\Exception $e){
          return response()->json(['error'=>$e->getMessage()],500);
    }
    }

}
