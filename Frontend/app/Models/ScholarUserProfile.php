<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarUserProfile extends Model
{
    use HasFactory;
    use \Illuminate\Auth\Authenticatable;

    protected $table = 'scholar_user_profile';

    protected $primaryKey = 'scholar_user_profile_id';

    protected $guard = 'scholarUser';

    protected $fillable = [
        'scholar_user_id',
        'bio',
        'work',
        'education',
        'experience',
        'profile_url'
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
        return $value == 2 ? 'scholarUser' : null;
    }
}
