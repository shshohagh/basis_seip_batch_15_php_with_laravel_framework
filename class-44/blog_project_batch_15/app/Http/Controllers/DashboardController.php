<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard.dashboard');
    }
    public function page(){
        return view('admin.page.page');
    }
    public function profile(){
        return view('admin.profile.profile');
    }
}
