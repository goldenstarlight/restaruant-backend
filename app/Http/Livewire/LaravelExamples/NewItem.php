<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\Tag;
use App\Models\Category;
use App\Models\Item;

class NewItem extends Component
{
    use WithFileUploads;

    public $tags;
    public $categories;

    public $name = '';
    public $excerpt =  '';
    public $description = '';
    public $photo = '';
    public $status = '';
    public $options = [];
    public $showOnHomepage = false;
    public $date;
    public $tags_id = [];
    public $category_id;

    protected function rules() {
        return [
            'name' => 'required|unique:items',
            'excerpt' => 'nullable',
            'description' => 'nullable',
            'photo' => 'nullable|image|max:2000',
            'tags_id' => 'required',
            'category_id' => 'required',
            'status' => '',
            'options' => '',
            'date' => '',
        ];
    }

    protected $messages = [
        'category_id.required' => 'The category is required',
        'tags_id.required' => 'Please choose a tag',
        'photo.image' => 'Please upload an image',
        'photo.max' => 'The image size is too big. Make sure it\'s under 2MB',
    ]; 

    public function mount() {
        $this->tags = Tag::all();
        $this->categories = Category::all();
    }

    public function addItem() {
        if(is_array($this->category_id) && array_key_exists("value", $this->category_id)) {
            $this->category_id = intval($this->category_id['value']);
        }
        $this->validate();
        $item = Item::create([
            'name' => $this->name,
            'excerpt' => $this->excerpt,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'status' => $this->status,
            'show_on_homepage' => $this->showOnHomepage,
            'options' => $this->options
        ]);


        $this->date && $item->update([
            'date' => Carbon::parse($this->date)->format('Y-m-d')
        ]);

        $this->photo && $item->update([
            'picture' => $this->photo->store('/', 'items')
        ]);
        sort($this->tags_id);
        $item->tags()->sync($this->tags_id, false);

        session()->flash('succes', 'Your item has been created.');
        return redirect(route('items-management'));
    }

    public function render()
    {
        return view('livewire.laravel-examples.new-item');
    }
}
