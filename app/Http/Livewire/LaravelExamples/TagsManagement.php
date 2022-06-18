<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use Livewire\WithPagination;
use App\Providers\Builder;

use App\Models\Tag;
use App\Models\Item;

class TagsManagement extends Component
{
    use WithPagination;

    public Tag $tag;

    public $showSuccesNotification = false;
    public $showFailureNotification = false;

    public $search = '';
    public $sortField = 'id';
    public $sortDirection = 'asc';
    public $perPage = 10;

    protected $queryString = ['sortField', 'sortDirection'];
    protected $paginationTheme = 'bootstrap';

    public function sortBy($field){
        if($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }

    public function delete($id) {
        $tag = Tag::find($id);
        if(count($tag->items) < 1) {
            $tag->delete();
            $this->showSuccesNotification = true;
        } else {
            $this->showFailureNotification = true;
        }
    }

    public function render()
    {
        return view('livewire.laravel-examples.tags-management', [
            'tags' => Tag::searchMultipleTags($this->search)->orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage)
        ]);
    }
}
