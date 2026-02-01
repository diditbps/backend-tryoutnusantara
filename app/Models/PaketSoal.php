<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaketSoal extends Model
{
    //
    protected $guarded = [];
    public function namaPaketTryout(): BelongsTo
    {
        // Pastikan nama foreign key di tabel soals sesuai (misal: jenis_tryout_id)
        return $this->belongsTo(PaketTryout::class, 'nama_paket_tryout', 'nama_paket_tryout');
    }
}
