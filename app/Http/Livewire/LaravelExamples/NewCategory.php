<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;

use App\Models\Category;

class NewCategory extends Component
{
    public $name = '';
    public $description = '';

    protected $rules = [
        'name' => 'required|unique:categories',
        'description' => ''
    ]; 

    public function addCategory() {
        $this->validate();
        Category::create([
            'name' => $this->name,
            'description' => $this->description
        ]);
        session()->flash('succes', 'The category has been added successfully.');
        return redirect(route('category-management'));
    }

    public function render()
    {
        return view('livewire.laravel-examples.new-category');
    }
}
