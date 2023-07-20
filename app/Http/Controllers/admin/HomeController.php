<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Exam;
use App\Models\DoExam;
use App\Models\Result;
use App\Models\document;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    protected $user;
 public function __construct(User $user)
 {
  $this->user=$user;
 } 

    /**
     * Display a listing of the resource.
     */
//     public function checkUserType(Request $request)
//     {
        
//         $credentials = $request->only('email', 'password');

//         if (Auth::attempt($credentials)) {
//             $email = $credentials['email'];

//             $teacher = Teacher::where('email', $email)->first();
//             dd($teacher);
//             $user = User::where('email', $email)->first();
//             dd($user);
//             $student = Student::where('email', $email)->first();
// dd($student);
//             if ($teacher) {
                
//                 return redirect()->route('create.teacher');
//             } elseif ($user) {
              
//                 return redirect()->route('user.dashboard');
//             } elseif ($student) {
//                 // Đây là học sinh
//                 // Xử lý logic cho học sinh
//                 return redirect()->route('');
//             } else {
//                 // Người dùng không thuộc bất kỳ loại nào
//                 return redirect()->back()->withErrors('Invalid credentials');
//             }
//         } else {
//             // Đăng nhập không thành công
//             return redirect()->back()->withErrors('Invalid credentials');
//         }
//     }

   public function thongke(){
    $teacher= count(Teacher::all());
    $student=count(Student::all());
    $document=count(document::all());
    $exam=count(exam::all());
    $doexam=count(DoExam::all());
    $result=count(Result::all());
    return view('admin.thongke',compact('teacher','student','document','exam','doexam','result'));
   }

public function home(){
    return view('auth.login');
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
