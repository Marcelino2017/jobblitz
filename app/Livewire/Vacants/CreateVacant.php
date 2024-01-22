<?php

namespace App\Livewire\Vacants;

use App\Models\Category;
use App\Models\Salary;
use Livewire\Component;

class CreateVacant extends Component
{

    public $title;
    public $salary;
    public $category;
    public $company;
    public $last_day;
    public $description;
    public $image;


    protected $rule = [
        'title'       => 'required|string',
        'salary'      => 'required',
        'category'    => 'required',
        'company'     => 'required',
        'last_day'    => 'required',
        'description' => 'required',
        'image'       => 'required',
    ];

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
