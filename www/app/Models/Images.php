<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'items_id',
        'created_at',
        'updated_at'
    ];
    /* Relationship functions handler */
    function items(){
        return $this->belongTo('App\Models\Items');
    }
    function users(){
        return $this->belongTo('App\Models\Users');
    }
}
