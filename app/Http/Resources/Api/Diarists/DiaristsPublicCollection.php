<?php

namespace App\Http\Resources\Api\Diarists;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DiaristsPublicCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'diarists' => DiaristsPublicResource::collection($this->collection),
        ];
    }
}
