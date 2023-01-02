<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZenBlogController extends Controller
{
    public function home(){
        return view('frontEnd.home.home');
    }
    public function blog(){
        return view('frontEnd.blog.blog');
    }
    public function details(){
        return view('frontEnd.blog.blog-details');
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
