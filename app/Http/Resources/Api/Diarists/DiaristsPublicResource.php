<?php

namespace App\Http\Resources\Api\Diarists;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DiaristsPublicResource extends JsonResource
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
            'name' => $this->name,
            'reputation' => $this->reputation,
            'photo_user_url' => $this->photo_user_url,
            'city' => 'Goiania',
        ];
    }
}
