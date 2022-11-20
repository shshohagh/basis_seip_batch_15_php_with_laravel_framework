<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use DB;
class LaravelCrudController extends Controller
{
    public $blog;
    public function index(){ return view('crud.add');}
    public function save(Request $request){ 
/* Eloquent ORM */
/*      $this->blog = new Blog();
        $this->blog->blog_title=$request->blog_title;
        $this->blog->blog_category=$request->blog_category;
        $this->blog->author_name=$request->author_name;
        $this->blog->description=$request->description;
        $this->blog->save();
*/
/* Query Builder */
        DB::table('blogs')->insert([
            'blog_title'    => $request->blog_title,
            'blog_category' => $request->blog_category,
            'author_name'   => $request->author_name,
            'description'   => $request->description,  
        ]);

        //return back();
        //return redirect('/');
        return redirect(route('home'));
        //return redirect()->route('home');
        
    }
    public function manageBlog(){
        $this->blog = Blog::all();

        return view('crud.manageBlog',[
            'blogs' => $this->blog,
        ]);
    }
}
