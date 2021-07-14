<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DonationSuccessful extends Notification
{
    use Queueable;

    protected $donation_data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($donation_data)
    {
        $this->donation_data = $donation_data;
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
                    ->line('A new donation from '.$this->donation_data['name'])
                    ->line('Name: '.$this->donation_data['name'])
                    ->line('Email: '.$this->donation_data['email'])
                    ->line('Amount: '.'$'.$this->donation_data['amount'])
                    ->line('Note: '.$this->donation_data['note'])
                    ->line('Date Donated: '.$this->donation_data['created_at'])
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
