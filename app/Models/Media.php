<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Post;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'file_type',
        'file_size',
        'url',
        'upload_date',
        'description'
    ];
}
