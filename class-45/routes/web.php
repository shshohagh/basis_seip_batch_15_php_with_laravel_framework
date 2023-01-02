<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZenBlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [ZenBlogController::class, 'index'])->name('home');
Route::get('/blog-detail/{slug}', [ZenBlogController::class, 'blogDetail'])->name('blog.detail');
Route::get('/about', [ZenBlogController::class, 'about'])->name('about');
Route::get('/contact', [ZenBlogController::class, 'contact'])->name('contact');
Route::get('/blog-category/{catId}', [ZenBlogController::class, 'blogCategory'])->name('blog.category');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category',[CategoryController::class, 'index'])->name('category');
    Route::post('/new-category',[CategoryController::class, 'saveCategory'])->name('new.category');

    Route::get('/author',[AuthorController::class, 'index'])->name('author');
    Route::post('/new-author',[AuthorController::class, 'saveAuthor'])->name('new.author');

    Route::get('/add-blog',[BlogController::class, 'index'])->name('add.blog');
    Route::post('/new-blog',[BlogController::class, 'saveBlog'])->name('new.blog');
    Route::get('/manage-blog',[BlogController::class, 'manageBlog'])->name('manage.blog');
    Route::get('/status/{id}',[BlogController::class, 'status'])->name('status');
    Route::post('/delete-blog',[BlogController::class, 'deleteBlog'])->name('delete.blog');

});
