<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use Illuminate\Validation\Rule;

use App\Models\Tag;

class EditTag extends Component
{
    public Tag $tag;

    public function rules() {
        return [
            'tag.name' => ['required', Rule::unique('tags', 'name')->ignore($this->tag)],
            'tag.color' => ''
        ];
    }

    public function mount($id) {
        if((auth()->user()->isAdmin() || auth()->user()->isCreator()) && Tag::find($id) !== null){
            $this->tag = Tag::find($id);
        } else {
            redirect('404');
        }
    }

    public function editTag() {
        $this->validate();
        $this->tag->update();
        session()->flash('succes', 'Your tag has been edited.');
        return redirect(route('tags-management'));
    }
    public function render()
    {
        return view('livewire.laravel-examples.edit-tag');
    }
}
