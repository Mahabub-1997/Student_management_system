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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[SmsController::class,'index'])->name('home');
Route::get('/manage',[SmsController::class,'manage'])->name('manage');
Route::get('/dept-add',[DepartmentController::class,'deptAdd'])->name('dept.add');
Route::get('/dept-manage',[DepartmentController::class,'deptManage'])->name('dept.manage');

Route::post('/new-dept',[DepartmentController::class,'saveDept'])->name('new.dept');
Route::get('/manage-dept',[DepartmentController::class,'manageDept'])->name('manage.dept');
Route::get('/dept-edit/{id}',[DepartmentController::class,'deptEdit'])->name('dept.edit');
Route::post('/update-dept',[DepartmentController::class,'deptUpdate'])->name('dept.update');
Route::get('/dept.delete/{id}',[DepartmentController::class,'deptDelete'])->name('dept.delete');


Route::post('/new-student',[SmsController::class,'saveStudent'])->name('new.student');
Route::get('/student-edit/{id}',[SmsController::class,'editStudent'])->name('student.edit');
Route::post('/student-update',[SmsController::class,'updateStudent'])->name('student.update');

Route::get('/student-delete/{id}',[SmsController::class,'studentDelete'])->name('student.delete');


