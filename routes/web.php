<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PersonaController;
use App\http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AreasController;

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
})->middleware('auth');

Route::get('/products',[ProductController::class,'show']);
Route::get('/product/form/{id?}',[ProductController::class,'form'])->name('product.form');
Route:: post('/product/save',[ProductController::class,'save'])->name('product.save');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');  





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/invoices',[InvoiceController::class , 'show']);
Route::get('/invoice/form',[InvoiceController::class,'form']);


Route::get('/areas',[AreasController::class , 'show']);
Route::get('/area/form',[AreasController::class, 'form'])->name('area.form');
Route:: post('/area/save',[ProductController::class,'save'])->name('area.save');
Route::get('/area/delete/{id}',[ProductController::class,'delete'])->name('area.delete');  


