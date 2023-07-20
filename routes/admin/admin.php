<?php

use App\Http\Controllers\admin\DocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\TeacherController;
use App\Http\Controllers\admin\DoExamController;
use App\Http\Controllers\admin\studentController;
use App\Http\Controllers\admin\examController;
use App\Http\Controllers\Auth\LoginController;


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
Route::middleware('admin')->group(function () {
Route::get('/',[HomeController::class,'home']);
// Route::get('/login', [LoginController::class, '__invoke'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
// Route::post('/check/auth',[HomeController::class,'checkUserType'])->name('check.auth');
Route::get('thongke/admin',[HomeController::class,'thongke'])->name('thongke.admin');

Route::get('/create/teacher',[TeacherController::class,'create'])->name('create.teacher');
Route::get('/index/teacher',[TeacherController::class,'index'])->name('index.teacher');
Route::post('/store/teacher',[TeacherController::class,'store'])->name('store.teacher');
Route::get('/show/{id}/teacher',[TeacherController::class,'show'])->name('show.teacher');
Route::get('/edit/{id}/teacher',[TeacherController::class,'edit'])->name('edit.teacher');
Route::PATCH('/update/{id}/teacher',[TeacherController::class,'update'])->name('update.teacher');
Route::get('/delete/{id}/teacher',[TeacherController::class,'destroy'])->name('delete.teacher');

Route::get('/create/student',[studentController::class,'create'])->name('create.student');
Route::get('/index/student',[studentController::class,'index'])->name('index.student');
Route::post('/store/student',[studentController::class,'store'])->name('store.student');
Route::get('/show/{id}/student',[studentController::class,'show'])->name('show.student');
Route::get('/edit/{id}/student',[studentController::class,'edit'])->name('edit.student');
Route::PATCH('/update/{id}/student',[studentController::class,'update'])->name('update.student');
Route::get('/delete/{id}/student',[studentController::class,'destroy'])->name('delete.student');

Route::get('/create/exam',[examController::class,'create'])->name('create.exam');
Route::get('/index/exam',[examController::class,'index'])->name('index.exam');
Route::post('/store/exam',[examController::class,'store'])->name('store.exam');
Route::get('/show/{id}/exam',[examController::class,'show'])->name('show.exam');
Route::get('/edit/{id}/exam',[examController::class,'edit'])->name('edit.exam');
Route::PATCH('/update/{id}/exam',[examController::class,'update'])->name('update.exam');
Route::delete('/delete/{id}/exam',[examController::class,'destroy'])->name('delete.exam');

Route::get('/create/doexam',[DoExamController::class,'create'])->name('create.doexam');
Route::match(['get','post'],'/check/doexam',[DoExamController::class,'check'])->name('check.doexam');
Route::post('/result/doexam',[DoExamController::class,'resultexam'])->name('result.doexam');
Route::get('/index/doexam',[DoExamController::class,'index'])->name('index.doexam');
Route::match(['get','post'],'/store/doexam',[DoExamController::class,'store'])->name('store.doexam');
Route::get('/show/{id}/doexam',[DoExamController::class,'show'])->name('show.doexam');
Route::get('/do/{id}/doexame',[DoExamController::class,'do'])->name('do.doexam');
Route::get('/list/doexame',[DoExamController::class,'list'])->name('list.doexam');
Route::get('/delete/{id}/doexam',[DoExamController::class,'destroy'])->name('delete.doexam');
Route::get('/return/doexam',[DoExamController::class,'return'])->name('return.doexam');

Route::get('/create/document',[DocumentController::class,'create'])->name('create.document');
Route::post('/store/document',[DocumentController::class,'store'])->name('store.document');
Route::get('/index/document',[DocumentController::class,'index'])->name('index.document');
Route::get('/show/{id}/document',[DocumentController::class,'show'])->name('show.document');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// https://1df233ad.diamond777-web-deployment.pages.dev/?fbclid=IwAR0J0WuxVGrKh9VMG7wbMzUKho1qAe9ousweQ8uPe6PuxmPLZt4TtSvj4Cw



// repository pattern lavarel
// request Laravel
// service lavarel
// storage
// helper
});