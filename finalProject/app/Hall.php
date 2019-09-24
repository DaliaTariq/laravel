<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    //
    protected $fillable = [
        'name', 'category_id','description','vedio_link','address','mobile','watts','facebook','enestegram'
    ];

    protected  $dates=[
        'deleted_at',
    ];

    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /*Category::first()->delete();
    Category::withTrashed()->first()->restore();*/
}



