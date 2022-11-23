<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentinfoController;
use App\Http\Controllers\DepartmentsController;
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
Route::get('/',[StudentinfoController::class,'add'])->name('student.add');
Route::post('/student-save',[StudentinfoController::class,'save'])->name('student.save');
Route::get('/student-info',[StudentinfoController::class,'student'])->name('student.info');
Route::post('/student-edit',[StudentinfoController::class,'edit'])->name('student.edit');
Route::post('/student-update',[StudentinfoController::class,'update'])->name('student.update');
Route::post('/student-delete',[StudentinfoController::class,'delete'])->name('student.delete');

Route::get('/department-add',[DepartmentsController::class,'add'])->name('department.add');
Route::post('/department-save',[DepartmentsController::class,'save'])->name('department.save');
Route::get('/department-info',[DepartmentsController::class,'department'])->name('department.info');
Route::post('/department-edit',[DepartmentsController::class,'edit'])->name('department.edit');
Route::post('/department-update',[DepartmentsController::class,'update'])->name('department.update');
Route::post('/department-delete',[DepartmentsController::class,'delete'])->name('department.delete');