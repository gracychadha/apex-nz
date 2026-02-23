@extends('website.layout.app')
@section('title', 'Car Sale - Apex Trading Limited')
@section('content')


    {{-- breadcrum --}}
    @include('website.components.sale.breadcrumb')

    {{-- case study grid --}}
    @include('website.components.sale.main')
    {{-- subscribe --}}
    @include('website.components.home.subscribe-form')
@endsection