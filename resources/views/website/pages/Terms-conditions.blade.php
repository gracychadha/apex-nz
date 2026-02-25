@extends('website.layout.app')
@section('title', 'Terms & Conditions - Apex Trading Limited')
@section('content')
    {{-- breadcrum --}}
    @include('website.components.terms-conditions.breadcumb')
    
   {{-- description --}}
   @include('website.components.terms-conditions.description')

    {{-- subscribe --}}
    @include('website.components.home.subscribe-form')

@endsection