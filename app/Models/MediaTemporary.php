<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\MediaTemporary
 *
 * @property string $id
 * @property int $user_id
 * @property string|null $path
 * @property string|null $extensions
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|MediaTemporary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaTemporary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaTemporary query()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaTemporary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaTemporary whereExtensions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaTemporary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaTemporary wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaTemporary whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaTemporary whereUserId($value)
 * @mixin \Eloquent
 */
class MediaTemporary extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'user_id',
        'path',
        'extensions'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
