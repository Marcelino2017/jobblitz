<?php

namespace App\Livewire\Vacants;

use App\Models\Category;
use App\Models\Salary;
use Livewire\Component;

class CreateVacant extends Component
{
    public function render()
    {
        //consultar DB
        $salaries = Salary::all();
        $categories = Category::all();

        return view('livewire.vacants.create-vacant', [
            'salaries'   => $salaries,
            'categories' => $categories
        ]);
    }
}
