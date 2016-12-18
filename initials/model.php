<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class __model__ extends Model
{

    // Fillable
    protected $fillable = [

    ];

    // Relations

    // Getters

    // Static Functions
    static public function getCount($field='id',$operator='!=',$value='0') {
        return __model__::where($field,$operator,$value)->count();
    }


    // Specifics Functions

}
