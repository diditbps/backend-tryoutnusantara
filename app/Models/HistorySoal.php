<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistorySoal extends Model
{
    //
    protected $guarded = [];
    public function idHistoryuser(): BelongsTo
    {
        // Pastikan nama foreign key di tabel soals sesuai (misal: jenis_tryout_id)
        return $this->belongsTo(HistoryUser::class, 'id_history_user', 'id');
    }
    public function idSoal(): BelongsTo
    {
        // Pastikan nama foreign key di tabel soals sesuai (misal: jenis_tryout_id)
        return $this->belongsTo(Soal::class, 'id_soal', 'id');
    }
}
