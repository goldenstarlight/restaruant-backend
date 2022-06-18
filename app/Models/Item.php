<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use App\Models\Tag;
use App\Models\Category;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'options' => 'array'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'item_tag', 'item_id', 'tag_id');
    }

    public function pictureUrl() {
        return $this->picture ? Storage::disk('items')->url($this->picture) : '/assets/img/image_placeholder.jpg';
    }


}
