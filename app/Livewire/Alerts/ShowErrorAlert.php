<?php

namespace App\Livewire\Alerts;

use Livewire\Component;

class ShowErrorAlert extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.alerts.show-error-alert');
    }
}
