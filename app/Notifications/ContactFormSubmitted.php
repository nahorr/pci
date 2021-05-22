<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactFormSubmitted extends Notification
{
    use Queueable;

    protected $contact_us;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($contact_us)
    {
        $this->contact_us = $contact_us;
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
                ->subject('New Contact Us Form Submitted')
                ->line('A new contact us form has been submitted')
                ->line('Email: '.$this->contact_us['email'])
                ->line('Phone #: '.$this->contact_us['phone'])
                ->line('Subject: '.$this->contact_us['subject'])
                ->line('Message: '.$this->contact_us['msg'])
                ->line('Date Submitted: '.$this->contact_us['created_at'])
                //->action('Login to View Message', route('login'))
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
