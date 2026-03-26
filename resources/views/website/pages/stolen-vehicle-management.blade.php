@extends('website.layout.app')
@section('title', 'Stolen Vehicle Recovery - Apex GPS Tracker Manufacturer')
@section('content')

    {{-- breadcrumb --}}
    @include('website.components.stolen-vehicle-recovery.breadcrum')

    {{-- details --}}
    @include('website.components.stolen-vehicle-recovery.details')

    {{-- subscribe --}}
    @include('website.components.home.subscribe-form')

@endsection