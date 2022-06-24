<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
  
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function avatarUrl() {
        return $this->avatar ? Storage::disk('avatars')->url($this->avatar) : '/assets/img/bruce-mars.jpg';
    }

    /**
     * Check if the user is admin
     */
    public function isAdmin() {
        return $this->role_id === 1;
    }

    /**
     * Check if the user is creator
     */
    public function isCreator() {
        return $this->role_id === 2;
    }

    /**
     * Check if the user is member
     */
    public function isMember() {
        return $this->role_id === 3;
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
