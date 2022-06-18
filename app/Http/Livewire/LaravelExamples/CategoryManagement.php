<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Category;
use App\Models\Item;

class CategoryManagement extends Component
{
    use WithPagination;

    public Category $category;

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
        $category = Category::find($id);
        if((auth()->user()->isAdmin() || auth()->user()->isCreator())){
            if( count($category->items) < 1) {
                $category->delete();
                $this->showSuccesNotification = true;
            } else {
                $this->showFailureNotification = true;
            }
        }
    }

    public function render()
    {
        return view('livewire.laravel-examples.category-management',[
            'categories' => Category::searchMultiple($this->search)->orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage)
        ]);
    }
}
