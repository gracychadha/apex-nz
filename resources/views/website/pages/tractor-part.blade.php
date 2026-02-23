@extends('website.layout.app')
@section('title', 'Tractor Parts - Apex Trading Limited')
@section('content')


    {{-- breadcrum --}}
    @include('website.components.tractor-parts.breadcrum')

    {{-- case study grid --}}
    @include('website.components.tractor-parts.main')
    {{-- subscribe --}}
    @include('website.components.home.subscribe-form')


@endsection