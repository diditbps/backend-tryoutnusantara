<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Soal extends Model
{
    //
    protected $guarded = [];
    public function paketSoal(): BelongsTo
    {
        // Pastikan nama foreign key di tabel soals sesuai (misal: jenis_tryout_id)
        return $this->belongsTo(PaketSoal::class, 'nama_paket_soal', 'nama_paket_soal');
    }
}
