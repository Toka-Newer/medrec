@extends('layout.app')
@section('content')
    <editreport-component></editreport-component>
    <component :is="'script'" type="application/javascript" defer
        src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
@endsection