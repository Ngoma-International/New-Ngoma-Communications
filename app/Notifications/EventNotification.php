<?php

declare(strict_types=1);

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EventNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public $event)
    {
        //
    }

    public function via(mixed $notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail(mixed $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting('Bonjour')
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    public function toArray(mixed $notifiable): array
    {
        return [
            'username' => $this->event->username,
            'email' => $this->event->email,
            'phone' => $this->event->phone,
            'status' => $this->event->status
        ];
    }
}
