<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product, $image, $imageName, $directory, $imageUrl;
    /* Save */
    public static function saveProduct($request){
        self::$product = new Product();
        self::$product->name = $request->name;
        self::$product->category_name = $request->category_name;
        self::$product->brand_name = $request->brand_name;
        self::$product->description = $request->description;
        if($request->file('image')){
            self::$product->image = self::getImgUrl($request);
        }
        self::$product->save();
    }
    /* Update */
    public static function updateProduct($request){
        self::$product = Product::find($request->product_id);
        self::$product->name = $request->name;
        self::$product->category_name = $request->category_name;
        self::$product->brand_name = $request->brand_name;
        self::$product->description = $request->description;
        self::$product->image = self::getImgUrl($request);
        self::$product->save();
    }
    /* Get Image URL */
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
    /* Status */
    public static function status($id){
        self::$product = Product::find($id);
        if(self::$product->status==1){
            self::$product->status=0;
        }else{
            self::$product->status=1;
        }
        self::$product->save();
    }

}
