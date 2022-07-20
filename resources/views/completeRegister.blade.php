@extends('layout.app')
@section('content')
    <completeregister-component></completeregister-component>
    <component :is="'script'" type="application/javascript" defer
        src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
@endsection
