<?php

namespace App\Models;

use App\Enums\TypeIconServiceEnum;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'name',
        'min_price',
        'min_hours',
        'percentage',
        'icon',
        'prosition',
        'price_room',
        'hour_room',
        'price_living_room',
        'hour_living_room',
        'price_bathroom',
        'hour_bathroom',
        'price_kitchen',
        'hour_kitchen',
        'price_yard',
        'hour_yard',
        'price_other',
        'hour_other'
    ];

    protected function casts(): array
    {
        return [
            'icon' => TypeIconServiceEnum::class
        ];
    }
}
