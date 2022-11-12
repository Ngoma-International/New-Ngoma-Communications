<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\MediaTemporary
 *
 * @property string $id
 * @property int $user_id
 * @property string|null $path
 * @property string|null $extensions
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static Builder|MediaTemporary newModelQuery()
 * @method static Builder|MediaTemporary newQuery()
 * @method static Builder|MediaTemporary query()
 * @method static Builder|MediaTemporary whereCreatedAt($value)
 * @method static Builder|MediaTemporary whereExtensions($value)
 * @method static Builder|MediaTemporary whereId($value)
 * @method static Builder|MediaTemporary wherePath($value)
 * @method static Builder|MediaTemporary whereUpdatedAt($value)
 * @method static Builder|MediaTemporary whereUserId($value)
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
