<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment_content',
        'comment_date',
        'reviewer_name',
        'reviewer_email',
        'is_hidden'
    ];
}