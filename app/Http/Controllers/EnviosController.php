<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\compra;
use Cart;


class EnviosController extends Controller
{
    public function index()
    {
        $compra = Compra::get();
        return view('envios.index',compact('compra'));
    }
    
}
