<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/page',[StudentController::class,'page'])->name('page');
Route::get('/',[HomeController::class,'index'])->name('home');
/* Blog */
Route::get('/blog',[BlogController::class,'blog'])->name('blog');
Route::get('/new-blog',[BlogController::class,'add'])->name('blog.add');
Route::post('/new-blog',[BlogController::class,'save'])->name('blog.new');
Route::post('/blog-edit',[BlogController::class,'edit'])->name('blog.edit');
Route::post('/blog-update',[BlogController::class,'update'])->name('blog.update');
Route::get('/blog-delete/{id}',[BlogController::class,'deleteGet'])->name('blog.delete.get');
Route::post('/blog-delete',[BlogController::class,'deletePost'])->name('blog.delete.post');
/* Student */
Route::get('/add',[StudentController::class,'add'])->name('add');
Route::post('/edit',[StudentController::class,'edit'])->name('edit');
Route::post('/delete',[StudentController::class,'delete'])->name('delete');
Route::post('/save',[StudentController::class,'save'])->name('save');
Route::post('/update',[StudentController::class,'update'])->name('update');

Route::get('/student',[StudentController::class,'student'])->name('student');
Route::get('/user',[StudentController::class,'user'])->name('user');
//Route::get('/user-add',[UserController::class,'userAdd'])->name('user.add');
/* Category */
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::get('/category-add',[CategoryController::class,'add'])->name('category.add');
Route::post('/category-add',[CategoryController::class,'save'])->name('category.save');
Route::post('/category-edit',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category-update',[CategoryController::class,'update'])->name('category.update');
Route::post('/category-delete',[CategoryController::class,'delete'])->name('category.delete');
