<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\CurriculumFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Curriculum
 *
 * @property string $id
 * @property int $user_id
 * @property string|null $title
 * @property string|null $address
 * @property string|null $contact
 * @property string|null $experience
 * @property string|null $formation
 * @property string|null $competence
 * @property string|null $language
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static CurriculumFactory factory(...$parameters)
 * @method static Builder|Curriculum newModelQuery()
 * @method static Builder|Curriculum newQuery()
 * @method static Builder|Curriculum query()
 * @method static Builder|Curriculum whereAddress($value)
 * @method static Builder|Curriculum whereCompetence($value)
 * @method static Builder|Curriculum whereContact($value)
 * @method static Builder|Curriculum whereCreatedAt($value)
 * @method static Builder|Curriculum whereExperience($value)
 * @method static Builder|Curriculum whereFormation($value)
 * @method static Builder|Curriculum whereId($value)
 * @method static Builder|Curriculum whereLanguage($value)
 * @method static Builder|Curriculum whereTitle($value)
 * @method static Builder|Curriculum whereUpdatedAt($value)
 * @method static Builder|Curriculum whereUserId($value)
 * @mixin Eloquent
 */
class Curriculum extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'user_id',
        'title',
        'address',
        'contact',
        'experience',
        'formation',
        'competence',
        'language'
    ];

    protected $casts = [
        'contact' => [],
        'address' => [],
        'experience' => [],
        'formation' => [],
        'competence' => [],
        'language' => []
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
