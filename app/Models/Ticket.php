<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'seminary_id',
        'ticket_buyer',
        'ticket_buyer_email',
        'ticket_phone',
        'ticket_code',
        'ticket_date_purchased',
        'ticket_status',
        'ticket_contact'
    ];

    public function seminary(): BelongsTo
    {
        return $this->belongsTo(Seminary::class);
    }
}
