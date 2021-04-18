<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /** Alternatively (old way) you can use this method to change the key of route model binding */
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
