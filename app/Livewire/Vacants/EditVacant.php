<?php

namespace App\Livewire\Vacants;

use App\Models\Category;
use App\Models\Salary;
use Livewire\Component;

class EditVacant extends Component
{
    public $vacant;


    public function render()
    {
        $salaries = Salary::all();
        $categories = Category::all();
        return view('livewire.vacants.edit-vacant',[
            'salaries'   => $salaries,
            'categories' => $categories
        ]);
    }
}
