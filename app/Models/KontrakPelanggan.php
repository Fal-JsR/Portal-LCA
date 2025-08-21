<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontrakPelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'instansi_id',
        'form_pdf',
        'kontrak_pdf',
    ];

    public function instansi()
    {
        return $this->belongsTo(Instansi::class);
    }
}
