<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'origin_link',
        'manufacturers_id',
        'users_id',
        'created_at',
        'updated_at'
    ];
    /* Relationship functions handler */
    function images(){
        return $this->hasMany('App\Models\Images');
    }
    function reviews(){
        return $this->hasMany('App\Models\Reviews');
    }
    function manufacturers(){
        return $this->belongTo('App\Models\Manufacturers');
    }
    
}
