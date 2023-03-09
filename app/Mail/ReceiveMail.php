<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReceiveMail extends Mailable
{
    use Queueable, SerializesModels;


     public $jobinfo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($jobinfo)
    {
        $this->jobinfo = $jobinfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');  applicantemail.blade

        return $this->subject('You Have Successfully Applied For This Job')->view('layouts.applicantemail');

    }
}
