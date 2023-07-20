<?php
namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Teacher extends Model implements Authenticatable
{
    use HasFactory, Notifiable;

    // protected $table = 'teachers';
    // protected $primaryKey = 'id';
/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'rank',
        'email',
        'password',
        'TEA',
        'subject'
    ];

    protected $hidden = [
        
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Implement các phương thức từ giao diện Authenticatable

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    // Thêm các phương thức khác của model Teacher

    public function getList()
    {
        return $this->all();
    }

    public static function createTeacher($data)
    {
        return self::create($data);
    }

    public static function updateTeacher($id, $data)
    {
        $teacher = self::find($id);
        if ($teacher) {
            $teacher->update($data);
            return $teacher;
        }
        return null;
    }

    public static function deleteTeacher($id)
    {
        $teacher = self::find($id);
        if ($teacher) {
            $teacher->delete();
            return true;
        }
        return false;
    }

    public static function getTeacherById($id)
    {
        return self::find($id);
    }
}
