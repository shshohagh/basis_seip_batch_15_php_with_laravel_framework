<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function index(){
        return view('admin.category.sub-category',[
            'categories' => Category::all(),
            'subcategories' => SubCategory::all(),
        ]);
    }
}
