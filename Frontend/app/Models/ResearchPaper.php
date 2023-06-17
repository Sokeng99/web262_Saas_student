<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchPaper extends Model
{
    use HasFactory;
    protected $table = 'research_paper';

    protected $primaryKey = 'research_paper_id';

    protected $fillable = [
        'scholar_user_id',
        'title',
        'description',
        'website',
        'pdf_url',
        'publish_date'
    ];

    protected $hidden = [
        'is_banned',
        'ban_by_admin_id',
        'created_at',
        'updated_at',
    ];
}
