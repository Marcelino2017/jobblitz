<?php

namespace App\Livewire\Vacants;

use App\Models\Category;
use App\Models\Salary;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateVacant extends Component
{

    public $title;
    public $salary;
    public $category;
    public $company;
    public $last_day;
    public $description;
    public $image;

    use WithFileUploads;

    protected $rules = [
        'title'       => 'required|string',
        'salary'      => 'required',
        'category'    => 'required',
        'company'     => 'required',
        'last_day'    => 'required',
        'description' => 'required',
        'image'       => 'required|image|max:1024',
    ];

    public function createVacant()
    {
        $data = $this->validate();

        //almacenar imagen
        $image = $this->image->store('public/vacants');
        $imageName = str_replace('public/vacants/', '', $image);
        dd($imageName);
        //crear la vacante

        //Crear mensaje

        //Redireccionar al usuario
    }

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
