<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view('frontEnd.blog.blog');
    }
    public function details(){
        return view('frontEnd.blog.blog-details');
    }
    public function category(){
        return view('frontEnd.blog.blog-category');
    }
}
