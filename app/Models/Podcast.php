<?php

declare(strict_types=1);

namespace App\Models;

use App\Http\Controllers\Backend\Podcast\Enums\PodcastEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'podcast_title',
        'podcast_type',
        'podcast_offering',
        'thumbnail',
        'podcast_file'
    ];

    protected $casts = [
        'podcast_type' => PodcastEnums::class
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
