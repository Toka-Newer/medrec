@extends('layout.app')
@section('content')
    <patientprofile-component></patientprofile-component>
    <component :is="'script'" type="application/javascript" defer
        src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
@endsection
