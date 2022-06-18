<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Item;

class Tag extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function items() {
        return $this->belongsToMany(Item::class);
    }
}
