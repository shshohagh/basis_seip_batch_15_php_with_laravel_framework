<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelCrudController;
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
Route::get('/',[LaravelCrudController::class,'index'])->name('home');
Route::post('/new-blog',[LaravelCrudController::class,'save'])->name('new.blog');
Route::get('/manage-blog',[LaravelCrudController::class,'manageBlog'])->name('manage.blog');
Route::post('/edit',[LaravelCrudController::class,'edit'])->name('edit');
Route::post('/update',[LaravelCrudController::class,'update'])->name('update');
Route::get('/delete/{id}',[LaravelCrudController::class,'deleteGet'])->name('delete.get');
Route::post('/delete',[LaravelCrudController::class,'deletePost'])->name('delete.post');
