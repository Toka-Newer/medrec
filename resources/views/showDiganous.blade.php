@extends('layout.app')
@section('content')
<showdiaganous-component></showdiaganous-component>
    <component :is="'script'" type="application/javascript" defer src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></component>
    {{-- <script type="importmap" src="https://unpkg.com/vue@3/dist/vue.esm-browser.js"></script> --}}
@endsection
