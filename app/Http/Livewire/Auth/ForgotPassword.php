<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

use Illuminate\Notifications\Notifiable;
use App\Models\User;
use App\Notifications\MailNotification;

class ForgotPassword extends Component
{
    use Notifiable;

    public $email = '';

    public $showSuccesNotification = false;
    public $showFailureNotification = false;
    public $showDemoNotification = false;

    protected $rules = ['email' => 'required|email'];

    public function mount() {
        if(auth()->user()) {
            return redirect()->intended('/dashboard-default');      
        }
    }

    public function routeNotificationForMail() {
        return $this->email;
    }

    public function recoverPassword() {
        if(env('IS_DEMO')) {
            $this->showDemoNotification = true;
        } else {
            $this->validate();
            $user = User::where('email', $this->email)->first();
            if($user){
                $this->notify(new MailNotification($user->id));
                $this->showSuccesNotification = true;
                $this->showFailureNotification = false;
            } else {
                $this->showFailureNotification = true;
            }
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
