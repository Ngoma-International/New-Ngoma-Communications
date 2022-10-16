<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Booking
 *
 * @property int $id
 * @property int $seminar_id
 * @property string|null $username
 * @property string|null $firstname
 * @property string|null $country
 * @property string|null $email
 * @property string|null $phone_number
 * @property int $status
 * @property string|null $booking_at
 * @property int $transaction_code
 * @property int $ticket_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Seminar $seminar
 * @method static \Database\Factories\BookingFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking query()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereBookingAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereSeminarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereTicketNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereTransactionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereUsername($value)
 * @mixin \Eloquent
 */
class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'firstname',
        'country',
        'email',
        'phone_number',
        'status',
        'booking_at',
        'transaction_code',
        'seminar_id',
        'ticket_number'
    ];

    public function seminar(): BelongsTo
    {
        return $this->belongsTo(Seminar::class);
    }
}
