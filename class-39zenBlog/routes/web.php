<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZenBlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 

//Route::get('/', [ZenBlogController::class, 'home'])->name('home');
Route::get('/blog', [ZenBlogController::class, 'blog'])->name('blog');
Route::get('/blog-details', [ZenBlogController::class, 'details'])->name('blog.details');
Route::get('/blog-category', [ZenBlogController::class, 'category'])->name('blog.category');
Route::get('/about', [ZenBlogController::class, 'about'])->name('about');
Route::get('/contact', [ZenBlogController::class, 'contact'])->name('contact');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
