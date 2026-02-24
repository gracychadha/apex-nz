@extends('website.layout.app')
@section('title', 'Vehicle Tracker GS105 - Apex GPS Tracker Manufacturer')
@section('content')

    {{-- breadcrumb --}}
    @include('website.components.vehicle-tracker-GS105.breadcrum')

    {{-- details --}}
    @include('website.components.vehicle-tracker-GS105.details')
    {{-- gallery --}}
    {{-- @include('website.components.vehicle-tracker-GS105.gallery') --}}
    {{-- case study -> product --}}
    @include('website.components.home.product')
@endsection