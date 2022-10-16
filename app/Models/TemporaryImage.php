<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\TemporaryImage
 *
 * @property int $id
 * @property string $images
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\TemporaryImageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryImage whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryImage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryImage whereUserId($value)
 * @mixin \Eloquent
 */
class TemporaryImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'images'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
