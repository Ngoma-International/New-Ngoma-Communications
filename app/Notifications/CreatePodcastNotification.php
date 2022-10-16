<?php

declare(strict_types=1);

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreatePodcastNotification extends Notification
{
    use Queueable;

    public function __construct(public object $podcast)
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
            'title' => $this->podcast->title,
            'user_id' => $this->podcast->user_id,
            'created_at' => $this->podcast->created_at
        ];
    }
}
