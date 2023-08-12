<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentResource extends JsonResource
{
    public function toArray($request)
    {
        // Định dạng dữ liệu trả về trong JSON
        return [
            'id' => $this->id,
            'name' => $this->name,
            'subject' => $this->subject,
         
        ];
    }
}
