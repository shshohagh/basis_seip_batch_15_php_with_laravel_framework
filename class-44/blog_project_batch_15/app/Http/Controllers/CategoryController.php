<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public $category;
    public function index(){
        return view('admin.category.category',[
            'categories' => Category::all()
        ]);
    }
    public function saveCategory(Request $request){
        Category::saveCategory($request);
        return redirect(route('category'));
    }
    public function editCategory(Request $request){
        return view('admin.category.category-edit',[
            'category'=>Category::find($request->category_id)
        ]);
    }
    public function deleteCategory(Request $request){
        $this->category = Category::find($request->category_id);
        if($this->category->category_image){
            if(file_exists($this->category->category_image)){
                unlink($this->category->category_image);
            }
        }
        $this->category->delete();
        return redirect(route('category'));
    }
}
