@extends('website.layout.app')
@section('title', 'Our Videos   - Apex GPS Tracker Manufacturer')
@section('content')

    {{-- breadcrumb --}}
    @include('website.components.video.breadcrum')
    {{-- video grid --}}
    @include('website.components.video.video-grid')

    
@endsection