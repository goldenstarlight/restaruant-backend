<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ResetPassword extends Component
{
    public $password = '';
    public $passwordConfirmation = '';

    public $showFailureNotification = false;
    
    public $urlID;

    protected $rules = [
        'password' => 'required|min:6|same:passwordConfirmation'
    ];

    public function mount($id) {
        $existingUser = User::find($id);
        $this->urlID = intval($existingUser->id);
    }

    public function resetPassword() {
        $this->validate();
        $existingUser =  User::where('id', $this->urlID)->first();
        if($existingUser) { 
            $existingUser->update([
                'password' => Hash::make($this->password) 
            ]);
        return redirect('/login');
        } else {
            $this->showFailureNotification = true;
        }
    }

    public function render()
    {
        return view('livewire.auth.reset-password');
    }
}
