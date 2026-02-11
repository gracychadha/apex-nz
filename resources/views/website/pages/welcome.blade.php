@extends('website.layout.app')

@section('title', 'Welcome to Apex (GPS Tracker Manufacturer)')

@section('content')
{{-- hero section --}}
@include('website.components.home.hero')
{{-- partner --}}
@include('website.components.home.partner')

{{-- what we offer --}}
@include('website.components.home.what-we-offer')
{{-- about section --}}
@include('website.components.home.about-section')
{{-- counter --}}
@include('website.components.home.counter-section') 
{{-- solution --}}
{{-- @include('website.components.home.solution') --}}

{{-- industry --}}
@include('website.components.home.industries-serve')



{{-- team --}}
@include('website.components.home.team')
{{-- appointment form --}}
@include('website.components.home.appointment-form')
{{-- case study -> product --}}
@include('website.components.home.case-study')
{{-- testimonial --}}
@include('website.components.home.testimonial')
{{-- blog --}}
@include('website.components.home.blog')
{{-- subscribe --}}
@include('website.components.home.subscribe-form')

  

@endsection
