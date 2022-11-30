<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\MemberFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * App\Models\Member
 *
 * @property string $id
 * @property string|null $username
 * @property string|null $firstname
 * @property string|null $email
 * @property string|null $birthday
 * @property string|null $country
 * @property string|null $city
 * @property string|null $position
 * @property string|null $department
 * @property string|null $sector
 * @property string|null $phone_number
 * @property string|null $matricule
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static MemberFactory factory(...$parameters)
 * @method static Builder|Member newModelQuery()
 * @method static Builder|Member newQuery()
 * @method static Builder|Member query()
 * @method static Builder|Member whereBirthday($value)
 * @method static Builder|Member whereCity($value)
 * @method static Builder|Member whereCountry($value)
 * @method static Builder|Member whereCreatedAt($value)
 * @method static Builder|Member whereDepartment($value)
 * @method static Builder|Member whereEmail($value)
 * @method static Builder|Member whereFirstname($value)
 * @method static Builder|Member whereId($value)
 * @method static Builder|Member whereMatricule($value)
 * @method static Builder|Member wherePhoneNumber($value)
 * @method static Builder|Member wherePosition($value)
 * @method static Builder|Member whereSector($value)
 * @method static Builder|Member whereStatus($value)
 * @method static Builder|Member whereUpdatedAt($value)
 * @method static Builder|Member whereUsername($value)
 * @mixin Eloquent
 */
class Member extends Model implements HasMedia
{
    use HasFactory;
    use HasUuids;
    use Notifiable;

    use InteractsWithMedia;

    protected $fillable = [
        'username',
        'firstname',
        'email',
        'birthday',
        'country',
        'city',
        'position',
        'department',
        'sector',
        'phone_number',
        'status'
    ];

    protected $casts = [
        'birthday' => 'date',
        'status' => 'bool'
    ];
}
