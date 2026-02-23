@extends('website.layout.app')
@section('title', 'Case Studies')
@section('content')


    {{-- breadcrum --}}
    @include('website.components.case-study.breadcrum')

    {{-- case study grid --}}
    @include('website.components.case-study.grid')
    {{-- subscribe --}}
    @include('website.components.home.subscribe-form')
@endsection