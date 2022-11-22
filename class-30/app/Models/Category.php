<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Category extends Model
{
    use HasFactory;
    private static $category;
    public static function newCategory($request){
        self::$category =new Category();
        self::$category->category_name = $request->category_name;
        self::$category->status = $request->status;
        self::$category->save();
    }
}
