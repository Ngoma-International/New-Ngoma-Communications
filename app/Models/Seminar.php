<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\SeminarFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Seminar
 *
 * @property int $id
 * @property int $category_id
 * @property int $seminary_type_id
 * @property int $user_id
 * @property string $name
 * @property string|null $country
 * @property string|null $city
 * @property int|null $prices
 * @property string|null $start_time
 * @property string|null $end_time
 * @property string|null $date
 * @property int $duration
 * @property string|null $address_seminar
 * @property string|null $attend
 * @property string|null $overview
 * @property string|null $images
 * @property int $status
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Category $category
 * @property-read SeminaryType $seminarType
 * @property-read User $user
 * @method static SeminarFactory factory(...$parameters)
 * @method static Builder|Seminar newModelQuery()
 * @method static Builder|Seminar newQuery()
 * @method static Builder|Seminar query()
 * @method static Builder|Seminar whereAddressSeminar($value)
 * @method static Builder|Seminar whereAttend($value)
 * @method static Builder|Seminar whereCategoryId($value)
 * @method static Builder|Seminar whereCity($value)
 * @method static Builder|Seminar whereCountry($value)
 * @method static Builder|Seminar whereCreatedAt($value)
 * @method static Builder|Seminar whereDate($value)
 * @method static Builder|Seminar whereDescription($value)
 * @method static Builder|Seminar whereDuration($value)
 * @method static Builder|Seminar whereEndTime($value)
 * @method static Builder|Seminar whereId($value)
 * @method static Builder|Seminar whereImages($value)
 * @method static Builder|Seminar whereName($value)
 * @method static Builder|Seminar whereOverview($value)
 * @method static Builder|Seminar wherePrices($value)
 * @method static Builder|Seminar whereSeminaryTypeId($value)
 * @method static Builder|Seminar whereStartTime($value)
 * @method static Builder|Seminar whereStatus($value)
 * @method static Builder|Seminar whereUpdatedAt($value)
 * @method static Builder|Seminar whereUserId($value)
 * @mixin Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Booking[] $bookings
 * @property-read int|null $bookings_count
 */
class Seminar extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'seminary_type_id',
        'user_id',
        'name',
        'country',
        'city',
        'prices',
        'start_time',
        'end_time',
        'date',
        'duration',
        'address_seminar',
        'attend',
        'overview',
        'images',
        'description',
        'status'
    ];

    public function renderPoster(): string
    {
        return asset('storage/' . $this->images);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function seminarType(): BelongsTo
    {
        return $this->belongsTo(SeminaryType::class, 'seminary_type_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
