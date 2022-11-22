<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use DB;
class BlogController extends Controller
{
    public $blog,$image,$imageName,$directory,$imgUrl;
    public function add(){ return view('frontEnd.blog.add',[
        'categories'=> Category::where('status',1)->get()
    ]);}

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
        return redirect(route('blog'));
        //return redirect()->route('home');
        
    }
    private function saveImage($request){
        $this->image=$request->file('image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'asset/images/blog/';
        $this->imgUrl=$this->directory.$this->imageName;  
        $this->image->move($this->directory, $this->imageName);
        return $this->imgUrl;
    }
    public function blog(){
        $this->blog = DB::table('blogs')
        ->join('categories','blogs.blog_category','=','categories.id')
        ->select('blogs.*','categories.category_name')
        ->get();

        //$this->blog = Blog::all();

        return view('frontEnd.blog.blog',[
            'blogs' => $this->blog,
        ]);
    }
    public function edit(Request $request){
        $this->blog=Blog::find($request->blog_id);
        return view('frontEnd.blog.edit',[
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
        return redirect(route('blog'));
    }
    public function deleteGet($id){
        $this->blog=Blog::find($id);
        if(!empty($this->blog->image)){ unlink($this->blog->image);}
        $this->blog->delete();
        return redirect(route('blog')); 
    }
    public function deletePost(Request $request){
        $this->blog=Blog::find($request->blog_id);
        if(!empty($this->blog->image)){ unlink($this->blog->image);}
        $this->blog->delete();
        return redirect(route('blog'));
    }
}
