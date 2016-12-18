<?php

namespace App;


class Tools
{

    static public function checked($value=false) {

        if($value) {
            return '<i class="ui icon checkmark green"></i>';
        }

       return '<i class="ui icon remove red"></i>';

    }

}