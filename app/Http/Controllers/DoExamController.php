<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\DoExam;
class DoExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function check(Request $request)
    {
        $subject = $request->input('subject');
        $exams = exam::where('subject', '=', $subject)->get();

    return view('admin.Doexam.subject', ['exams' => $exams]);
    }
    
    public function index()
    {
        $doExam=doexam::all();
        return view('admin.Doexam.index', compact('doExam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $exams = exam::all();
        return view('admin.Doexam.create', compact('exams'));
    }

    /**
     * Store a newly subjectd resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string',
            'subject' => 'required|string',
            'idquestion.*' => 'required|string',
            'time'=>'required|string',
            'description' => 'required|string',    
        ]);
 
        $idquestionString = implode('--khảm--', $validatedData['idquestion']);
        $doExam = doexam::create([
            'name' => $validatedData['name'],
            'time' => $validatedData['time'],
            'idquestion' => $idquestionString,
            'subject'=>$validatedData['subject'],
            'description'=> $validatedData['description']
        ]);
        
        return redirect()->back()->with('success', 'Thêm bài thi thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }
    public function do(String $id){
     $doExam=doExam::find($id);
    
     $arrayIdQuestion=explode("--khảm--",$doExam->idquestion);
     
  $exams=exam::whereIn('id',$arrayIdQuestion)->get();
        return view('admin.Doexam.do', compact('doExam','exams','arrayIdQuestion'));
    
    }
    public function list(){
        
        $doExam=doexam::all();
      
        return view('admin.Doexam.list', compact('doExam'));
            
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
    public function result(Request $request){

    }
}
