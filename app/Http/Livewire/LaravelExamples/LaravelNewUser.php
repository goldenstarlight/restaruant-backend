<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Role;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LaravelNewUser extends Component
{
    use WithFileUploads;
    public $roles;

    public $first_name = '';
    public $last_name = '';
    public $role_id = '';
    public $company = '';
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';
    public $first_address = '';
    public $second_address = '';
    public $city = '';
    public $state = '';
    public $zip = '';
    public $twitter = '';
    public $facebook = '';
    public $instagram = '';
    public $public_email = '';
    public $bio = '';
    public $upload = '';

    public $currentStep = 1;

    protected $messages = [
        'role_id.required' => 'Please choose a role',
        'upload.image' => 'Please upload an image',
        'upload.max' => 'The image size is too big. Make sure it\'s under 2MB',
    ]; 

    public function mount() {
        $this->roles = Role::all();
    }

    public function firstStepSubmit() {
        $validatedData = $this->validate([
            'first_name' => 'max:20',
            'last_name' => 'max:20',
            'role_id' => 'required',
            'company' => 'nullable',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:6|same:passwordConfirmation',
        ]);
        $this->currentStep = 2;
    }

    public function secondStepSubmit() {
        $validatedData = $this->validate([
            'first_address' => '',
            'second_address' => '',
            'city' => '',
            'state' => '',
            'zip' => '',
        ]);

        $this->currentStep = 3;
    }

    public function thirdStepSubmit() {
        $validateData = $this->validate([
            'twitter' => '',
            'facebook' => '',
            'instagram' => '',
        ]);

        $this->currentStep = 4;
    }

    public function addUser() {
        $validateData = $this->validate([
            'upload' => 'nullable|image|max:2000',
            'bio' => '',
            'public_email' => '',
        ]);

        if(is_array($this->role_id) && array_key_exists("value", $this->role_id)) {
            $this->role_id = intval($this->role_id['value']);
        }

        $user = User::create([
            'role_id' => $this->role_id,
            'name' => $this->first_name.' '.$this->last_name,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'company' => $this->company,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'first_address' => $this->first_address,
            'second_address' => $this->second_address,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
            'twitter' => $this->twitter,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'public_email' => $this->public_email,
            'bio' => $this->bio
        ]);
        
        $this->upload && $user->update([
            'avatar' => $this->upload->store('/', 'avatars')
        ]);

        $this->reset(['first_name', 'last_name', 'company', 'email', 'password', 'passwordConfirmation', 'first_address', 'second_address', 'city', 'state', 'zip', 'twitter', 'facebook', 'instagram', 'public_email', 'bio']);

        $this->currentStep = 1;

        session()->flash('succes', 'Your user has been created.');
        return redirect(route('users-management'));
    }

    public function back()
    {
        $this->currentStep--;
    }
    
    public function render()
    {
        return view('livewire.laravel-examples.laravel-new-user');
    }
}
