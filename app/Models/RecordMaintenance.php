<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordMaintenance extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tanggal',
        'instansi_id',
        'nama_perusahaan_tambahan',
        'keluhan',
        'status',
        'keterangan_progress',
        'kebutuhan_perangkat',
        'jenis',
        'gambar',
    ];

    public function instansi()
    {
        return $this->belongsTo(Instansi::class);
    }
}
