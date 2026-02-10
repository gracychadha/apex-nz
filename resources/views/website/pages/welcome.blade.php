@extends('website.layout.app')

@section('title', 'Welcome to Apex (GPS Tracker Manufacturer)')

@section('content')
{{-- hero section --}}
@include('website.components.home.hero')
{{-- partner --}}
@include('website.components.home.partner')
{{-- about section --}}
{{-- @include('website.components.home.about-section') --}}
{{-- what we offer --}}
@include('website.components.home.what-we-offer')
{{-- counter --}}
@include('website.components.home.counter-section') 
{{-- industry --}}
@include('website.components.home.industries-serve')
{{-- case study --}}
@include('website.components.home.case-study')
{{-- testimonial --}}
@include('website.components.home.testimonial')
{{-- blog --}}
@include('website.components.home.blog')
{{-- team --}}
@include('website.components.home.team')
{{-- appointment form --}}
@include('website.components.home.appointment-form')
{{-- subscribe --}}
@include('website.components.home.subscribe-form')

  

@endsection
