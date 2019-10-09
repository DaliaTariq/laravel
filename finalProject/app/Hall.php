<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = [
        'name', 'category_id','description','vedio','image','address','mobile','watts','facebook','enestegram'
    ];

    protected  $dates=[
        'deleted_at',
    ];
 
         //Function to display image on browser
         public function getFeaturedAttribute($image){   //getPohotos
            return asset($image);
            }


    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
