<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Askedio\softCascade\Traits\SoftCascadeTraite;

class Category extends Model

{

        use SoftDeletes;

        protected $table = 'categories';
        
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

public function butyCenter()
{
    return $this->hasMany('App\ButyCenter');
}


protected static function boot(){
    parent::boot();
    /*Deleted related halls */
    static ::deleting(function($category){
        $category->halls()->delete();
        
    });

    /*restore related halls */

    /*static::restored(function ($category) {
        foreach($category->getTrashedHalls() as $hall) {
                $hall->restore();
        }
    });*/
  


   static ::deleting(function($category){
        $category->storages()->delete();
    });

}


}
