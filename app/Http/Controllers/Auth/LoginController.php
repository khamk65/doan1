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
    
   
    
    // Kiểm tra xác thực cho người dùng thuộc nhóm "teachers"
    if (Auth::guard('teacher')->attempt($credentials)) {
        // Xử lý khi đăng nhập thành công cho nhóm giáo viên
        return view('admin.teacher.create');
    }

    // Kiểm tra xác thực cho người dùng thuộc nhóm "students"
    if (Auth::guard('student')->attempt($credentials)) {
        $user = Auth::guard('student')->user();
    
      $iduser=$user->id;
      $classuser=$user->class;
       
      session()->put('iduser', $iduser);
session()->put('classuser', $classuser);

        // Xử lý khi đăng nhập thành công cho nhóm sinh viên
        return redirect(route('student.index.document'));
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
