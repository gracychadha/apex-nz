@extends('website.layout.app')
@section('title', 'Tractor Sale - Apex Trading Limited')
@section('content')


    {{-- breadcrum --}}
    @include('website.components.tractor-sale.breadcrum')

    {{-- case study grid --}}
    @include('website.components.tractor-sale.main')
    {{-- subscribe --}}
    @include('website.components.home.subscribe-form')


@endsection