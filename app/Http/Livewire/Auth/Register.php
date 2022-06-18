<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Role;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $first_name = '';
    public $last_name = '';
    public $password = '';
    public $role_id = '';

    public $roles;

    protected $messages = [
        'role_id.required' => 'The role is required',
    ]; 

    public function mount() {
        if(auth()->user()) {
            return redirect()->intended('/dashboard-default');      
        }
        $this->roles = Role::take(3)->get();
    }
 
    public function rules() {
        return  [
            'name' => 'required|min:2',
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:6',
            'role_id' => 'required',
        ];
    }

    public function register() {
        $this->validate();
        
        if(is_array($this->role_id) && array_key_exists("value", $this->role_id)) {
            $this->role_id = intval($this->role_id['value']);
        }
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'role_id' => $this->role_id,
            'password' => Hash::make($this->password)
        ]);

        auth()->login($user);

        return redirect('/dashboard-default');
    }

    
    public function render()
    {
        return view('livewire.auth.register');
    }
}
