<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplyMailable extends Mailable
{
    use Queueable, SerializesModels;


       public $empinfo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($empinfo)
    {
        $this->empinfo = $empinfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
       // $subject = "A New Applicant Apply For This Job";

       // return $this->view('view.name');

      //  return $this->subject($subject)->view('layouts.mailtemplate');

            return $this->subject('A New Applicant Apply For This Job')->view('layouts.mycv');


       // return $this->from('ragibhasan006@gmail.com',"Kaz Kormo")->view('layouts.mailtemplate');
    }
}
