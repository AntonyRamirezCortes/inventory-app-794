<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PersonaController;
use App\http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuario/{nombre_usuario?}',[PersonaController::class,'mostrar'] )->where('nombre_usuario', '[A-Za-z]+');

Route::get('/products',[ProductController::class,'show']);
Route::get('/product/form',[ProductController::class,'form'])->name('product.form');
Route:: post('/product/save',[ProductController::class,'save'])->name('product.save');  




