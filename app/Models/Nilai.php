<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }


    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class);
    }
}
