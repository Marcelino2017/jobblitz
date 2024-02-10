<?php

namespace App\Livewire\Home;

use App\Models\Vacant;
use Livewire\Attributes\On;
use Livewire\Component;

class HomeVacant extends Component
{
    public $term;
    public $category;
    public $salary;

    //protected $listener = ['search'];
    #[On('search')]

    public function search($term, $category, $salary)
    {
        $this->term     = $term;
        $this->category = $category;
        $this->salary   = $salary;
    }

    public function render()
    {
        //when se ejecuta solo si la varaible tiene valor
        $vacants = Vacant::when($this->term, function($query) {
            $query->where('title', 'LIKE', "%" . $this->term . "%");
        })
        ->when($this->term, function($query) {
            // agregamos el 'orWhere' para que sino se encuentra en title lo busque en company
            $query->orWhere('company', 'LIKE', "%" . $this->term . "%");
        })
        ->when($this->category, function($query) {
            $query->where('category_id', '=', $this->category);
        })
        ->when($this->salary, function($query) {
            $query->where('salary_id', '=', $this->salary);
        })
        ->paginate(20);

        return view('livewire.home.home-vacant',[
            'vacants' => $vacants,
        ]);
    }
}
