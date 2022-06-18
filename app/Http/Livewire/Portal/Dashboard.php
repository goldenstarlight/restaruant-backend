<?php

namespace App\Http\Livewire\Portal;

use Livewire\Component;

class Dashboard extends Component
{
    
    public function render()
    {
        $name = 'test';
        return view('livewire.portal.dashboard')->with('name', $name);

    }
}
