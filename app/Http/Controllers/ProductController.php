<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function show(){

        $list = Product::all(); 
        return view('product/list',['products' => $list]);
    }
    function form(){
        return view('product/form');
    }
}
