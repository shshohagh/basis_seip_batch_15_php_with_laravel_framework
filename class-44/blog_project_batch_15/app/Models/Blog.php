<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    private static $blog, $image, $imageName, $directory, $imageUrl, $slug;

    public static function saveBlog($request){
        if($request->blog_id){
            self::$blog = Blog::find($request->blog_id);
        }else{
            self::$blog = new Blog();
        }
        self::$blog->category_id = $request->category_id;
        self::$blog->author_id = $request->author_id;
        self::$blog->title = $request->title;
        self::$blog->slug = self::makeSlug($request);
        self::$blog->description = $request->description;
        if($request->file('image')){
            if($request->blog_id){
                if(file_exists(self::$blog->image)){
                    unlink(self::$blog->image);
                }
            }
            self::$blog->image = self::saveImage($request);
        }
        self::$blog->date = $request->date;
        self::$blog->blog_type = $request->blog_type;
        self::$blog->status = $request->status;
        self::$blog->save();
    }
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory ='admin/upload/blog/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
    private static function makeSlug($request){
        if($request->slug){
            self::$slug = $request->slug;
            return preg_replace('/\s+/u','-',trim(self::$slug));
        }else{
            self::$slug = $request->title;
            return preg_replace('/\s+/u','-',trim(self::$slug));
        }
    }

}
