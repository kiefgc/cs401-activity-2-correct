<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_name',
        'description'
    ];

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class, 'user_role_relationship');
    }
}