<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\CurriculumFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum query()
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereCompetence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereFormation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curriculum whereUserId($value)
 * @mixin \Eloquent
 */
class Curriculum extends Model
{
    use HasFactory;
    use HasUuids;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
