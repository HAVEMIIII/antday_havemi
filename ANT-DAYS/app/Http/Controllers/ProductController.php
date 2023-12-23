<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller{

    public function showProduct(){
        $products = Product::all();
        return view('product',compact('products'));
    }


    public function showhome(){
        return view ('welcome');
    }



}
