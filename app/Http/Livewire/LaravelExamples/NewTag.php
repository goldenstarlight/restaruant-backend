<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use App\Models\Tag;

class NewTag extends Component
{
    public $name = '';
    public $color = '';

    protected $rules = [
        'name' => 'required|unique:tags',
        'color' => 'required'
    ]; 

    public function addTag() {
        $this->validate();
        Tag::create([
            'name' => $this->name,
            'color' => $this->color
        ]);
        session()->flash('succes', 'Your tag has been added.');
        return redirect(route('tags-management'));
    }

    public function render()
    {
        return view('livewire.laravel-examples.new-tag');
    }
}
