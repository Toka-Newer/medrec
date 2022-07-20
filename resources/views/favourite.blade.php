@extends('layout.app')
@section('content')
    <favourite-component></favourite-component>
    <component :is="'script'" type="application/javascript" defer
        src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
@endsection