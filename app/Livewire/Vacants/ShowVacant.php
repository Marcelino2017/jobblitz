<?php

namespace App\Livewire\Vacants;

use App\Models\Vacant;
use Livewire\Component;

class ShowVacant extends Component
{
    protected $listener = ['deleteVacant'];

    public function deleteVacant(Vacant $vacant)
    {
        $vacant->delete();
    }

    public function render()
    {
        $vacants = Vacant::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.vacants.show-vacant', [
            'vacants' => $vacants,
        ]);
    }
}
