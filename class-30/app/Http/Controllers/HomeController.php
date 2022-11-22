<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Student;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        $categories = Category::all();
        $allStudents = Student::all();
        $students = Student::take(5)->get();
        $users = User::all();

        return view('frontEnd.home',[
            'dashboard_students'=>count($allStudents),
            'dashboard_users'=>count($users),
            'dashboard_categories'=>count($categories),
            'dashboard_brands'=>count($blogs),
            'dashboard_blogs'=>count($blogs),
            'students'=>$students
        ]);
    }
}
