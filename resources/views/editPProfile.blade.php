@extends('layout.app')
@section('content')
    <editpatientprofile-component></editpatientprofile-component>
    <component :is="'script'" type="application/javascript" defer
        src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
@endsection