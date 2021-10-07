<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'rate',
        'users_id',
        'items_id',
        'created_at',
        'updated_at'
    ];

    /* Relationship functions handler */
    function votes(){
        return $this->hasMany('App\Models\Votes');
    }

    function items(){
        return $this->belongTo('App\Models\Items');
    }

}
