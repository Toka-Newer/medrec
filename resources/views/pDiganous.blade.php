@extends('layout.app')
@section('content')
<patientdiganous-component></patientdiganous-component>
    <component :is="'script'" type="application/javascript" defer src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
    @endsection
