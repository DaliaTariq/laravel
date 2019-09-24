<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Askedio\softCascade\Traits\SoftCascadeTraite;

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

/*==========================
      Model Relations
  =========================*/
public function halls()
{
    return $this->hasMany('App\Hall');
}

public function storages()
{
    return $this->hasMany('App\Storage');
}


protected static function boot(){
    parent::boot();
    static ::deleting(function($category){
        $category->halls()->delete();
    });


   static ::deleting(function($category){
        $category->storages()->delete();
    });

}


}
