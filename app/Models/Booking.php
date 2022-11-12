<?php

declare(strict_types=1);

namespace App\Models;

use App\Events\BookingEvent;
use App\Events\ConfirmBooking;
use Database\Factories\BookingFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Seminar $seminar
 * @method static BookingFactory factory(...$parameters)
 * @method static Builder|Booking newModelQuery()
 * @method static Builder|Booking newQuery()
 * @method static Builder|Booking query()
 * @method static Builder|Booking whereBookingAt($value)
 * @method static Builder|Booking whereCountry($value)
 * @method static Builder|Booking whereCreatedAt($value)
 * @method static Builder|Booking whereEmail($value)
 * @method static Builder|Booking whereFirstname($value)
 * @method static Builder|Booking whereId($value)
 * @method static Builder|Booking wherePhoneNumber($value)
 * @method static Builder|Booking whereSeminarId($value)
 * @method static Builder|Booking whereStatus($value)
 * @method static Builder|Booking whereTicketNumber($value)
 * @method static Builder|Booking whereTransactionCode($value)
 * @method static Builder|Booking whereUpdatedAt($value)
 * @method static Builder|Booking whereUsername($value)
 * @mixin Eloquent
 */
class Booking extends Model
{
    use HasFactory;
    use Notifiable;

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

    protected $dispatchesEvents = [
        'stored' => BookingEvent::class,
        'updated' => ConfirmBooking::class
    ];

    public function seminar(): BelongsTo
    {
        return $this->belongsTo(Seminar::class);
    }
}
