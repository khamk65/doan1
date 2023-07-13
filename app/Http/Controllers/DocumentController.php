<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\document;
class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::all();
        return view('admin.document.index', compact('documents'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.document.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'subject' => 'required',
        'name' => 'required',
        'description' => 'required',
        'type' => 'required',
        'path' => 'required|file'
    ]);

    $document = new Document();
    $document->subject = $request->input('subject');
    $document->name = $request->input('name');
    $document->description = $request->input('description');
    $document->type = $request->input('type');

    // Lưu file tải lên
    if ($request->hasFile('path')) {
        $file = $request->file('path');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);
        $document->path = $fileName;
    }

    $document->save();

    // Thực hiện các xử lý khác sau khi lưu tài liệu

    return redirect()->back()->with('success', 'Tài liệu đã được tải lên thành công.');
}

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $documents = Document::find($id);
    return view('admin.document.show', ['document' => $documents]);

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
        
    }
}
