@section('name')
	{{-- expr --}}
@stop

@include('view.name', ['some' => 'data'])
@extends('view')
@section('name')
	{{-- expr --}}
@stop
@yield('name', 'default')

