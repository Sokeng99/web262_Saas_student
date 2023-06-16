<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;
    protected $table = 'download';

    protected $primaryKey = 'download_id';

    protected $fillable = [
        'name',
        'logo_url',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
