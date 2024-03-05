<?php

namespace App\Http\Livewire;

use Livewire\Component;
use omnia\LivewireCalendar\Livewirecalendar;

class TasksCalendar extends App\Http\Livewire\Livewirecalendar
{
    public function render()
    {
        return view('livewire.tasks-calendar');
    }
}
