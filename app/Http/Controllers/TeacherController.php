<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    protected $teacher;

    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    public function create()
    {
        return view('admin.teacher.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'rank' => 'required|string',
            'email' => 'required|email|unique:teachers,email',
            'password' => 'required|string',
        ]);

        $teacher = $this->teacher->createteacher($validatedData);

        return redirect()->back()->with('success', 'Thêm giáo viên thành công');
    }

    public function show(int $id)
    {
        $teacher = $this->teacher->getteacherById($id);
        return view('admin.teacher.show', ['teacher' => $teacher]);
    }

    public function index()
    {
        $teachers = $this->teacher->getList();
        return view('admin.teacher.index', ['teachers' => $teachers]);
    }

    public function edit(int $id)
    {
        $teacher = $this->teacher->getteacherById($id);
        return view('admin.teacher.edit', compact('teacher'));
    }

    public function update(Request $request, int $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'rank' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $teacher = $this->teacher->getteacherById($id);
        $teacher->updateteacher($validatedData);

        return redirect()->back()->with('success', 'Cập nhật giáo viên thành công');
    }

    public function destroy($id)
    {
        $this->teacher->deleteteacher($id);
        return redirect()->back()->with('success', 'Xóa giáo viên thành công');
    }
}
