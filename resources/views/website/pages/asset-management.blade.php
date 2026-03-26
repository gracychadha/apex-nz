@extends('website.layout.app')
@section('title', 'Asset Management - Apex GPS Tracker Manufacturer')
@section('content')

    {{-- breadcrumb --}}
    @include('website.components.asset-management.breadcrum')

    {{-- details --}}
    @include('website.components.asset-management.details')

    {{-- subscribe --}}
    @include('website.components.home.subscribe-form')

@endsection