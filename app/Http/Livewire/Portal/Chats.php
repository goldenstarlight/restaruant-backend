<?php

namespace App\Http\Livewire\Portal;

use Livewire\Component;
use App\Models\User;

class Chats extends Component
{
    public function render()
    {
        $users = User::all();

        return view('livewire.portal.chats.index', compact('users'));
    }
}
