@extends('website.layout.app')
@section('title', 'Vehicle Management - Apex GPS Tracker Manufacturer')
@section('content')

    {{-- breadcrumb --}}
    @include('website.components.vehicle-management.breadcrum')

    {{-- details --}}
    @include('website.components.vehicle-management.details')

    {{-- subscribe --}}
    @include('website.components.home.subscribe-form')

@endsection