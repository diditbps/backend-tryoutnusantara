<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HistorySoalResource extends JsonResource
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
            'id_history_user' => $this->id_history_user,
            'id_soal' => $this->id_soal,
            'jawaban_user' => $this->jawaban_user,
            'is_correct' => $this->is_correct
        ];
    }
}
