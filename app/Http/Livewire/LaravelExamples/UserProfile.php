<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use App\Models\User;

use Livewire\WithFileUploads;

class UserProfile extends Component
{
    use WithFileUploads;

    public User $user;

    public $showSuccesNotification = false;
    public $showDemoNotification = false;
    public $confirmationEmail = '';
    public $skills = [];

    public $upload;

    protected $rules = [
        'user.first_name' => 'max:20',
        'user.last_name' => 'max:20',
        'user.name' => '',
        'user.email' => 'required|email:rfc,dns|same:confirmationEmail',
        'user.phoneNo' => 'numeric',
        'user.location' => 'min:3',
        'user.gender' => '',
        'user.language' => '',
        'user.day' => '',
        'user.month' => '',
        'user.year' => '',
        'user.skills' => '',
        'confirmationEmail' => 'required',
        'upload' => 'nullable|image|max:2000',
    ];

    protected $messages = [
        'upload.image' => 'Please upload an image',
        'upload.max' => 'The image size is too big. Make sure it\'s under 2MB',
    ]; 

    public function mount() { 
        $this->user = auth()->user();
    }

    public function save() {
        if(env('IS_DEMO')) {
            $this->showDemoNotification = true;
        } else {
            if ( is_array($this->user->day) && array_key_exists("value",$this->user->day)){
                if($this->user->day['value'] != auth()->user()->day){
                    $this->user->day = intval($this->user->day['value']);
                }
            }

            if ( is_array($this->user->month) && array_key_exists("value",$this->user->month)){
                if($this->user->month['value'] != auth()->user()->month){
                    $this->user->month = intval($this->user->month['value']);
                }
            }

            if ( is_array($this->user->year) && array_key_exists("value",$this->user->year)){
                if($this->user->year['value'] != auth()->user()->year){
                    $this->user->year = intval($this->user->year['value']);
                }
            }

            if ( is_array($this->user->gender) && array_key_exists("value",$this->user->gender)){
                if($this->user->gender['value'] != auth()->user()->gender){
                    $this->user->gender = $this->user->gender['value'];
                }
            }

            if ( is_array($this->user->language) && array_key_exists("value",$this->user->language)){
                if($this->user->language['value'] != auth()->user()->language){
                    $this->user->language = $this->user->language['value'];
                }
            }

            if ( is_array($this->user->skills) && array_key_exists("value",$this->user->skills)){
                if($this->user->skills['value'] != auth()->user()->skills){
                    $this->user->skills = $this->user->skills['value'];
                }
            }  
            $this->validate();
            $this->user->save();   
            $this->upload && $this->user->update([
                'avatar' => $this->upload->store('/', 'avatars')
            ]);
            $this->showSuccesNotification = true;
        }
    }
    public function render()
    {
        return view('livewire.laravel-examples.user-profile');
    }
}
