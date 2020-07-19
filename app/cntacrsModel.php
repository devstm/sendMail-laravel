<?php

namespace App;

use App\contacrs;
use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\SerializesModels;

class cntacrsModel extends Model
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contacrs.index');
    }
}
