<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        return view('admin.author.author', ['authors'=> Author::all()]);
    }

    public function saveAuthor(Request $request)
    {
        Author::saveAuthor($request);
        return back();
    }
}
