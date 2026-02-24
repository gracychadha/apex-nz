@extends('website.layout.app')
@section('title', 'Car Parts - Apex Trading Limited')
@section('content')


    {{-- breadcrum --}}
    @include('website.components.car-parts.breadcrum')
    
    {{-- case study grid --}}
    @include('website.components.car-parts.main')
    {{-- subscribe --}}
    @include('website.components.home.subscribe-form')
@endsection