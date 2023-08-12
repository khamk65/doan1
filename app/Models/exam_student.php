<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam_student extends Model
{
    use HasFactory;
    protected $fillable=[
        
        'id_doexam',
        'class',
        'id_student',
        'end_time'

            ];
}
