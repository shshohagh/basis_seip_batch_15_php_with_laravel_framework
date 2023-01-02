<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeEcommerceController extends Controller
{
    public function home(){
        return view('frontEnd.home.home');
    }
}
