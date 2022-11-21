<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use DB;
class LaravelCrudController extends Controller
{
    public $blog,$image,$imageName,$directory,$imgUrl;
    public function index(){ return view('crud.add');}
    public function save(Request $request){ 
/* Eloquent ORM */
        $this->blog = new Blog();
        $this->blog->blog_title=$request->blog_title;
        $this->blog->blog_category=$request->blog_category;
        $this->blog->author_name=$request->author_name;
        $this->blog->description=$request->description;
        if($request->file('image')){
            $this->blog->image = $this->saveImage($request);
        }
        $this->blog->save();

/* Query Builder */
/*         DB::table('blogs')->insert([
            'blog_title'    => $request->blog_title,
            'blog_category' => $request->blog_category,
            'author_name'   => $request->author_name,
            'description'   => $request->description,  
            'image'         => $this->saveImage($request),  
        ]); */

        //return back();
        //return redirect('/');
        return redirect(route('home'));
        //return redirect()->route('home');
        
    }
    private function saveImage($request){
        $this->image=$request->file('image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'asset/image/';
        $this->imgUrl=$this->directory.$this->imageName;  
        $this->image->move($this->directory, $this->imageName);
        return $this->imgUrl;
    }
    public function manageBlog(){
        $this->blog = Blog::all();

        return view('crud.manageBlog',[
            'blogs' => $this->blog,
        ]);
    }
    public function edit(Request $request){
        $this->blog=Blog::find($request->blog_id);
        return view('crud.edit',[
            'blog'=>$this->blog,
        ]);
    }
    public function update(Request $request){
        $this->blog = Blog::find($request->blog_id);
        $this->blog->blog_title=$request->blog_title;
        $this->blog->blog_category=$request->blog_category;
        $this->blog->author_name=$request->author_name;
        $this->blog->description=$request->description;
        if($request->file('image')){
            if($this->blog->image !=null){
            unlink($this->blog->image); 
            }
            $this->blog->image = $this->saveImage($request);
        }
        $this->blog->save();
        return redirect(route('manage.blog'));
    }
    public function deleteGet($id){
        $this->blog=Blog::find($id);
        if(!empty($this->blog->image)){ unlink($this->blog->image);}
        $this->blog->delete();
        return redirect(route('manage.blog')); 
    }
    public function deletePost(Request $request){
        $this->blog=Blog::find($request->blog_id);
        if(!empty($this->blog->image)){ unlink($this->blog->image);}
        $this->blog->delete();
        return redirect(route('manage.blog'));
    }
}
