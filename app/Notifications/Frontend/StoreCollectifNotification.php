<?php

declare(strict_types=1);

namespace App\Notifications\Frontend;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class StoreCollectifNotification extends Notification
{
    use Queueable;

    public function __construct(public $collectif)
    {
        //
    }

    public function via(mixed $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(mixed $notifiable): MailMessage
    {
        return (new MailMessage())
            ->greeting('Felicitation')
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    public function toArray(mixed $notifiable): array
    {
        return [
            'member_email' => $this->collectif->member_email,
            'matricule' => $this->collectif->matricule,
            'contact_email' => $this->collectif->contact_email
        ];
    }
}
