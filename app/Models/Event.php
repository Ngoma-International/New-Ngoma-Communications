<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\EventEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Event extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'firstname',
        'username',
        'email',
        'company',
        'jobTitle',
        'phone',
        'city',
        'category',
        'comments',
        'status'
    ];

    protected $casts = [
        'status' => EventEnum::class
    ];
}
