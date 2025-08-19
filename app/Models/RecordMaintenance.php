<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordMaintenance extends Model
{
    use HasFactory;

    protected $fillable = [
        'instansi_id',
        'jenis',
        'permasalahan',
        'solusi',
        'gambar',
    ];

    public function instansi()
    {
        return $this->belongsTo(Instansi::class);
    }
}
