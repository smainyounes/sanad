<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminInvitationNotification extends Notification
{
    use Queueable;
    protected $invitationToken;

    /**
     * Create a new notification instance.
     */
    public function __construct($invitationToken)
    {
        $this->invitationToken = $invitationToken;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Invitation à Devenir Administrateur')
            ->line('Vous avez été invité à devenir administrateur. Veuillez cliquer sur le bouton ci-dessous pour définir votre mot de passe et activer votre compte.')
            ->action('Définir le Mot de Passe', url('/admin/invitation/' . $this->invitationToken))
            ->line('Merci d\'utiliser notre application !');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
