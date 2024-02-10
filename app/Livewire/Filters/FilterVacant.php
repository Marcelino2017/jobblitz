<?php

namespace App\Livewire\Filters;

use App\Models\Category;
use App\Models\Salary;
use Livewire\Component;

class FilterVacant extends Component
{
    public $term;
    public $category;
    public $salary;

    public function readFormData()
    {
        $this->dispatch('search', $this->term, $this->category, $this->salary,);
    }

    public function render()
    {
        $salaries = Salary::all();
        $categories = Category::all();

        return view('livewire.filters.filter-vacant', [
            'salaries'   => $salaries,
            'categories' => $categories,
        ]);
    }
}
