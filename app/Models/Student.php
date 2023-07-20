<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student extends Model implements Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'students';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'class',
        'email',
        'password',
        'STD'
    ];

    protected $hidden = [
        
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

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

    // Thêm các phương thức khác của model Student
}
