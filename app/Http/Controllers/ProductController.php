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
    function save(Request $request){
        $product =new Product();
        $product->name = $request->name;
        $product->cost = $request->cost;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->brand = $request->brand;

        $product->save();

        return redirect('/products');
    }
}
