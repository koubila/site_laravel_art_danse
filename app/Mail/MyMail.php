<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;


class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data ;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct(Request $request)
    { 
        $this->data = $request;
       
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin-mail@gmail.com')
                    ->subject('Nouveau message Art Danse')
                    ->view('emails.mailMessage');
    }
}
