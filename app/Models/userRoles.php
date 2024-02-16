<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userRoles extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(users::class, 'user_id', 'id');
    }

    public function role()
    {
        return $this->belongsTo(roles::class, 'role_id', 'id');
    }
}
