<?php

namespace App\Models;

use App\Enums\TypeUserEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use HasFactory;
    use HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',
        'birth_date',
        'photo_document_url',
        'photo_user_url',
        'phone',
        'type_user',
        'pix_key',
        'reputation',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'birth_date' => 'date',
            'password' => 'hashed',
            'type_user' => TypeUserEnum::class,
            'status' => 'boolean',
        ];
    }

    /**
     * Scope a query to only include diarists.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeDiarists(Builder $query): Builder
    {
        return $query
            ->where('type_user', TypeUserEnum::Diarist)
            ->where('status', true);
    }

    public function cities(): BelongsToMany
    {
        return $this->belongsToMany(City::class, 'city_diarist', 'diarist_id', 'city_id');
    }
}
