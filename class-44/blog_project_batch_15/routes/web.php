<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZenBlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SettingController;
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

Route::get('/', [ZenBlogController::class, 'index'])->name('home');
Route::get('/blog', [ZenBlogController::class, 'blog'])->name('blog');
Route::get('/blog-details/{slug}', [ZenBlogController::class, 'details'])->name('blog.details');
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

    Route::get('/page', [DashboardController::class, 'page'])->name('page');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::post('/category-new', [CategoryController::class, 'saveCategory'])->name('category.new');
    Route::post('/category-edit', [CategoryController::class, 'editCategory'])->name('category.edit');
    Route::post('/category-delete', [CategoryController::class, 'deleteCategory'])->name('category.delete');

    Route::get('/author', [AuthorController::class, 'index'])->name('admin.author');
    Route::post('/author-new', [AuthorController::class, 'saveAuthor'])->name('author.new');
    Route::post('/author-edit', [AuthorController::class, 'editAuthor'])->name('author.edit');
    Route::post('/author-delete', [AuthorController::class, 'deleteAuthor'])->name('author.delete');

    Route::get('/admin-blog-new', [BlogController::class, 'index'])->name('admin.blog.new');
    Route::post('/admin-blog-save', [BlogController::class, 'saveBlog'])->name('admin.blog.save');
    Route::get('/admin-blog-manage', [BlogController::class, 'manageBlog'])->name('admin.blog.manage');
    Route::post('/admin-blog-edit', [BlogController::class, 'editBlog'])->name('admin.blog.edit');
    Route::post('/admin-blog-delete', [BlogController::class, 'deleteBlog'])->name('admin.blog.delete');
    Route::post('/admin-blog-status', [BlogController::class, 'statusBlog'])->name('admin.blog.status');

    Route::get('/admin-setting', [SettingController::class, 'index'])->name('admin.setting');
    Route::post('/admin-setting-save', [SettingController::class, 'saveSetting'])->name('admin.setting.save');

});
