<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

use App\Models\Tag;
use App\Models\Category;
use App\Models\Item;

class EditItem extends Component
{
    use WithFileUploads;

    public Item $item;
    public $myTags = [];

    public $tags;
    public $tags_id = [];
    public $categories;
    public $photo = '';
    public $options = [];

    public $showSuccesNotification = false;

    protected function rules(){
        return [
            'item.name' => ['required', Rule::unique('items', 'name')->ignore($this->item)],
            'item.category_id' => 'required',
            'tags_id' => 'required',
            'item.excerpt' => '',
            'item.description' => '',
            'item.status' => '',
            'item.options' => '',
            'item.show_on_homepage' => '',
            'item.date' => '',
            'options' => ''
        ];
    }

    protected $messages = [
        'item.category_id.required' => 'The category is required',
        'tags_id.required' => 'Please choose a tag',
        'photo.image' => 'Please upload an image',
        'photo.max' => 'The image size is too big. Make sure it\'s under 2MB',
    ]; 
    
    public function mount($id) {
        if((auth()->user()->isAdmin() || auth()->user()->isCreator()) && Item::find($id) !== null ){
            $this->item = Item::find($id);
            $this->tags = Tag::all();
            $this->categories = Category::all();
            $this->tags_id = $this->getExistingTags();
            $this->options = $this->item->options;
        }else {
            redirect('404');
        }
    }

    public function getExistingTags() {
        $idArray = [];
        $this->myTags = $this->item->tags;
        foreach($this->myTags as $tag) {
            array_push($idArray, $tag->id);
        }
        return $idArray;
    }

    public function editItem() {
        if(!is_int($this->item->category_id)) {
            $this->item->category_id = intval($this->item->category_id['value']);
        }
        $this->validate();
        $this->item->update();
        $this->options && $this->item->update([
            'options' => $this->options
        ]);
        $this->photo && $this->item->update([
            'picture' => $this->photo->store('/', 'items'),
        ]);
        $this->item->tags()->detach();
        sort($this->tags_id);
        $this->item->tags()->sync($this->tags_id, false);
        
        session()->flash('succes', 'Your item has been edited.');
        return redirect(route('items-management'));
    }

    public function render()
    {
        return view('livewire.laravel-examples.edit-item');
    }
}
