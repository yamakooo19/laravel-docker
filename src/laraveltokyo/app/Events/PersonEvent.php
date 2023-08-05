<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use App\Person;

class PersonEvent
{
    use SerializesModels;

    public $person;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Person $person)
    {
        $this->person = $person;
    }
}
