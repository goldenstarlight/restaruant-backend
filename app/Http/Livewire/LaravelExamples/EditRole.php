<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use Illuminate\Validation\Rule;

use App\Models\Role;

class EditRole extends Component
{
    public Role $role;

    public function rules() {
        return [
            'role.name' => ['required', Rule::unique('roles', 'name')->ignore($this->role)],
            'role.description' => 'required'
        ];
    }

    public function mount($id) {
        if(auth()->user()->isAdmin() && Role::find($id) !== null){
            $this->role = Role::find($id);
        }else {
            redirect('404');
        }
    }

    public function editRole() {
        $this->validate();
        $this->role->update();
        
        session()->flash('succes', ' The role has been changed successfully.');
        return redirect(route('roles-management'));
    }

    public function render()
    {
        return view('livewire.laravel-examples.edit-role');
    }
}
