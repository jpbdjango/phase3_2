<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class __model__ extends Model
{

    // Fillable
    protected $fillable = [

    ];

    // Relations

    // Store in Session
    public static function putInSession($id,$fields=null) {

        $model = __model__::find($id);

        if($model) {
            foreach ($fields as $field) {
                Memsession::put('__tablename__',$field,$model->$field);
            }
            return true;
        }

        return "error";

    }

}
