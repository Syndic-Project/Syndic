<?php

namespace App\Notifications;

use App\Models\Locataire;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;


class RegisterNotify extends Notification
{
    use Notifiable;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line("
                 Bienvenue!
Nous vous remercions d'avoir choisi {$notifiable->name}pour gérer votre/vos résidences.
Veuillez trouver ci-dessous votre login et mot de passe que nous vous conseillons de garder en sécurité.
N'oubliez pas de nous contacter via l'adresse suivante contact@syndic.com pour toute suggéstion ou amélioration à ajouter dans syndic.com. Nous vous répondrons c'est sûr ;)

                    ")
            ->action('Verifier Votre Email', config('http://localhost:8000/'))
            ->line('Merci!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
