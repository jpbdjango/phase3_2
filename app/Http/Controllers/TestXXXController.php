<?php
namespace App\Http\Controllers;

use App\Http\Controllers\GenericController;
use App\TestXXX;
use App\Memsession;
use App\Http\Requests\storeTestXXX;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class TestXXXController extends GenericController
{

    // !!! Changer store... dans UPDATE

    public $modelName = 'TestXXX';
    public $template = 'admin';
    public $mainFolder = 'admin';

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

    public function store(storeTestXXX $request)
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

    public function update(storeTestXXX $request, $id)
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
