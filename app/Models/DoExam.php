<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doexam extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'subject',
        'time',
        'endtime',
        'description',
        'idquestion',
       'class'
            ];

}
