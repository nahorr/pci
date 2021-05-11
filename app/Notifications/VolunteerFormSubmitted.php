<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Volunteer;

class VolunteerFormSubmitted extends Notification
{
    use Queueable;

    protected $volunteer;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($volunteer)
    {
        $this->volunteer = $volunteer;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Volunteer Form Submitted')
            ->line('A new volunteer form has been submitted')
            ->line('Full Name: '.$this->volunteer['first_name'])
            ->line('Full Name: '.$this->volunteer['last_name'])
            ->line('Email: '.$this->volunteer['email'])
            ->line('Phone #: '.$this->volunteer['phone'])
            ->line('Feedback: '.$this->volunteer['feedback'])
            ->line('Date Submitted: '.$this->volunteer['created_at'])
            ->action('Login to View Message', route('login'))
            ->line('Thank you!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
