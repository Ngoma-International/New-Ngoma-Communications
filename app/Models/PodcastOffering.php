<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\PodcastOfferingFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\PodcastOffering
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static PodcastOfferingFactory factory(...$parameters)
 * @method static Builder|PodcastOffering newModelQuery()
 * @method static Builder|PodcastOffering newQuery()
 * @method static Builder|PodcastOffering query()
 * @method static Builder|PodcastOffering whereCreatedAt($value)
 * @method static Builder|PodcastOffering whereId($value)
 * @method static Builder|PodcastOffering whereName($value)
 * @method static Builder|PodcastOffering whereUpdatedAt($value)
 * @mixin Eloquent
 */
class PodcastOffering extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
}
