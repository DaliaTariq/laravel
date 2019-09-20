<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model

{
    use SoftDeletes;
    protected $fillable = [
        'name', 'description','image'
    ];

    protected  $dates=[
        'deleted_at',
    ];


       //Function to display image on browser
   public function getFeaturedAttribute($image){   //getPohotos
    return asset($image);
}
}
