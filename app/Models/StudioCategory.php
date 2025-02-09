<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudioCategory extends Model
{
    public function studios()
    {
        return $this->hasMany(Studio::class);
    }
}
