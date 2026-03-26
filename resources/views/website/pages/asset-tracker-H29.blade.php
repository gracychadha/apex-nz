@extends('website.layout.app')
@section('title', 'Asset Tracker H29P - Apex GPS Tracker Manufacturer')
@section('content')

    {{-- breadcrumb --}}
    @include('website.components.asset-tracker-H29.breadcrumb')

    {{-- details --}}
    @include('website.components.asset-tracker-H29.details')
    {{-- gallery --}}
    {{-- @include('website.components.asset-tracker-H29.gallery') --}}
    {{-- case study -> product --}}
    @include('website.components.home.product')
@endsection