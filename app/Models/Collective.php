<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\CollectiveFactory;
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
 * App\Models\Collective
 *
 * @property int $id
 * @property string $organisation_name
 * @property string|null $organisation_register_number
 * @property string|null $organisation_industry
 * @property string|null $organisation_country
 * @property string|null $organisation_position
 * @property string|null $organisation_city
 * @property string|null $organisation_province
 * @property string|null $organisation_website
 * @property string|null $member_username
 * @property string|null $member_lastname
 * @property string|null $member_email
 * @property string|null $member_phone
 * @property string|null $member_job_title
 * @property int|null $member_number
 * @property string|null $contact_username
 * @property string|null $contact_firstname
 * @property string|null $contact_email
 * @property string|null $contact_phone
 * @property string|null $matricule
 * @property string|null $contact_job_title
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static CollectiveFactory factory(...$parameters)
 * @method static Builder|Collective newModelQuery()
 * @method static Builder|Collective newQuery()
 * @method static Builder|Collective query()
 * @method static Builder|Collective whereContactEmail($value)
 * @method static Builder|Collective whereContactFirstname($value)
 * @method static Builder|Collective whereContactJobTitle($value)
 * @method static Builder|Collective whereContactPhone($value)
 * @method static Builder|Collective whereContactUsername($value)
 * @method static Builder|Collective whereCreatedAt($value)
 * @method static Builder|Collective whereId($value)
 * @method static Builder|Collective whereMatricule($value)
 * @method static Builder|Collective whereMemberEmail($value)
 * @method static Builder|Collective whereMemberJobTitle($value)
 * @method static Builder|Collective whereMemberLastname($value)
 * @method static Builder|Collective whereMemberNumber($value)
 * @method static Builder|Collective whereMemberPhone($value)
 * @method static Builder|Collective whereMemberUsername($value)
 * @method static Builder|Collective whereOrganisationCity($value)
 * @method static Builder|Collective whereOrganisationCountry($value)
 * @method static Builder|Collective whereOrganisationIndustry($value)
 * @method static Builder|Collective whereOrganisationName($value)
 * @method static Builder|Collective whereOrganisationPosition($value)
 * @method static Builder|Collective whereOrganisationProvince($value)
 * @method static Builder|Collective whereOrganisationRegisterNumber($value)
 * @method static Builder|Collective whereOrganisationWebsite($value)
 * @method static Builder|Collective whereStatus($value)
 * @method static Builder|Collective whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Collective extends Model implements HasMedia
{
    use HasFactory;
    use Notifiable;
    use HasUuids;
    use InteractsWithMedia;

    protected $fillable = [
        'organisation_name',
        'organisation_register_number',
        'organisation_industry',
        'organisation_country',
        'organisation_position',
        'organisation_city',
        'organisation_province',
        'organisation_website',
        'member_username',
        'member_lastname',
        'member_email',
        'member_phone',
        'member_job_title',
        'member_number',
        'contact_username',
        'contact_firstname',
        'contact_email',
        'contact_phone',
        'contact_job_title',
        'status',
    ];

    protected $casts = [
        'member_number' => 'integer',
        'status' => 'bool'
    ];
}
