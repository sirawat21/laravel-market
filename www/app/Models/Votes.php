<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    use HasFactory;

    protected $fillable = [
        'like',
        'dislike',
        'users_id',
        'reviews_id',
        'created_at',
        'updated_at'
    ];

    /* Relationship functions handler */
    function reviews(){
        return $this->belongTo('App\Models\Reviews');
    }
}
