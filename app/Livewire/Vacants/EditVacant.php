<?php

namespace App\Livewire\Vacants;

use App\Models\Category;
use App\Models\Salary;
use App\Models\Vacant;
use Illuminate\Support\Carbon;
use Livewire\Component;

class EditVacant extends Component
{
    public $title;
    public $salary;
    public $category;
    public $company;
    public $last_day;
    public $description;
    public $image;

    public function mount(Vacant $vacant)
    {
        $this->title        = $vacant->title;
        $this->salary       = $vacant->salary_id;
        $this->category     = $vacant->category_id;
        $this->company      = $vacant->company;
        $this->last_day     = Carbon::parse($vacant->last_day)->format('Y-m-d');
        $this->description  = $vacant->description;
        $this->image        = $vacant->image;
    }

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
