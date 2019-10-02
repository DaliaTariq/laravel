<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CountactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $content;
    public $mobile;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name ,$email,$mobile ,$content)
    {
        //
        $this->name =$name;
        $this->email= $email;
        $this->content = $content;
        $this->mobile= $mobile;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contact')
                                           ->from('noreplay@bbb.com');
    }
}
