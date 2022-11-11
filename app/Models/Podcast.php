<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\PodcastFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Podcast
 *
 * @property int $id
 * @property int $type_podcast_id
 * @property int $podcast_offering_id
 * @property int $user_id
 * @property string $title
 * @property string|null $thumbnail
 * @property string $images_video
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read PodcastOffering $offering
 * @property-read TypePodcast $type
 * @method static PodcastFactory factory(...$parameters)
 * @method static Builder|Podcast newModelQuery()
 * @method static Builder|Podcast newQuery()
 * @method static Builder|Podcast query()
 * @method static Builder|Podcast whereCreatedAt($value)
 * @method static Builder|Podcast whereId($value)
 * @method static Builder|Podcast whereImagesVideo($value)
 * @method static Builder|Podcast wherePodcastOfferingId($value)
 * @method static Builder|Podcast whereThumbnail($value)
 * @method static Builder|Podcast whereTitle($value)
 * @method static Builder|Podcast whereTypePodcastId($value)
 * @method static Builder|Podcast whereUpdatedAt($value)
 * @method static Builder|Podcast whereUserId($value)
 * @mixin Eloquent
 * @property int $status
 * @method static Builder|Podcast whereStatus($value)
 */
class Podcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'thumbnail',
        'images_video',
        'user_id',
        'type_podcast_id',
        'podcast_offering_id',
        'status'
    ];

    public function renderThumbnail(): string
    {
        return asset('storage/' . $this->thumbnail);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(TypePodcast::class, 'type_podcast_id');
    }

    public function offering(): BelongsTo
    {
        return $this->belongsTo(PodcastOffering::class, 'podcast_offering_id');
    }
}
