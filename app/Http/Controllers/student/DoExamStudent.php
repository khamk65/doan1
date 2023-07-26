<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\DoExam;
use App\Models\Result;
use App\Models\Student;
use PHPUnit\TextUI\Configuration\Php;

class DoExamStudent extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
  

    /**
     * Show the form for creating a new resource.
     */
  

    /**
     * Store a newly subjectd resource in storage.
     */


    /**
     * Display the specified resource.
     */
   
    public function do(String $id){
        
     $doExam=doExam::find($id);
    
     $arrayIdQuestion=explode("--khảm--",$doExam->idquestion);
     $classuser=session()->get('classuser');
     $iduser=session()->get('iduser');
  $exams=exam::whereIn('id',$arrayIdQuestion)->get();
     
        return view('student.Doexam.do', compact('doExam','exams','arrayIdQuestion','classuser','iduser'));
       
    }
    public function resultexam(Request $request){

        $validatedData = $request->validate([
            'id_user'=>'required|string',
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
            'id_user' => $validatedData['id_user'],
            'idexam' => $validatedData['idexam'],
            'class' => $validatedData['class'],
            'arraychoice' => $idarraychoice,
            'quantity'=>$quantity,
          
        ]);
        
         
            return view('student.Doexam.return',compact('quantity'))->with('success', 'lưu kết quả bài thi thành công');
    }
    public function list(){
        $classuser=session()->get('classuser');
       
        $doExam = doexam::where('class','=', $classuser)->get();
        $result=Result::all();
        
        return view('student.Doexam.list', compact('doExam','result',));
            
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
  
    public function result(Request $request){

    }
}
