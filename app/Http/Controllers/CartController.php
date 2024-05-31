<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use Cart;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        
    }


    public function add(Request $request){
        $productos = Productos::find($request->id);
        if(empty($productos))
            return(redirect('/'));
        Cart::add(
            $productos->id,
            $productos->nombre,
            1,
            $productos->precio,
            ["image"=>$productos->imagen]
        );

       return redirect()->back()->with("success","Producto agregado:". $productos->nombre);
    }

    public function checkout(){
        return view('cart.checkout');
    }
    public function removeItem(Request $request){
        Cart::remove($request->rowId);
        return redirect()->back()->with("success","Producto elminado!");
    }
}
