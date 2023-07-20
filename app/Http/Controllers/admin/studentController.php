<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Http\FileHelpers;
class studentController extends Controller
{
 
  public function create(){
    $student=student::all();
    return view('admin.student.create',compact('student'));
  }
   public function store(Request $request){
 
    $validatedData = $request->validate([
      'name' => 'required|string',
      'class'=>'required|string',
      
      'email' => 'required|email|unique:students,email',
      'password' => 'required|string',
  ]);
  
  // Tạo một giáo viên mới dựa trên dữ liệu đã xác thực
  $student = student::create($validatedData);
  
  // Trả về thông báo hoặc chuyển hướng đến trang khác
  return redirect()->back()->with('success', 'Thêm giáo viên thành công');
  }
  public function show(int $id){
    $student = student::find($id);
    return view('admin.student.show', ['student' => $student]);

  }
  public function index(){
    $student = student::all();
    return view('admin.student.index', ['student' => $student]);

  }
  public function edit(int $id){
    $student = student::find($id);
    return view('admin.student.edit', compact('student'));

  }
  public function update(Request $request, int $id){
    $validatedData = $request->validate([
      'name' => 'required|string',
      'class'=>'required|string',
      'email' => 'required|email|unique:students,email',
      'password' => 'required|string',
    ]);
    $student = student::find($id);
    $student->update($validatedData);
    return redirect()->back()->with('success', 'Cập nhật giáo viên');
  
  }
 public function destroy( $student){
  $student = student::destroy($student);

  return redirect()->back()->with('success', 'Xóa giáo viên thanh cong');
  

 }
}
