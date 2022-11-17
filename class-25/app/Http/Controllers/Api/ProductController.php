<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\api\Product;

class ProductController extends Controller
{
    public function index(){
        return Product::all();
    }
}
