<?php

namespace App\Livewire\Vacants;

use App\Models\Category;
use App\Models\Salary;
use App\Models\Vacant;
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
        $data['image'] = str_replace('public/vacants/', '', $image);

        //crear la vacante
        Vacant::create([
            'title'       => $data['title'],
            'salary_id'   => $data['salary'],
            'category_id' => $data['category'],
            'company'     => $data['company'],
            'last_day'    => $data['last_day'],
            'description' => $data['description'],
            'image'       => $data['image'],
            'user_id'     => auth()->user()->id,
        ]);
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
