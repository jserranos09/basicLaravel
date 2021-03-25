<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    // this is a completed method. Used for the assignemnts to show when they are done or not.
    public function completed ()
    {
        // changes $this from 0 to 1. false to true
        $this->completed = true;
        $this->save();
    }
}
