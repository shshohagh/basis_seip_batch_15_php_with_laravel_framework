<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\DeptController;

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

Route::get('/', [StudentController::class,'studentAdd'])->name('student.add');
Route::post('/student-save', [StudentController::class, 'studentSave'])->name('student.save');
Route::get('/student-manage', [StudentController::class, 'studentManage'])->name('student.manage');
Route::post('/student-edit', [StudentController::class, 'studentEdit'])->name('student.edit');
//Route::post('/student-update', [StudentController::class, 'studentUpdate'])->name('student.update');
Route::post('/student-delete', [StudentController::class, 'studentDelete'])->name('student.delete');

Route::get('/section-add', [SectionController::class, 'sectionAdd'])->name('section.add');
Route::post('/section-save', [SectionController::class, 'sectionSave'])->name('section.save');
Route::get('/section-manage',[SectionController::class, 'sectionManage'])->name('section.manage');
Route::post('/section-edit', [SectionController::class, 'sectionEdit'])->name('section.edit');
//Route::post('/section-update',[SectionController::class, 'sectionUpdate'])->name('section.update');
Route::post('/section-delete',[SectionController::class, 'sectionDelete'])->name('section.delete');

Route::get('/dept-add', [DeptController::class, 'deptAdd'])->name('dept.add');
Route::post('/dept-save', [DeptController::class, 'deptSave'])->name('dept.save');
Route::get('/dept-manage', [DeptController::class, 'deptManage'])->name('dept.manage');
Route::post('/dept-edit', [DeptController::class, 'deptEdit'])->name('dept.edit');
//Route::post('/dept-update', [DeptController::class, 'deptUpdate'])->name('dept.update');
Route::post('/dept-delete', [DeptController::class, 'deptDelete'])->name('dept.delete');

