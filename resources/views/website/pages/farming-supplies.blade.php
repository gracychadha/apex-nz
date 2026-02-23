@extends('website.layout.app')
@section('title', content: 'Farming Supplies - Apex Trading Limited')
@section('content')


    {{-- breadcrum --}}
    @include('website.components.farming-supplies.breadcrumb')
    {{-- main section --}}
    @include('website.components.farming-supplies.main-section')
    {{-- subscribe --}}
    @include('website.components.home.subscribe-form')
@endsection