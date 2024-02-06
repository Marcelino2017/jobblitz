<?php

namespace App\Livewire\Vacants;

use Livewire\Component;

class ShowVacant extends Component
{
    public $vacant;

    public function render()
    {
        return view('livewire.vacants.show-vacant');
    }
}
