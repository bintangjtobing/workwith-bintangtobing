<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class emailMe extends Mailable
{
    public $name, $email, $project, $pesan;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $project, $pesan)
    {
        $this->name = $name;
        $this->email = $email;
        $this->project = $project;
        $this->pesan = $pesan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($email, 'Hai I have project for you! - Email from ' . $email)
            ->subject('New Project incoming from ' . $this->name . '. Have a good luck! :)')
            ->with([
                'nama' => $this->name,
                'email' => $this->email,
                'project' => $this->project,
                'pesan' => $this->pesan,
            ])
            ->markdown('emails.sites.newproject');
    }
}
