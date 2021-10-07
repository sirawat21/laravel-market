<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Followings extends Model
{
    use HasFactory;
    protected $fillable = [
    'users_id',
    'following',
    'created_at',
    'updated_at'
    ];
    /* Relationship functions handler */
    function users(){
        return $this->belongTo('App\Models\Users');
    }
}
