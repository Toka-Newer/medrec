@extends('layout.app')
@section('content')
    <patienthome-component></patienthome-component>
    <component :is="'script'" type="application/javascript" defer
        src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
@endsection
