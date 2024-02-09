<?php

namespace App\Livewire\Home;

use App\Models\Vacant;
use Livewire\Component;

class HomeVacant extends Component
{
    public $vacants;

    public function mount($vacants)
    {
        $this->vacants = $vacants;
    }

    public function render()
    {
        return view('livewire.home.home-vacant');
    }
}
