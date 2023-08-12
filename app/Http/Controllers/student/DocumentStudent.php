<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Http\Resources\DocumentResource;

class DocumentStudent extends Controller
{
    /**
     * Trả về danh sách tài liệu dưới dạng API JSON.
     */
    public function index()
    {
        $documents = Document::all();
        return DocumentResource::collection($documents);
    }

    /**
     * Trả về thông tin chi tiết một tài liệu dưới dạng API JSON.
     */
    public function show(string $id)
    {
        $document = Document::find($id);
        if ($document) {
            return new DocumentResource($document);
        } else {
            return response()->json(['message' => 'Tài liệu không tồn tại'], 404);
        }
    }
}
