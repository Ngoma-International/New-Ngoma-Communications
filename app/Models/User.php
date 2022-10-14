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
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'images',
        'about',
        'status',
        'role_id',
        'firstname',
        'profession',
        'description'
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
        return asset('storage/' . $this->images);
    }

    public function getRoleUsers(): string
    {
        return match ((int)$this->role_id) {
            1 => "Admin",
            2 => "Advisor",
            3 => 'Facilitator',
            'default' => ""
        };
    }
}
