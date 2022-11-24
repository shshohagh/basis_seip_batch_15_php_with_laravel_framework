<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\DepartmentController;

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

Route::get('/',[SmsController::class,'index'])->name('home');
Route::get('/manage',[SmsController::class,'manage'])->name('manage');
Route::post('/new-student',[SmsController::class,'saveStudent'])->name('new.student');
Route::post('/edit-student',[SmsController::class,'editStudent'])->name('edit.student');
Route::post('/delete-student',[SmsController::class,'deleteStudent'])->name('delete.student');

Route::get('/dept-add',[DepartmentController::class,'deptAdd'])->name('dept.add');
Route::get('/dept-manage',[DepartmentController::class,'deptManage'])->name('dept.manage');
Route::post('/dept-new',[DepartmentController::class,'deptSave'])->name('dept.new');
Route::post('/dept-edit',[DepartmentController::class,'deptEdit'])->name('dept.edit');
Route::post('/dept-delete',[DepartmentController::class,'deptDelete'])->name('dept.delete');
