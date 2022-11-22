<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public $categories,$category;

    public function index(){ 
        $categories = Category::all();
        return view('frontEnd.category.category',[
            'categories'=>$categories
        ]);
    }
    public function save(Request $request){
/*      Without Static
        $this->category= new Category();
        $this->category->newCategory($request); */
        
        /* Static */
        Category::newCategory($request);
        return redirect(route('category'));
    }
    public function add(){ return view('frontEnd.category.add');}
    public function edit(Request $request){ 
        $category = Category::find($request->category_id);
        return view('frontEnd.category.edit',['category'=>$category]);
    }
    public function update(Request $request){
        $this->category = Category::find($request->category_id);
        $this->category->category_name = $request->category_name;
        $this->category->status = $request->status;
        $this->category->save();
        return redirect(route('category'));
    }
    public function delete(Request $request){ 
        $this->category = Category::find($request->category_id);
        $this->category->delete();
        return redirect(route('category'));
    }

}
