<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\document;
class DocumentStudent extends Controller
{

    public function index()
    {
        $documents = Document::all();
        return view('student.document.index', compact('documents'));
    }
    public function show(string $id)
    {
        $documents = Document::find($id);
    return view('student.document.show', ['document' => $documents]);

    }

}
