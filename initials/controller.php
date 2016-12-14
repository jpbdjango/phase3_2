<?php
namespace App\Http\Controllers;

use App\Http\Controllers\GenericController;
use App\__model__;
use App\Memsession;
use App\Http\Requests\store__model__;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class __model__Controller extends GenericController
{

    // !!! Changer store... dans UPDATE

    public $modelName = '__model__';
    public $template = '__template__';
    public $mainFolder = '__folder__';

    public function open($id) {

        // Store Session if needed
            //Session()->put(['countries_id' => $id]);

        // Redirection
            //return Redirect::route('regions.index');

    }

    public function index()
    {

        $datas = $this->model->orderBy('name')->paginate($this->paginate);

        return view($this->folder . '.index')->with(compact('datas'));
    }

    public function create()
    {

        $data = new $this->model;

        $params = [
            'template' => $this->template,
            'titleField' => 'name',
            'mainRoute' => $this->mainRoute,
            'routeBack' => $this->mainRoute,
            'form' => $this->form,
        ];

        return view('partials.formCreate')->with(['data' => $data,'params' => $params]);

    }

    public function store(store__model__ $request)
    {

        $model = $this->model->create($request->all());

        if($request->get('routeBack')) {
            return redirect($request->get('routeBack'));
        }

        return redirect(route($this->mainRoute));

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        $params = [
            'template' => $this->template,
            'titleField' => 'name',
            'mainRoute' => $this->mainRoute,
            'routeBack' => $this->mainRoute,
            'form' => $this->form,
        ];

        return view('partials.formEdit')->with(['data' => $data,'params' => $params]);    }

    public function update(store__model__ $request, $id)
    {

        $model = $this->model->find($id);
        $model->update($request->all());

        if($request->get('routeBack')) {
            return redirect($request->get('routeBack'));
        }

        return redirect(route($this->mainRoute));

    }

    public function destroy($id)
    {
        //
    }

}
