<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    public function posts(){
        return $this->belongsToMany(posts::class, 'post_tags', 'tag_id', 'post_id');
    }

    protected $fillable = ['title'];
    use HasFactory;
}
