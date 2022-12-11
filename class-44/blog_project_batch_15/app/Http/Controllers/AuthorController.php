<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index(){
        return view('admin.author.author',[
            'authors' => Author::all()
        ]);
    }
    public function saveAuthor(Request $request){
        Author::saveAuthor($request);
        return redirect(route('admin.author'));
    }
    public function editAuthor(Request $request){
        return view('admin.author.author-edit',[
            'author'=> Author::find($request->author_id)
        ]);
    }
    public function deleteAuthor(Request $request){
        $this->author = Author::find($request->author_id);
        if($this->author->author_image){
            if(file_exists($this->author->author_image)){
                unlink($this->author->author_image);
            }
        }
        $this->author->delete();
        return redirect(route('admin.author'));
    }
}
