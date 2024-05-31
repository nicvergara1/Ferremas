<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\compra;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\EnviosController;


class HistorialController extends Controller
{
    public function index()
    {
        $compra = Compra::get();
        return view('historial.index',compact('compra'));
    }
    public function store()
    {
        $compra = Compra::get();
    }
}
