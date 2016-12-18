@extends('templates.admin')

@section('page-header')
    <p>X-Engine - Administration</p>
@endsection

@section('menu')
    @include('admin.menus.main')
@endsection

@section('content')
    <h3 class="ui top attached header">
        Top Attached
    </h3>
    <div class="ui attached segment">
        <p>Content</p>
    </div>
@stop