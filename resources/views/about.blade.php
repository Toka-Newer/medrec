@extends('layout.app')
@section('content')
    <about-component></about-component>
    <component :is="'script'" type="application/javascript" defer
        src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
@endsection
