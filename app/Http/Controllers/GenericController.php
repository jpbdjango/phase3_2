<?php

namespace App\Http\Controllers;

class GenericController extends Controller {

    public $model;
    public $mainRoute;
    public $folder;
    public $form;

    public $paginate = 15;

    public function __construct() {

        $this->folder    = $this->mainFolder . '/' . strtolower(str_plural($this->modelName));
        $this->form      = strtolower($this->modelName);
        $this->mainRoute = strtolower(str_plural($this->modelName));

        $modelClass  = 'App\\' . $this->modelName;
        $this->model = new $modelClass;

    }

}
