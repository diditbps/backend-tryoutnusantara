<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistoryUser extends Model
{
    //
    protected $guarded = [];
    public function idUser(): BelongsTo
    {
        // Pastikan nama foreign key di tabel soals sesuai (misal: jenis_tryout_id)
        return $this->belongsTo(UserOligarkie::class, 'id_user', 'id');
    }
    public function namaPaketTryout(): BelongsTo
    {
        // Pastikan nama foreign key di tabel soals sesuai (misal: jenis_tryout_id)
        return $this->belongsTo(PaketSoal::class, 'nama_paket_tryout', 'nama_paket_tryout');
    }
    public function namaPaketSoal(): BelongsTo
    {
        // Pastikan nama foreign key di tabel soals sesuai (misal: jenis_tryout_id)
        return $this->belongsTo(Soal::class, 'nama_paket_soal', 'nama_paket_soal');
    }
}
