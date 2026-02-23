@extends('website.layout.app')
@section('title', 'OEM / ODM - Apex GPS Tracker Manufacturer')
@section('content')

    {{-- breadcrumb --}}
    @include('website.components.oem-odm.breadcrum')

    {{-- work process --}}
    @include('website.components.oem-odm.work-porcexx')

    {{-- why choose us --}}
    @include('website.components.home.solution')
    {{-- appointment form --}}
    @include('website.components.home.appointment-form')
@endsection