<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use Livewire\WithPagination;
use App\Providers\Builder;

use App\Models\User;
use App\Models\Role;

class RolesManagement extends Component
{
    use WithPagination;

    public Role $role;

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
        $this->role = Role::find($id);
        if(auth()->user()->isAdmin() && count($this->role->users) < 1) {
            $this->role->delete();
            $this->showSuccesNotification = true;
        }
        else {
            $this->showFailureNotification = true;
        }
    }

    public function render()
    {
        return view('livewire.laravel-examples.roles-management',[
            'roles' => Role::searchMultiple($this->search)->orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage)
        ]);
    }
}
