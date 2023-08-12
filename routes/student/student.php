<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student\DoExamStudent;
use App\Http\Controllers\student\StudentController;
use App\Http\Controllers\student\DocumentStudent;

Route::middleware('student')->group(function () {
Route::get('thongke/student',[StudentController::class,'thongke'])->name('thongke.student');

// Route::get('/list/document/student',[DocumentStudent::class,'index'])->name('student.index.document');
// Route::get('/show/{id}/document/student',[DocumentStudent::class,'show'])->name('student.show.document');

Route::get('/api/list/document/student', [DocumentStudent::class, 'apiIndex'])->name('api.student.index.document');
    
// Thay đổi route show để trả về thông tin tài liệu dưới dạng API
Route::get('/api/show/{id}/document/student', [DocumentStudent::class, 'apiShow'])->name('api.student.show.document');

Route::get('/do/{id}/doexame/student',[DoExamStudent::class,'do'])->name('student.do.doexam');
Route::post('/result/doexam/student',[DoExamStudent::class,'resultexam'])->name('student.result.doexam');
Route::get('/list/doexame/student',[DoExamStudent::class,'list'])->name('student.list.doexam');
Route::post('/result/doexam/student',[DoExamStudent::class,'resultexam'])->name('student.result.doexam');
});