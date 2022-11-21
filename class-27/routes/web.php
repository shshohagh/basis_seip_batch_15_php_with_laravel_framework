<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class,'index'])->name('home');
Route::get('/about', [WebController::class,'about'])->name('about');
Route::get('/services', [WebController::class,'services'])->name('services');
Route::get('/portfolio', [WebController::class,'portfolio'])->name('portfolio');
Route::get('/portfolio-details', [WebController::class,'portfolioDetails'])->name('portfolio.details');
Route::get('/team', [WebController::class,'team'])->name('team');
Route::get('/blog',[WebController::class,'blgo'])->name('blog');
Route::get('/blog-details',[WebController::class,'blgoDetails'])->name('blog.details');
Route::get('/contact',[WebController::class,'contact'])->name('contact');
