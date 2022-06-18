<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EditUser extends Component
{
    use WithFileUploads;

    public User $user;

    public $roles;
 
    public $upload = '';

    public $password = '';

    public $passwordConfirmation = '';

    public $currentStep = 1;

    public function rules () {
        return [
            'user.first_name' => 'max:20',
            'user.last_name' => 'max:20',
            'user.name' => '',
            'user.role_id' => 'required',
            'user.email' => ['email', 'required', Rule::unique('users', 'email')->ignore($this->user)],
            'user.company' => '',
            'user.first_address' => '',
            'user.second_address' => '',
            'user.city' => '',
            'user.state' => '',
            'user.zip' => '',
            'user.twitter' => '',
            'user.facebook' => '',
            'user.instagram' => '',
            'user.bio' => '',
            'user.public_email' => 'email',
            'password' => 'required|min:6|same:passwordConfirmation',
            'upload' => 'nullable|image|max:2000'
        ];
    }

    protected $messages = [
        'user.role_id.required' => 'The role is required',
        'upload.image' => 'Please upload an image',
        'upload.max' => 'The image size is too big. Make sure it\'s under 2MB',
    ]; 

    public function firstStepSubmit() {
        $this->validate([
            'user.first_name' => 'max:20',
            'user.last_name' => 'max:20',
            'user.company' => 'nullable',
            'user.email' => ['email:rfc,dns', 'required', Rule::unique('users', 'email')->ignore($this->user)],
            'user.role_id' => 'required',
            'password' => 'min:6|same:passwordConfirmation',
        ]);
        if(!is_int($this->user->role_id)) {
            $this->user->role_id = intval($this->user->role_id['value']);
        }
        $this->currentStep = 2;
    }

    public function secondStepSubmit() {
        $validatedData = $this->validate([
            'user.first_address' => '',
            'user.second_address' => '',
            'user.city' => '',
            'user.state' => '',
            'user.zip' => '',
        ]);

        $this->currentStep = 3;
    }

    public function thirdStepSubmit() {
        $validateData = $this->validate([
            'user.twitter' => '',
            'user.facebook' => '',
            'user.instagram' => '',
        ]);

        $this->currentStep = 4;
    }

    public function mount($id) {
        if((auth()->user()->isAdmin()) && User::find($id) !== null){
            $this->user = User::find($id);
            $this->roles = Role::all();
        }else {
            redirect('404');
        }
    }

    public function editUser() {
        $validateData = $this->validate([
            'user.upload' => 'nullable|image|max:2000',
            'user.bio' => '',
            'user.public_email' => '',
        ]);

        $existingUser = User::find($this->user->id);
        
        if($existingUser) { 
            $this->user->update([
                'name' => $this->user->first_name.' '.$this->user->last_name,
                'password' => Hash::make($this->password),
            ]);

            $existingUser->update([
                'name' => $this->user->first_name.' '.$this->user->last_name,
                'password' => Hash::make($this->password),
            ]);

            $this->upload && $this->user->update([
                'avatar' => $this->upload->store('/', 'avatars'),
            ]);

            $this->currentStep = 1;
            
            session()->flash('succes', 'Your user has been edited.');
            return redirect(route('users-management'));
            }
        else{
            session()->flash('failure', 'This user does not exist.');
        }
    }

    public function back()
    {
        $this->currentStep--;
    }


    public function render()
    {
        return view('livewire.laravel-examples.edit-user');
    }
}
