<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SoalApiResource extends JsonResource
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
            'nama_paket_soal' => $this->nama_paket_soal,
            'soal' => $this->soal,
            'pilihan' => [
                'A' => $this->pilihan1,
                'B' => $this->pilihan2,
                'C' => $this->pilihan3,
                'D' => $this->pilihan4,
                'E' => $this->pilihan5,
            ],
            'tingkat_kesulitan' => $this->tingkat_kesulitan,
            'url_image' => $this->url_image,
            'jawaban' => $this->jawaban,
            'pembahasan' => $this->pembahasan,
            'hint' => $this->hint,
            'poin' => $this->poin,
            'check_qc' => $this->check_qc,
            'nama_qc' => $this->nama_qc,
        ];
    }
}
