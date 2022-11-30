<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\ProfileUserFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\ProfileUser
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $birthdays
 * @property string|null $country
 * @property string|null $city
 * @property string|null $town
 * @property string|null $enterprise
 * @property string|null $role_enterprise
 * @property string|null $department
 * @property string|null $sector
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static ProfileUserFactory factory(...$parameters)
 * @method static Builder|ProfileUser newModelQuery()
 * @method static Builder|ProfileUser newQuery()
 * @method static Builder|ProfileUser query()
 * @method static Builder|ProfileUser whereBirthdays($value)
 * @method static Builder|ProfileUser whereCity($value)
 * @method static Builder|ProfileUser whereCountry($value)
 * @method static Builder|ProfileUser whereCreatedAt($value)
 * @method static Builder|ProfileUser whereDepartment($value)
 * @method static Builder|ProfileUser whereEnterprise($value)
 * @method static Builder|ProfileUser whereId($value)
 * @method static Builder|ProfileUser whereRoleEnterprise($value)
 * @method static Builder|ProfileUser whereSector($value)
 * @method static Builder|ProfileUser whereTown($value)
 * @method static Builder|ProfileUser whereUpdatedAt($value)
 * @method static Builder|ProfileUser whereUserId($value)
 * @mixin Eloquent
 * @property string|null $role
 * @method static Builder|ProfileUser whereRole($value)
 */
class ProfileUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'birthdays',
        'country',
        'city',
        'town',
        'enterprise',
        'role',
        'department',
        'sector'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
