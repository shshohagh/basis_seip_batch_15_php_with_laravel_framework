<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product, $image, $imageName, $directory, $imageUrl;
    public static function saveProduct($request){
        self::$product = new Product();
        self::$product->name = $request->name;
        self::$product->category_name = $request->category_name;
        self::$product->brand_name = $request->brand_name;
        self::$product->price = $request->price;
        self::$product->description = $request->description;
        if($request->file('image')){
            self::$product->image = self::getImgUrl($request);
        }
        self::$product->save();
    }
    public static function updateProduct($request){
        self::$product = Product::find($request->product_id);
        self::$product->name = $request->name;
        self::$product->category_name = $request->category_name;
        self::$product->brand_name = $request->brand_name;
        self::$product->price = $request->price;
        self::$product->description = $request->description;
        self::$product->image = self::getImgUrl($request);
        self::$product->save();
    }
    private static function getImgUrl($request){
        self::$image = $request->file('image');
        if(self::$image){
                if(file_exists(self::$product->image)){
                    unlink(self::$product->image);
                }
        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'adminAsset/product-image/';
        self::$imageUrl  = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        }else{
            self::$imageUrl = self::$product->image;
        }
        return self::$imageUrl;
    }
    public static function status($id){
        self::$product = Product::find($id);
        if(self::$product->status==1){
            self::$product->status=0;
        }else{
            self::$product->status=1;
        }
        self::$product->save();
    }
    public static function deleteProduct($request){
        self::$product = Product::find($request->product_id);
        if(self::$product->image){
            if(file_exists(self::$product->image)){
                unlink(self::$product->image);
            }
            self::$product->delete();
        }
    }

}
