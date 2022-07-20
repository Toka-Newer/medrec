@extends('layout.app')
@section('content')
    <patients-component></patients-component>
    <component :is="'script'" type="application/javascript" defer src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
@endsection


