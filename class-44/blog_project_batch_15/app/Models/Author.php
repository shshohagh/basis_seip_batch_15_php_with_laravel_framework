<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    private static $author, $image, $imageName, $directory, $imageUrl;
    
    public static function saveAuthor($request){
        if($request->author_id){
            self::$author = Author::find($request->author_id);
        }else{
            self::$author = new Author();
        }
        self::$author->author_name = $request->author_name;
        if($request->file('image')){
            if($request->author_id){
                if(file_exists(self::$author->author_image)){
                    unlink(self::$author->author_image);
                }
            }
            self::$author->author_image = self::saveImage($request);
        }
        self::$author->save();
    }
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory ='admin/upload/author/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
}
