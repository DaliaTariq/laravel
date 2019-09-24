<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    //
    protected $fillable = [
        'name', 'category_id','description','image','address','mobile','watts','facebook','enestegram'
    ];

    protected  $dates=[
        'deleted_at',
    ];



    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
