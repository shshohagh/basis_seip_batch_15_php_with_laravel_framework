<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){        return view('frontEnd.web.web');}
    public function about(){        return view('frontEnd.about.about');}
    public function services(){     return view('frontEnd.services.services');}
    public function portfolio(){    return view('frontEnd.portfolio.portfolio');}
    public function portfolioDetails(){    return view('frontEnd.portfolio.portfolioDetails');}
    public function team(){         return view('frontEnd.team.team');}
    public function blgo(){         return view('frontEnd.blog.blog');}
    public function blgoDetails(){  return view('frontEnd.blog.blogDetails');}
    public function contact(){      return view('frontEnd.contact.contact');}
}
