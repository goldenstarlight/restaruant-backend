<?php

namespace App\Http\Livewire\LaravelExamples;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Livewire\Component;
use Livewire\WithPagination;
use App\Providers\Builder;

use App\Models\User;
use App\Models\Role;
use App\Policies\UserPolicy;

class UsersManagement extends Component
{
    use WithPagination; 
    
    public User $user;

    public $showSuccesNotification = false;

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
        User::find($id)->delete();
        $this->showSuccesNotification = true;
    }

    public function render()
    {
        return view('livewire.laravel-examples.users-management',[
            'users' => User::searchMultipleUsers($this->search)->orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage)
        ]);
    }
}
