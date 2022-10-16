<?php

declare(strict_types=1);

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminNotification extends Notification
{
    use Queueable;

    public function __construct(public object $users)
    {
        //
    }

    public function via(mixed $notifiable): array
    {
        return ['database'];
    }

    public function toMail(mixed $notifiable): MailMessage
    {
        return (new MailMessage())
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    public function toArray(mixed $notifiable): array
    {
        return [
            'name' => $this->users->name,
            'role_id' => $this->users->role_id,
            'profession' => $this->users->profession,
            'created_at' => $this->users->created_at
        ];
    }
}
