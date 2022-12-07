<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * App\Models\EventProgram
 *
 * @property string $id
 * @property int $seminar_id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $date
 * @property string|null $start_time
 * @property string|null $end_time
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $facilitator_id
 * @method static Builder|EventProgram newModelQuery()
 * @method static Builder|EventProgram newQuery()
 * @method static Builder|EventProgram query()
 * @method static Builder|EventProgram whereCreatedAt($value)
 * @method static Builder|EventProgram whereDate($value)
 * @method static Builder|EventProgram whereDescription($value)
 * @method static Builder|EventProgram whereEndTime($value)
 * @method static Builder|EventProgram whereFacilitatorId($value)
 * @method static Builder|EventProgram whereId($value)
 * @method static Builder|EventProgram whereSeminarId($value)
 * @method static Builder|EventProgram whereStartTime($value)
 * @method static Builder|EventProgram whereStatus($value)
 * @method static Builder|EventProgram whereTitle($value)
 * @method static Builder|EventProgram whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EventProgram extends Model implements HasMedia
{
    use HasFactory;
    use HasUuids;
    use Notifiable;
    use InteractsWithMedia;

    protected $fillable = [
        'seminar_id',
        'title',
        'description',
        'date',
        'start_time',
        'end_time',
        'status',
        'facilitator_id'
    ];

    public function seminar(): BelongsTo
    {
        return $this->belongsTo(Seminar::class, 'seminar_id');
    }

    public function facilitator(): BelongsTo
    {
        return $this->belongsTo(Facilitator::class, 'facilitator_id');
    }
}
