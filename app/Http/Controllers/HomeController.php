<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $usuarios = User::get();
        $productos = Productos::get();
        return view('home',compact('productos','usuarios'));
    }
}
