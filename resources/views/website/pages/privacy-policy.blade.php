@extends('website.layout.app')
@section('title', 'Privacy Policy - Apex Trading Limited')
@section('content')
    {{-- breadcrum --}}
    @include('website.components.privacy-policy.breadcrumb')
    
   {{-- description --}}
   @include('website.components.privacy-policy.description')

    {{-- subscribe --}}
    @include('website.components.home.subscribe-form')

@endsection