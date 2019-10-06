<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ButyCenter extends Model
{
    //
    protected $fillable = [
        'name', 'category_id','description','image','address','mobile','watts','facebook','enestegram','snapChat'
    ];

    protected  $dates=[
        'deleted_at',
    ];


    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
