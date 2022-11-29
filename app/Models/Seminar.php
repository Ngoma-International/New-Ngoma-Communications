<?php

declare(strict_types=1);

namespace App\Models;

use App\Castable\AddressCastable;
use Database\Factories\SeminarFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

class Seminar extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    protected $casts = [
        'address' => AddressCastable::class,
    ];

    public function renderStartTimeFormat(): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->start_time)->format('H:i');
    }

    public function renderEndTimeFormat(): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->end_time)->format('H:i');
    }


    public function renderPoster(): string
    {
        return asset('storage/' . $this->images);
    }

    public function seminarType(): BelongsTo
    {
        return $this->belongsTo(SeminaryType::class, 'seminary_type_id');
    }

    public function users(): BelongsToMany
    {
        return $this
            ->belongsToMany(
                Seminar::class,
                'user_seminary'
            )
            ->withTimestamps();
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
