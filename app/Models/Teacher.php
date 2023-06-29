<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
  

    protected $fillable = [
        'name',
        'rank',
        'email',
        'password',
        'TEA'

    ];
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];
    public function getList(){
        return $this->all();
    }
    public static function createteacher($data)
{
    return self::create($data);
}
public static function updateteacher($id, $data)
{
    $teacher = self::find($id);
    if ($teacher) {
        $teacher->update($data);
        return $teacher;
    }
    return null;
}
public static function deleteteacher($id)
{
    $teacher = self::find($id);
    if ($teacher) {
        $teacher->delete();
        return true;
    }
    return false;
}
public static function getteacherById($id)
{
    return self::find($id);
}

}
