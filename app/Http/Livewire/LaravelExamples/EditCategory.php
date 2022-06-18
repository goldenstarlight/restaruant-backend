<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use Illuminate\Validation\Rule;

use App\Models\Category;

class EditCategory extends Component
{
    public Category $category;

    public function rules() {
        return [
            'category.name' => ['required', Rule::unique('categories', 'name')->ignore($this->category)],
            'category.description' => ''
        ];
    }

    public function mount($id) {
        if((auth()->user()->isAdmin() || auth()->user()->isCreator()) && Category::find($id) !== null ){
            $this->category = Category::find($id); 
        }else {
            redirect('404');
        }
    }

    public function editCategory() {
        $this->validate();
        $this->category->update();
        session()->flash('succes', 'The category has been changed successfully.');
        return redirect(route('category-management'));
    }

    public function render()
    {
        return view('livewire.laravel-examples.edit-category');
    }
}
