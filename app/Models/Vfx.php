<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vfx extends Model
{
    public function getBeforeImageAttribute($image)
    {
        return $image ? asset('storage/' . $image) : null;
    }
    public function getAfterImageAttribute($image)
    {
        return $image ? asset('storage/' . $image) : null;
    }
}
