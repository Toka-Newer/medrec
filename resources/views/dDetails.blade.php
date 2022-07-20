@extends('layout.app')
@section('content')
    <docdetails-component></docdetails-component>
    <component :is="'script'" type="application/javascript" defer
        src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
@endsection
