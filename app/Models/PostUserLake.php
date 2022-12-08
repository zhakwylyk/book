<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostUserLake extends Model
{
    protected $table = 'post_user_likes';
    protected $guarded = false;
    use HasFactory;
}
