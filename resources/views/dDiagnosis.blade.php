@extends('layout.app')
@section('content')
    <doctordiganous-component></doctordiganous-component>
    <component :is="'script'" type="application/javascript" defer
        src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
@endsection
