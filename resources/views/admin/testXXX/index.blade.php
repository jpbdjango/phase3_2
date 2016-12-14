@extends('templates.admin')

@section('content')

    <h1>TestXXX</h1>

    {{ link_to_route('testXXX.create','Nouveau',[],['class' => 'btn btn-success']) }}

    <div class="tbl-div">
        <table class="table table-bordered">
            <thead>
            <th></th>
            <th></th>
            <th></th>
            </thead>
            @foreach($datas as $data)
                <tr>
                    <td class="col-index">col index</td>
                    <td>col 2</td>
                    <td><a href="{!! route('testXXX.edit',[$data->id]) !!}">Editer</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="center">
        {{ $datas->links() }}
    </div>

@stop