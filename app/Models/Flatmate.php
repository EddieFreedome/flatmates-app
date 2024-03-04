<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flatmate extends Model
{
    use HasFactory;

    function tasks() {
        return $this->belongsToMany(Flatmate::class);
    }
}
