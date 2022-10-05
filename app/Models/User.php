<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'images',
        'about',
        'status',
        'role_id',
        'profession'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime'
    ];

    public function renderImages(): string
    {
        return asset('storage/'. $this->images);
    }

    public function editUsers(): string
    {
        return route('admins.users.edit', $this->id);
    }

    public function getRoleUsers(): string
    {
        return match($this->role_id) {
            1 => "Admin",
            2 => "advisor",
            3 => 'facilitator'
        };
    }


    public function classes(): HasMany
    {
        return $this->hasMany(ClassRoom::class);
    }

    public function seminaries(): HasMany
    {
        return $this->hasMany(Seminary::class);
    }
}
