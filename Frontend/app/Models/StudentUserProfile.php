<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentUserProfile extends Model
{
    use HasFactory;
    use \Illuminate\Auth\Authenticatable;

    protected $table = 'student_user_profile';

    protected $primaryKey = 'student_user_id';

    protected $guard = 'studentUser';

    protected $fillable = [
        'bio',
        'student_user_id',
        'profile_url',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
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
