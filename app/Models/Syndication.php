<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Syndication extends Model
{
    public function getImageAttribute($image)
    {
        return $image ? asset('storage/' . $image) : null;
    }
}
