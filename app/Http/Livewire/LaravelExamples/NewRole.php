<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use App\Models\Role;

class NewRole extends Component
{
    public $name = '';
    public $description = '';
    
    protected $rules = [
        'name' => 'required|unique:roles',
        'description' => 'required'
    ]; 

    public function addRole() {
        $this->validate();
        Role::create([
            'name' => $this->name,
            'description' => $this->description
        ]);
        session()->flash('succes', '   The role has been successfully added.');
        return redirect(route('roles-management'));
    }
    
    public function render()
    {
        return view('livewire.laravel-examples.new-role');
    }
}
