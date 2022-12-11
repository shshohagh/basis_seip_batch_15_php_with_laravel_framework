<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Author;
use App\Models\Blog;
use DB;

class BlogController extends Controller
{
    public $blog;
    public function index(){
        return view('admin.blog.blog-add',[
            'categories'=> Category::all(),
            'authors'=> Author::all()
        ]);
    }
    public function saveBlog(Request $request){
        Blog::saveBlog($request);
        return redirect(route('admin.blog.manage'));
    }
    public function manageBlog(){
        $this->blog = DB::table('blogs')
        ->join('categories','blogs.category_id','=','categories.id')
        ->join('authors','blogs.author_id','=','authors.id')
        ->select('blogs.*','categories.category_name','authors.author_name')
        ->get();
        return view('admin.blog.blog-manage',[
            'blogs'=> $this->blog
        ]);
    }
    public function editBlog(Request $request){
        return view('admin.blog.blog-edit',[
            'blog'=> Blog::find($request->blog_id),
            'categories'=> Category::all(),
            'authors'=> Author::all()
        ]);
    }
    public function deleteBlog(Request $request){
        $this->blog = Blog::find($request->blog_id);
        if($this->blog->image){
            if(file_exists($this->blog->image)){
                unlink($this->blog->image);
            }
        }
        $this->blog->delete();
        return back();
    }
    public function statusBlog(Request $request){
        $this->blog = Blog::find($request->blog_id);
        if($this->blog->status==1){
            $this->blog->status = 0;
        }else{
            $this->blog->status = 1;
        }
        $this->blog->save();
        return back();
    }

}
