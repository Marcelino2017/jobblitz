<?php

namespace App\Livewire\Vacants;

use App\Models\Candidate;
use App\Models\Vacant;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ApplyVacant extends Component
{
    use WithFileUploads;
    public $cv;
    public $vacant;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function mount(Vacant $vacant)
    {
        $this->vacant = $vacant;
    }

    public function apply()
    {
        $data = $this->validate();

        //Almacenar CV en el disco duro
        $cv = $this->cv->store('public/cv');
        $data['cv'] = str_replace('public/cv/', '', $cv);

        //Crear la vacante
        $this->vacant->candidate()->create([
            'user_id'   => auth()->user()->id,
            'cv'        => $data['cv']
        ]);

        //crear la notificación de email


        //Mostrar el usuario un mensaje de ok
        session()->flash('message', 'Se envió correctamente tu información, mucha suerte');

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.vacants.apply-vacant');
    }
}
