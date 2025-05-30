<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function goals()
    {
        return $this->hasMany(Goal::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
