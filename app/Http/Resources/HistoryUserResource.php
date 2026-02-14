<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HistoryUserResource extends JsonResource
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
            'id_user' => $this->id_user,
            'nama_paket_tryout' => $this->nama_paket_tryout,
            'nama_paket_soal' => $this->nama_paket_soal,
            'score' => $this->score,
            'total_correct' => $this->total_correct,
            'total_wrong' => $this->total_wrong,
            'status' => $this->status,
            'tanggal_completed' => $this->tanggal_completed
        ];
    }
}
