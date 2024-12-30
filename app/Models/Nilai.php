<?php

namespace App\Models;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $fillable = [
        'alternatif_id', 'kriteria_id', 'nilai',
    ];
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }


    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class);
    }
}
