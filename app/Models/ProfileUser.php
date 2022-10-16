<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\ProfileUserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereBirthdays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereEnterprise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereRoleEnterprise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereSector($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfileUser whereUserId($value)
 * @mixin \Eloquent
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
        'role_enterprise',
        'department',
        'sector'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
