<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrafikTrafik extends Model
{
    use HasFactory;

    protected $table = 'grafik_trafik';

    protected $fillable = [
        'instansi_id',
        'nama',
        'url_2jam',
        'url_24jam',
        'url_30hari',
        'url_365hari',
    ];

    public function instansi()
    {
        return $this->belongsTo(Instansi::class);
    }
}
