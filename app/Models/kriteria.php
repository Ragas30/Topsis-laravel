<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    return $this->hasMany(Nilai::class);
}

