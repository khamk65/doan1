<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\DoExam;
use App\Models\Result;
use App\Models\Student;
use PHPUnit\TextUI\Configuration\Php;

class DoExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function check(Request $request)
    {
        $subject = $request->input('subject');
        $exams = exam::where('subject', '=', $subject)->get();
        $student=student::all();
    return view('admin.Doexam.subject', compact('exams','student'));
    }
    
    public function index()
    {
        $doExam=doexam::all();
        $result=Result::all();
        return view('admin.Doexam.index', compact('doExam','result'));
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
            'class'=>'required|string',
            'subject' => 'required|string',
            'idquestion.*' => 'required|string',
            'time'=>'required|string',
            'description' => 'required|string',    
        ]);
 
        $idquestionString = implode('--khảm--', $validatedData['idquestion']);
        $doExam = doexam::create([
            'name' => $validatedData['name'],
            'class' => $validatedData['class'],
            'time' => $validatedData['time'],
            'idquestion' => $idquestionString,
            'subject'=>$validatedData['subject'],
            'description'=> $validatedData['description']
        ]);
        
        return back()->with('success', 'Lưu dữ liệu thành công');
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
    public function resultexam(Request $request){
  
        $validatedData = $request->validate([
            'idexam' => 'required|string',
            'class' => 'required|string',
            'arraychoice' => 'required|array',
        ]);
        $outputArray = array_map('current', $validatedData['arraychoice']);
      
        $doExam=doExam::find($validatedData['idexam']);
            $arrayquestion=explode("--khảm--",$doExam->idquestion);  
           

           $d=0;
            $arrayright = exam::whereIn('id', $arrayquestion)->pluck('right')->toArray();
            $arrayright = array_combine($arrayquestion, $arrayright);
           foreach($outputArray as $key1 =>$value1){
            foreach($arrayright as $key2=>$value2){
                if($key1==$key2){
                    if($outputArray[$key1]==$arrayright[$key2]){
$d++;
                    }
                }
            }
           }
           $quantity= round((strval(($d/count($outputArray))*10)),3);
           

            
        $arrayvalue = [];
        foreach ($validatedData['arraychoice'] as $answers) {
            $arrayvalue = array_merge($arrayvalue, array_values($answers));
        }
        
        $idarraychoice = implode('--khảm--', $arrayvalue);
        
        $result = Result::create([
            'idexam' => $validatedData['idexam'],
            'class' => $validatedData['class'],
            'arraychoice' => $idarraychoice,
            'quantity'=>$quantity,
          
        ]);
        
         
            return view('admin.Doexam.return',compact('quantity'))->with('success', 'lưu kết quả bài thi thành công');
    }
    public function list(){
        
        $doExam=doexam::all();
        $result=Result::all();
        
        return view('admin.Doexam.list', compact('doExam','result',));
            
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
        $doExam=doExam::destroy($id);
        return redirect()->back()->with('success','xóa câu hỏi thành công');
    }
    public function result(Request $request){

    }
}
