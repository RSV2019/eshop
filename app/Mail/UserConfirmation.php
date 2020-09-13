<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    protected $code;
    protected $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($code,$name)
    {
        $this->code=$code;
        $this->name=$name;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('register@tekwill.md')->markdown('emails.user.confirmation',
        ['name'=>$this->name,'code'=>$this->code]);
    }
}
