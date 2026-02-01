<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PakettryoutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'jenis_tryout' => $this->jenis_tryout,
            'nama_paket_tryout' => $this->nama_paket_tryout,
            'is_premium' => $this->is_premium,
            'harga' => $this->harga,
            'is_event' => $this->is_event,
            'tanggal_rilis' => $this->tanggal_rilis,
            'tanggal_expired' => $this->tanggal_expired,
            'tahun' => $this->tahun,
            'rate' => $this->rate,
        ];
    }
}
