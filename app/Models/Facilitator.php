<?php

namespace App\Models;

use Database\Factories\FacilitatorFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * App\Models\Facilitator
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $firstname
 * @property string|null $organisation
 * @property string|null $position
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $country
 * @property string|null $description
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static FacilitatorFactory factory(...$parameters)
 * @method static Builder|Facilitator newModelQuery()
 * @method static Builder|Facilitator newQuery()
 * @method static Builder|Facilitator query()
 * @method static Builder|Facilitator whereCountry($value)
 * @method static Builder|Facilitator whereCreatedAt($value)
 * @method static Builder|Facilitator whereDescription($value)
 * @method static Builder|Facilitator whereEmail($value)
 * @method static Builder|Facilitator whereFirstname($value)
 * @method static Builder|Facilitator whereId($value)
 * @method static Builder|Facilitator whereOrganisation($value)
 * @method static Builder|Facilitator wherePhone($value)
 * @method static Builder|Facilitator wherePosition($value)
 * @method static Builder|Facilitator whereStatus($value)
 * @method static Builder|Facilitator whereUpdatedAt($value)
 * @method static Builder|Facilitator whereUsername($value)
 * @mixin Eloquent
 */
class Facilitator extends Model implements HasMedia
{
    use HasFactory;
    use Notifiable;
    use InteractsWithMedia;

    protected $fillable = [
        'username',
        'firstname',
        'organisation',
        'position',
        'email',
        'phone',
        'country',
        'description',
        'status'
    ];

    protected $casts = [
        'status' => 'bool'
    ];
}
