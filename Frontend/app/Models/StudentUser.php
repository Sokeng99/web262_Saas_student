<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentUser extends Model
{
    use HasFactory;
    use \Illuminate\Auth\Authenticatable;

    protected $table = 'student_user';

    protected $primaryKey = 'student_user_id';

    protected $guard = 'studentUser';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'password',
        'is_banned',
        'ban_by_admin_id',
    ];

    // Get the role of the user
    // Will be used to check if the user is a student user or a scholar user
    public function getStatusAttribute($value)
    {
        return $value == 1 ? 'studentUser' : null;
    }

}
