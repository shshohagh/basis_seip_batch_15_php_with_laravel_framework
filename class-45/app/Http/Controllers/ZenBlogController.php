<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZenBlogController extends Controller
{
    public function index(){
        return view('frontEnd.home.home', [
            'blogs'=> DB::table('blogs')
            ->join('categories', 'blogs.category_id', 'categories.id')
            ->join('authors', 'blogs.author_id', 'authors.id')
            ->select('blogs.*', 'categories.category_name', 'authors.author_name')
            ->where('blogs.status', 1)
            ->where('blog_type', 'popular')
            ->orderBy('id', 'desc' )
            ->skip(1)
            ->take(3)
            ->get(),
        ]);
    }
    public function blogDetail($slug){
        $blog = DB::table('blogs')
            ->join('categories', 'blogs.category_id', 'categories.id')
            ->join('authors', 'blogs.author_id', 'authors.id')
            ->select('blogs.*', 'categories.category_name', 'authors.author_name')
            ->where('slug', $slug)
            ->first();
        $catId = $blog->category_id;

        return view('frontEnd.blog.blog-detail', [
            'blog'=> $blog,
            'categoryWiseBlogs'=> DB::table('blogs')
                ->join('categories', 'blogs.category_id', 'categories.id')
                ->join('authors', 'blogs.author_id', 'authors.id')
                ->select('blogs.*', 'categories.category_name', 'authors.author_name')
                ->where('category_id', $catId)
                ->get()
        ]);

    }
    public function about(){
        return view('frontEnd.about.about');
    }
    public function contact(){
        return view('frontEnd.contact.contact');
    }
    public function blogCategory($catId){
        return view('frontEnd.category.category',[
            'categoryWiseBlogs'=>DB::table('blogs')
                ->join('categories', 'blogs.category_id', 'categories.id')
                ->join('authors', 'blogs.author_id', 'authors.id')
                ->select('blogs.*', 'categories.category_name', 'authors.author_name')
                ->where('category_id', $catId)
                ->get(),
            'categoryName'=> Category::where('id',$catId)->first()
        ]);
    }
}
