<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use HasFactory;
    // use SoftDeletes;

    protected $withCount = ['Liked'];


    public function comments(){
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }


    public function tags(){
        return $this->belongsToMany(Tags::class, 'post_tags', 'post_id', 'tag_id');
    }


    public function category(){
        return $this->belongsTo(category::class, 'category_id',  'id');
    }


    public function liked(){
        return $this->belongsToMany(User::class, 'post_user_lakes', 'post_id', 'user_id');
    }

    protected $guarded = ['id'];

}
