<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class KonfirmasiPembayaran extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($book)
    {
        $this->bookingdata = $book;
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
      // uploadBuktiPembayaran/{userid}/{orderid}
        return (new MailMessage)
                    // ->line('Pembayaran anda untuk order'.$this->bookingdata['id'].'untuk tanggal'.$this->bookingdata['date'])
                    // ->line('sebesar *jumlahpembayaran* sudah dikonfirmasi ' )
                    // ->action('Notification Action', url('/'))
                    // ->line('Terima Kasih');
                    ->greeting('Hello');
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
