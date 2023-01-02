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
    public function editProduct($id){
        return view('admin.product.edit-product',['product'=>Product::find($id)]);
    }
    public function updateProduct(Request $request){
        Product::updateProduct($request);
        return redirect(route('manage.product'))->with('message','Update Succesfully');
    }
    public function status($id){
        Product::status($id);
        return back()->with('message','Status Update Succesfully');
    }
    public function deleteProduct(Request $request){
        Product::deleteProduct($request);
        return back()->with('message','Delete Succesfully');
    }
    
}
