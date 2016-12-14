<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestXXX extends Model
{

    // Fillable
    protected $fillable = [
        'Test',
    ];

    // Relations

    // Store in Session
    public static function putInSession($id,$fields=null) {

        $model = TestXXX::find($id);

        if($model) {
            foreach ($fields as $field) {
                Memsession::put('testXXX',$field,$model->$field);
            }
            return true;
        }

        return "error";

    }

}
