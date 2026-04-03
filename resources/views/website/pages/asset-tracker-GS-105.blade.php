@extends('website.layout.app')
@section('title', 'S20 - 4G Portable 6000MAH - Apex GPS Tracker Manufacturer')
@section('content')

    {{-- breadcrumb --}}
    @include('website.components.asset-tracker-GS-105.breadcrumb')

    {{-- details --}}
    @include('website.components.asset-tracker-GS-105.details')
    {{-- gallery --}}
    {{-- @include('website.components.asset-tracker-GS-105.gallery') --}}
    {{-- case study -> product --}}
    @include('website.components.home.product')
@endsection