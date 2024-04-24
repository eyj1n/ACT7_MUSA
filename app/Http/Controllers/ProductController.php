<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    Public function index(){
        $products = "Product list form in ProductController";
        return view('products.index', ['products' =>$products]);
    }

    public function create()
    {
        return view('products.create');
    }
}
