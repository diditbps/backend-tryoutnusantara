<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserOligarkieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nama' => $this->nama,
            'email' => $this->email,
            'no_hp' => $this->no_hp,
            'password' => $this->password,
            'role' => $this->role,
            'is_premium' => $this->is_premium,
            'poin' => $this->poin,
            'last_login' => $this->last_login
        ];
    }
}
