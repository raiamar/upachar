<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class userRegisterMail extends Mailable {
    use Queueable, SerializesModels;
    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details) {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        $details = json_decode($this->details, true);
        return $this->from('muniraj.nextnepal@gmail.com', 'Upachar Pharmacy')
                    ->subject('New Shop Registered')
                    ->markdown('emails.vendor')
                    ->with([
                                   'name' => (isset($details['name']) ? $details['name'] : ''),
                                   'address' => (isset($details['address']) ? $details['address'] : ''),
                                   'id' => (isset($details['id']) ? $details['id'] : ''),
                           ]);
    }
}
