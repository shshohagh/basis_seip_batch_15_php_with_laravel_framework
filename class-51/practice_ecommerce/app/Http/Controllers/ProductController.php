<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.product.add-product');
    }
    public function manageProduct(){
        return view('admin.product.manage-product',['products'=> Product::all()]);
    }
    public function saveProduct(Request $request){
        Product::saveProduct($request);
        return redirect(route('manage.product'))->with('message','Save Succesfully');
    }
    public function status($id){
        Product::status($id);
        return back()->with('message','Status Update Succesfully');
    }
}
