<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Role;
use App\Models\Tag;
use App\Models\Category;

use Livewire\Component; 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Builder::macro('getRoleId', function ($name){
            $roles = Role::all();
            for($i = 0; $i < count($roles); $i++) {
                if(strtolower($name) === strtolower($roles[$i]->name)) {
                    return $roles[$i]->id;
                }
            }
        }); 

        Builder::macro('getCategoryId', function ($name){
            $categories = Category::all();
            for($i = 0; $i < count($categories); $i++) {
                if(strtolower($name) === strtolower($categories[$i]->name)) {
                    return $categories[$i]->id;
                }
            }
        }); 

        Builder::macro('search', function ($field, $string) {
            return $string ? $this->where($field, 'like', '%'.$string.'%') : $this;
        });

        Builder::macro('searchMultipleUsers', function ($string) {
            if($string) {
                return $this->where('id', 'like', '%'.$string.'%')
                             ->orWhere('name', 'like', '%'.$string.'%')
                             ->orWhere('email', 'like', '%'.$string.'%')
                             ->orWhere('created_at', 'like', '%'.$string.'%')
                             ->orWhere('role_id','=',  intval($this->getRoleId($string)));
            } else {
                return $this;
            }
        });

        Builder::macro('searchMultiple', function ($string) {
            if($string) {
                return $this->where('id', '=', intval($string))
                             ->orWhere('name', 'like', '%'.$string.'%')
                             ->orWhere('description', 'like', '%'.$string.'%')
                             ->orWhere('created_at', 'like', '%'.$string.'%');
            } else {
                return $this;
            }
        });

        Builder::macro('searchMultipleTags', function ($string) {
            if($string) {
                return $this->where('id', '=', intval($string))
                             ->orWhere('name', 'like', '%'.$string.'%')
                             ->orWhere('created_at', 'like', '%'.$string.'%');
            } else {
                return $this;
            }
        });

        Builder::macro('searchMultipleItems', function ($string) {
            if($string) {
                return $this->where('items.id', '=', intval($string))
                             ->orWhere('items.name', 'like', '%'.$string.'%')
                             ->orWhere('items.excerpt', 'like', '%'.$string.'%')
                             ->orWhere('items.description', 'like', '%'.$string.'%')
                             ->orWhere('items.created_at', 'like', '%'.$string.'%')
                             ->orWhere('items.category_id','=',  intval($this->getCategoryId($string)));
            } else {
                return $this;
            }
        });

    }
}
