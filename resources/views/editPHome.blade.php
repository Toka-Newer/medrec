@extends('layout.app')
@section('content')
    <editpatienthome-component></editpatienthome-component>
    <component :is="'script'" type="application/javascript" defer
        src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
@endsection
