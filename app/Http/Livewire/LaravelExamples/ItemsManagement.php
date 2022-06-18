<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use Livewire\WithPagination;
use App\Providers\Builder;
use Illuminate\Support\Facades\DB;

use App\Models\Item;
use App\Models\Tag;
use App\Models\Category;

class ItemsManagement extends Component
{
    use WithPagination;

    public Item $item;

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
        $item = Item::find($id);
        $item->tags()->detach();
        $item->delete();
        $this->showSuccesNotification = true;
    }
    
    public function render()
    {
        return view('livewire.laravel-examples.items-management',[
            'items' => Item::searchMultipleItems($this->search)
                    ->join('item_tag', 'id', '=', 'item_tag.item_id')
                    ->join('tags', 'tags.id', '=', 'item_tag.tag_id')
                    ->groupBy('items.id')
                    ->orderBy($this->sortField, $this->sortDirection)
                    ->select('items.*', DB::raw('GROUP_CONCAT(tags.id) as TagsName'))
                    ->paginate($this->perPage),
        ]);
    }
}
