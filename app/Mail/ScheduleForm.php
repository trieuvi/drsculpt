<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ScheduleForm extends Mailable
{
    use Queueable, SerializesModels;

    public $name; 
    public $email; 
    public $phone; 
    public $title; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $title)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->title = $title;
    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.scheduleform')->subject("Schedule Form on website: " . env('APP_URL'));
    }
}
