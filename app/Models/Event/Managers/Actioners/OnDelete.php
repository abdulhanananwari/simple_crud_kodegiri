<?php

namespace App\Models\Event\Managers\Actioners;

use App\Models\Event\EventModel;


class OnDelete
{
    protected $event;

    public function __construct(EventModel $event)
    {
        $this->event = $event;
    }

    public function action()
    {
        $this->event->delete();
    }
}
