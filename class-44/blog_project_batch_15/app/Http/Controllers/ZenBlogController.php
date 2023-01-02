<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Author;
use App\Models\Category;
use App\Models\BlogUser;
use App\Models\Blog;
use Session;

class ZenBlogController extends Controller
{
    public $blog, $rblog, $comments, $blogs1, $blogs2, $blogs3, $trending, $catId, $userInfo;

    public function index(){
        $this->slider = DB::table('blogs')
         ->join('categories','blogs.category_id','categories.id')
         ->join('authors','blogs.author_id','authors.id')
         ->select('blogs.*','categories.category_name','authors.author_name')
         ->where('blogs.status',1)
         ->where('blog_type','slide')
         ->orderby('id','desc')
         ->take(4)
         ->get();
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
            'slider'=> $this->slider,
            'blogs1'=> $this->blogs1,
            'blogs2'=> $this->blogs2,
            'blogs3'=> $this->blogs3,
            'trending'=> $this->trending,
        ]);
    }
    public function blog(){
        return view('frontEnd.blog.blog',[
            'blogs' => DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name','authors.author_image')
            ->where('blogs.status',1)
            ->orderBy('id','desc')
            ->get(),
            'latest' => Blog::where('status',1)->where('blog_type','latest')->take(6)->get(),
            'categories' => Category::where('status',1)->get()  
        ]);
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
            ->where('blogs.status',1)
            ->where('blogs.id','!=',$this->blog->id)
            ->get();

        // * Comments Section
        $this->comments = DB::table('comments')
        ->join('blog_users','comments.user_id','blog_users.id')
        ->select('comments.*','blog_users.name')
        ->where('comments.blog_id',$this->blog->id)
      //  ->where('status',1)
        ->get();

        return view('frontEnd.blog.blog-details',[
            'blog' => $this->blog,
            'relateds' => $this->rblog,
            'categories' => Category::where('status',1)->get(),
            'comments' => $this->comments,
            'reply' => 0
        ]);
    }

    public function apiBlogDetails($id){
        $this->blog = DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name','authors.author_image')
            ->where('blogs.id',$id)
            ->first();
            return json_encode($this->blog);
    }

    public function category($catId){
        return view('frontEnd.blog.blog-category',[
            'blogs' => DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name','authors.author_image')
            ->where('category_id',$catId)
            ->where('blogs.status',1)
            ->get(),
            'category'=> Category::where('id',$catId)->first(),
            'categories' => Category::where('status',1)->get(), 
            'latest' => Blog::where('status',1)->where('blog_type','latest')->take(6)->get() 
        ]);
    }
    public function about(){
        return view('frontEnd.about.about',[
            'authors'=> Author::where('status',1)->get()
        ]);
    }
    public function contact(){
        return view('frontEnd.contact.contact');
    }
    public function userLogin(){
        return view('frontEnd.auth.login');
    }
    public function loginUser(Request $request){
        $this->userInfo = BlogUser::where('email',$request->user_name)->orWhere('phone',$request->user_name)->first();
        if($this->userInfo){
            if(password_verify($request->password,$this->userInfo->password)){
                Session::put('userId',$this->userInfo->id);
                Session::put('userName',$this->userInfo->name);
                return redirect('/');
            }else{
                return back()->with('message','please use valid Password');
            }
        }else{
            return back()->with('message','please use valid user Name');
        }
    }
    public function logoutUser(){
        Session::forget('userId');
        Session::forget('userName');
        return redirect('/');
    }
    public function userRegister(){
        return view('frontEnd.auth.register');
    }
    public function saveUser(Request $request){
        BlogUser::saveUser($request);
        return back();
    }
}
