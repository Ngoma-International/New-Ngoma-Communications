<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'room_id',
        'room_name',
        'facilitator_id',
        'room_pin',
        'student_id',
        'student_pin',
        'scheduled_date',
        'start_time',
        'status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function seminary(): BelongsTo
    {
        return $this->belongsTo(Seminary::class);
    }
}
