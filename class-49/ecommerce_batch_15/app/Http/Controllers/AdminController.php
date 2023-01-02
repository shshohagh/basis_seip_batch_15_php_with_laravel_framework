<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function page(){ return view('admin.page.page'); }
    public function table(){ return view('admin.page.table'); }
    public function home(){ return view('admin.home.home'); }
}
