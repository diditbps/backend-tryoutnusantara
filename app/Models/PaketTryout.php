<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaketTryout extends Model
{
    //
    protected $guarded = [];

    public function jenisTryout(): BelongsTo
    {
        // Pastikan nama foreign key di tabel soals sesuai (misal: jenis_tryout_id)
        return $this->belongsTo(jenisTryout::class, 'jenis_tryout', 'jenis_tryout');
    }
}
