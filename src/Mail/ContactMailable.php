<?php

namespace Emad\ContactUsPackage\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    public $name;
    public $phone;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message,$name,$phone,$email)
    {
        $this->message = $message;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact-us-package::email')->with(['message' => $this->message
        ,'name' => $this->name,'phone' => $this->phone, 'email' => $this->email]);
    }
}
