<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransbankController;
use App\Http\Controllers\WhatsappController;
use App\Http\Controllers\EnviosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('productos', [ProductosController::class, 'index'])->name('productos.index');
Route::get('productos/create', [ProductosController::class, 'create'])->name('Productos.create');
Route::get('productos/{productos}/edit', [ProductosController::class, 'edit'])->name('Productos.edit');
Route::post('productos', [ProductosController::class, 'store'])->name('Productos.store');
Route::put('productos/{productos}', [ProductosController::class, 'update'])->name('Productos.update');
Route::get('productos/{productos}/delete',[ProductosController::class, 'delete'])->name('Productos.delete');
Route::post('cart/add',[CartController::class, 'add'])->name('Cart.add');
Route::get('cart/checkout',[CartController::class, 'checkout'])->name('Cart.checkout');
Route::get('cart/clear',[CartController::class, 'clear'])->name('Cart.clear');
Route::post('cart/removeitem',[CartController::class, 'removeItem'])->name('Cart.removeitem');
Route::post('/iniciar_compra', [TransbankController::class, 'iniciar_compra'])->name('iniciar_compra');
Route::get('/confirmar_pago', [TransbankController::class, 'confirmar_pago'])->name('confirmar_pago');
Route::get('historial', [HistorialController::class, 'index'])->name('historial.index');
Route::get('send-whatsapp', [WhatsappController::class, 'sendWhatsAppMessage'])->name('send-whatsapp');
Route::get('envio', [EnviosController::class, 'index'])->name('envio.index');