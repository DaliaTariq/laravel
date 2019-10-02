<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class offer extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'description','image','address','mobile','watts','facebook','enestegram'
    ];

    protected  $dates=[
        'deleted_at',
    ];

}
