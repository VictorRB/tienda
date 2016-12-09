<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class StoreController extends Controller
{
    public function index()
    {
        $products = Product::all();
        //dd($products);
        return view('store.index', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        //dd($product);

        return view('store.show', compact('product'));
    }
    
    public function vestido($category_id)
    {
        $products = Product::where('category_id','=',1)->get();
        //dd($product);

       return view('store.vestido', compact('products'));
    }
    public function top($category_id)
    {
        $products = Product::where('category_id','=',2)->get();
        //dd($product);

       return view('store.top', compact('products'));
    }
    public function bag($category_id)
    {
        $products = Product::where('category_id','=',3)->get();
        //dd($product);

       return view('store.bag', compact('products'));
    }
     public function camisas($category_id)
    {
        $products = Product::where('category_id','=',4)->get();
        //dd($product);

       return view('store.camisas', compact('products'));
    }

  
}