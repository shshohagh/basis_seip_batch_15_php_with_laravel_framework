<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class EcommerceController extends Controller
{
    public function index(){ return view('frontEnd.home.home',
        ['products' => Product::where('status',1)->orderBy('id','desc')->take(5)->get()
    ]); }
    public function detailProduct($id){ 
        return view('frontEnd.home.details-product',[
            'product' => Product::find($id)
    ]); 
    }
}
