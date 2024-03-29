<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\SeminaryTypeFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\SeminaryType
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static SeminaryTypeFactory factory(...$parameters)
 * @method static Builder|SeminaryType newModelQuery()
 * @method static Builder|SeminaryType newQuery()
 * @method static Builder|SeminaryType query()
 * @method static Builder|SeminaryType whereCreatedAt($value)
 * @method static Builder|SeminaryType whereId($value)
 * @method static Builder|SeminaryType whereName($value)
 * @method static Builder|SeminaryType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read Collection|Seminar[] $seminars
 * @property-read int|null $seminars_count
 */
class SeminaryType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function seminars(): HasMany
    {
        return $this->hasMany(Seminar::class);
    }
}
