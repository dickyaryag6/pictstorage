<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PembayaranTidakValid extends Mailable
{
    use Queueable, SerializesModels;
    public $book;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($book)
    {
        $this->book=$book;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.PembayaranTidakValid')
                    ->with([
                     'orderjenis' => $this->book->order_type,
                     'ordertanggal' => $this->book->date,
                     'orderjam' => $this->book->jam,
     ]);
    }
}