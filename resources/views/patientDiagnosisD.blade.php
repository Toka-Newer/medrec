@extends('layout.app')
@section('content')
<patientdiganousdoctor-component></patientdiganousdoctor-component>
    <component :is="'script'" type="application/javascript" defer src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
@endsection