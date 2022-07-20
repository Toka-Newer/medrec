@extends('layout.app')
@section('content')
<patientreportshow-component></patientreportshow-component>
<component :is="'script'" type="application/javascript" defer src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
@endsection