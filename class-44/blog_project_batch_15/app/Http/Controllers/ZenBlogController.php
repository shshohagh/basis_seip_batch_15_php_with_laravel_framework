<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ZenBlogController extends Controller
{
    public $blog, $rblog, $blogs1, $blogs2, $blogs3, $trending, $catId;

    public function index(){
        $this->blogs1 = DB::table('blogs')
        ->join('categories','blogs.category_id','categories.id')
        ->join('authors','blogs.author_id','authors.id')
        ->select('blogs.*','categories.category_name','authors.author_name','authors.author_image')
        ->where('blogs.status',1)
        ->where('blog_type','popular')
        ->orderBy('id','desc')
        ->first();
         $this->blogs2 = DB::table('blogs')
         ->join('categories','blogs.category_id','categories.id')
         ->join('authors','blogs.author_id','authors.id')
         ->select('blogs.*','categories.category_name','authors.author_name')
         ->where('blogs.status',1)
         ->where('blog_type','popular')
         ->orderby('id','desc')
         ->skip(1)
         ->take(3)
         ->get();
         $this->blogs3 = DB::table('blogs')
         ->join('categories','blogs.category_id','categories.id')
         ->join('authors','blogs.author_id','authors.id')
         ->select('blogs.*','categories.category_name','authors.author_name')
         ->where('blogs.status',1)
         ->where('blog_type','popular')
         ->orderby('id','desc')
         ->skip(4)
         ->take(3)
         ->get();
         $this->trending = DB::table('blogs')
         ->join('categories','blogs.category_id','categories.id')
         ->join('authors','blogs.author_id','authors.id')
         ->select('blogs.*','categories.category_name','authors.author_name')
         ->where('blogs.status',1)
         ->where('blog_type','trending')
         ->orderby('id','asc')
         ->take(8)
         ->get();
        return view('frontEnd.home.home',[
            'blogs1'=> $this->blogs1,
            'blogs2'=> $this->blogs2,
            'blogs3'=> $this->blogs3,
            'trending'=> $this->trending,
        ]);
    }
    public function blog(){
        return view('frontEnd.blog.blog');
    }
    public function details($slug){
        $this->blog = DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name','authors.author_image')
            ->where('blogs.slug',$slug)
            ->first();
        $this->catId = $this->blog->category_id;
        $this->rblog = DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name','authors.author_image')
            ->where('category_id',$this->catId)
           // ->where('blogs.id','!=',$this->blog->id)
            ->get();
        return view('frontEnd.blog.blog-details',[
            'blog' => $this->blog,
            'relateds' => $this->rblog 
        ]);
    }
    public function category(){
        return view('frontEnd.blog.blog-category');
    }
    public function about(){
        return view('frontEnd.about.about');
    }
    public function contact(){
        return view('frontEnd.contact.contact');
    }
}
