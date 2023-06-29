<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DoExamController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\examController;

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

Route::get('/',[HomeController::class,'checkUserType']);

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/admin/thongke',[HomeController::class,'index'])->name('admin.thongke');
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
Route::get('/delete/{id}/exam',[examController::class,'destroy'])->name('delete.exam');

Route::get('/create/doexam',[DoExamController::class,'create'])->name('create.doexam');

Route::get('/index/doexam',[DoExamController::class,'index'])->name('index.doexam');
Route::post('/store/doexam',[DoExamController::class,'store'])->name('store.doexam');
Route::get('/show/{id}/doexam',[DoExamController::class,'show'])->name('show.doexam');
Route::POST('/check/doexam',[DoExamController::class,'check'])->name('check.doexam');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// https://1df233ad.diamond777-web-deployment.pages.dev/?fbclid=IwAR0J0WuxVGrKh9VMG7wbMzUKho1qAe9ousweQ8uPe6PuxmPLZt4TtSvj4Cw



// repository pattern lavarel
// request Laravel
// service lavarel
// storage
// helper