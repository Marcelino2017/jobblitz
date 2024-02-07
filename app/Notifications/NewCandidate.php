<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCandidate extends Notification
{
    use Queueable;
    public $vacantId;
    public $vacantName;
    public $userId;

    /**
     * Create a new notification instance.
     */
    public function __construct($vacantId, $vacantName, $userId)
    {
        $this->vacantId   = $vacantId;
        $this->vacantName = $vacantName;
        $this->userId     = $userId;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url = url('/notifications/');
        return (new MailMessage)
                    ->line('Has recibido un nuevo candidato en tu vacante.')
                    ->line('La vacante es:'. $this->vacantName)
                    ->action('Ver Notificación', $url)
                    ->line('Gracias por utilizar JOBBLITZ!');
    }

    //Almacena las notificaciones en la base datos
    public function toDatabase($notifiable)
    {
        return [
            'vacant_id'   => $this->vacantId,
            'vacant_name' => $this->vacantName,
            'user_id'     => $this->userId,
        ];
    }
}
