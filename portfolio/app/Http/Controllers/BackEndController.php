<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class BackEndController extends Controller
{
    public function index(){ return view('backEnd.home.home');}
    public function hero(){ return view('backEnd.hero.hero',['hero'=> Hero::first()]);}
}
