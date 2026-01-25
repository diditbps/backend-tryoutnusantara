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
            'soal' => $this->soal,
            'jawaban' => $this->jawaban,
            'paket' => $this->kode_paket,
            'pilihan' => [
                $this->pilihan1,
                $this->pilihan2,
                $this->pilihan3,
                $this->pilihan4,
                $this->pilihan5,
            ],
            'kesulitan' => $this->tingkat_kesulitan,
            'url_image' => $this->url_image,
        ];
    }
}
