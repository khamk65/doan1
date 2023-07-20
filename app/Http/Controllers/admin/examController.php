<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
class examController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exams = exam::all();
        return view('admin.exam.index', compact('exams'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('admin.exam.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|string',
            'right' => 'required|string',
            'problem' => 'required|string',
            'answer' => 'required|string',
            'question.*' => 'required|string',
            'subject'=>'required|string'
            
        ]);
    
        $questionString = implode('--khảm--', $validatedData['question']);
        $exams = exam::create([
            'type' => $validatedData['type'],
            'problem' => $validatedData['problem'],
            'answer' => $validatedData['answer'],
            'right' => $validatedData['right'],
            'question' => $questionString,
            'subject'=>$validatedData['subject']
        ]);
    
        return redirect()->back()->with('success', 'Thêm câu hỏi thành công');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $exams=exam::find($id);
        return view('admin.exam.show',['exam'=>$exams]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $exams=exam::find($id);
        return view('admin.exam.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
{
    $exams=exam::find($id);
    $validatedData = $request->validate([
        'type' => 'required|string',
        'answer' => 'required|string',
        'problem' => 'required|string',
        'right' => 'required|string',
        'question.*' => 'required|string',
        'subject'=>'required|string'

    ]);

   
    
    $questionString = implode('--khảm--', $validatedData['question']);
    
    $exams->type = $validatedData['type'];
    $exams->answer = $validatedData['answer'];
    $exams->problem = $validatedData['problem'];
    $exams->right = $validatedData['right'];
    $exams->question = $questionString;
    $exams->subject=$validatedData['subject'];
    
    $exams->save();

    return redirect()->back()->with('success', 'Cập nhật câu hỏi thành công');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {dd($id);
        $exams=exam::destroy($id);
        
        return redirect()->back()->with('success','xóa câu hỏi thành công');
    }
}
