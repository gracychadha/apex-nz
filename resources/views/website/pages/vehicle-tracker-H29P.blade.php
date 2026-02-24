@extends('website.layout.app')
@section('title', 'Vehicle Tracker H29P - Apex GPS Tracker Manufacturer')
@section('content')

    {{-- breadcrumb --}}
    @include('website.components.vehicle-tracker-H29P.breadcrum')

    {{-- details --}}
    @include('website.components.vehicle-tracker-H29P.details')
    {{-- case study -> product --}}
    @include('website.components.home.product')

@endsection