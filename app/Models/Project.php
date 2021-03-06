<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function user()
    {
        // a project belongs to a user
        return $this->belongsTo(User::class); // select * from user where project_id = 1
    }
}
