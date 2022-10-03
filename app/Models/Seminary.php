<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Seminary extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'user_id',
        'seminary_name',
        'seminary_photo',
        'seminary_price',
        'seminary_startTime',
        'seminary_endTime',
        'seminary_duration',
        'seminary_date',
        'seminary_description',
        'seminary_target',
        'seminary_outline',
        'seminary_avenue',
        'seminary_country',
        'seminary_city',
        'seminary_offering',
        'status',
    ];

    private function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function classes(): HasOne
    {
        return $this->hasOne(ClassRoom::class);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
