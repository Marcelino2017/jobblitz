<?php

namespace App\Livewire\Vacants;

use App\Models\Category;
use App\Models\Salary;
use App\Models\Vacant;
use Illuminate\Support\Carbon;
use Livewire\Component;

class EditVacant extends Component
{
    public $vacant_id;
    public $title;
    public $salary;
    public $category;
    public $company;
    public $last_day;
    public $description;
    public $image;

    protected $rules = [
        'title'       => 'required|string',
        'salary'      => 'required',
        'category'    => 'required',
        'company'     => 'required',
        'last_day'    => 'required',
        'description' => 'required',
    ];

    public function mount(Vacant $vacant)
    {
        $this->vacant_id    = $vacant->id;
        $this->title        = $vacant->title;
        $this->salary       = $vacant->salary_id;
        $this->category     = $vacant->category_id;
        $this->company      = $vacant->company;
        $this->last_day     = Carbon::parse($vacant->last_day)->format('Y-m-d');
        $this->description  = $vacant->description;
        $this->image        = $vacant->image;
    }

    public function editVacant()
    {
        $data = $this->validate();

        //Si hay una nueva imagen

        //Encontrar la vacante a editar
        $vacant = Vacant::find($this->vacant_id);

        //Asignar los valores
        $vacant->title        = $data['title'];
        $vacant->salary_id    = $data['salary'];
        $vacant->category_id  = $data['category'];
        $vacant->company      = $data['company'];
        $vacant->last_day     = $vacant['last_day'];
        $vacant->description  = $data['description'];

        //Guardar Vacante
        $vacant->save();

        //redireccionar
        session()->flash('message', 'La vacante se actualizo correctamente.');

        return redirect()->route('vacants.index');
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
