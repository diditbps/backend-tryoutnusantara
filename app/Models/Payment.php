<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    //
    protected $guarded = [];
    public function idUser(): BelongsTo
    {
        // Pastikan nama foreign key di tabel soals sesuai (misal: jenis_tryout_id)
        return $this->belongsTo(UserOligarkie::class, 'id_user', 'id');
    }
}
