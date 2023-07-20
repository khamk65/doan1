<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Teacher;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */

    public function login(Request $request)
{

    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);
    
    // dd($credentials);
    $teacher = auth::guard('student')->attempt($credentials);
dd($teacher);
    // Kiểm tra xác thực cho người dùng thuộc nhóm "teachers"
    if (Auth::guard('teacher')->attempt($credentials)) {
        // Xử lý khi đăng nhập thành công cho nhóm giáo viên
        return view('admin.teacher.create');
    }

    // Kiểm tra xác thực cho người dùng thuộc nhóm "students"
    if (Auth::guard('student')->attempt($credentials)) {
      
        // Xử lý khi đăng nhập thành công cho nhóm sinh viên
        return view('student.document.create');
    }

    // Kiểm tra xác thực cho người dùng thuộc nhóm "users"
    if (Auth::guard('web')->attempt($credentials)) {
        // Xử lý khi đăng nhập thành công cho nhóm người dùng chung
        return redirect()->intended('/create/teacher');
    }

    return back()->withErrors([
        'email' => 'Thông tin đăng nhập không chính xác.',
    ]);
}


}
