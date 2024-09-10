<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class City extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'ibge_code',
        'city',
        'state'
    ];

    public function diarists(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'city_diarist', 'city_id', 'diarist_id');
    }
}
