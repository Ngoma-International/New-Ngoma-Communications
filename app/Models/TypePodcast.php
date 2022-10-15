<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\TypePodcastFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\TypePodcast
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static TypePodcastFactory factory(...$parameters)
 * @method static Builder|TypePodcast newModelQuery()
 * @method static Builder|TypePodcast newQuery()
 * @method static Builder|TypePodcast query()
 * @method static Builder|TypePodcast whereCreatedAt($value)
 * @method static Builder|TypePodcast whereId($value)
 * @method static Builder|TypePodcast whereName($value)
 * @method static Builder|TypePodcast whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TypePodcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
}
