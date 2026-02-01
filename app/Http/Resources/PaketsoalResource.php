<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaketsoalResource extends JsonResource
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
            'nama_paket_tryout' => $this->nama_paket_tryout,
            'nama_paket_soal' => $this->nama_paket_soal,
            'deskripsi' => $this->deskripsi,
            'durasi' => $this->durasi,
        ];
    }
}
