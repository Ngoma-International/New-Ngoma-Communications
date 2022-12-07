<?php

declare(strict_types=1);

namespace App\Models;

use App\Castable\AddressCastable;
use Database\Factories\SeminarFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * App\Models\Seminar
 *
 * @property int $id
 * @property int $type_id
 * @property int $seminary_type_id
 * @property string $title
 * @property string $sub_title
 * @property string|null $duration
 * @property string|null $date
 * @property mixed $address
 * @property int $status
 * @property int|null $prices
 * @property string|null $overview
 * @property string|null $participate
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $facilitator_id
 * @property-read Collection|Booking[] $bookings
 * @property-read int|null $bookings_count
 * @property-read SeminaryType $seminarType
 * @property-read Collection|Seminar[] $users
 * @property-read int|null $users_count
 * @method static SeminarFactory factory(...$parameters)
 * @method static Builder|Seminar newModelQuery()
 * @method static Builder|Seminar newQuery()
 * @method static Builder|Seminar query()
 * @method static Builder|Seminar whereAddress($value)
 * @method static Builder|Seminar whereCreatedAt($value)
 * @method static Builder|Seminar whereDate($value)
 * @method static Builder|Seminar whereDescription($value)
 * @method static Builder|Seminar whereDuration($value)
 * @method static Builder|Seminar whereFacilitatorId($value)
 * @method static Builder|Seminar whereId($value)
 * @method static Builder|Seminar whereOverview($value)
 * @method static Builder|Seminar whereParticipate($value)
 * @method static Builder|Seminar wherePrices($value)
 * @method static Builder|Seminar whereSeminaryTypeId($value)
 * @method static Builder|Seminar whereStatus($value)
 * @method static Builder|Seminar whereSubTitle($value)
 * @method static Builder|Seminar whereTitle($value)
 * @method static Builder|Seminar whereTypeId($value)
 * @method static Builder|Seminar whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Seminar extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'type_id',
        'seminary_type_id',
        'title',
        'sub_title',
        'duration',
        'address',
        'date',
        'status',
        'prices',
        'overview',
        'participate',
        'description',
        'facilitator_id',
        'images'
    ];

    protected $casts = [
        'address' => AddressCastable::class,
        'date' => 'datetime'
    ];


    public function renderPoster(): string
    {
        return asset('storage/' . $this->images);
    }

    public function seminarType(): BelongsTo
    {
        return $this->belongsTo(SeminaryType::class, 'seminary_type_id');
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(Facilitator::class, 'facilitator_id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function programs(): HasMany
    {
        return $this->hasMany(EventProgram::class);
    }
}
