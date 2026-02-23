@extends('website.layout.app')
@section('title' , 'Contact Us - Apex GPS Tracker Manufacturer')
@section('content')

{{-- breadcrumb --}}
@include('website.components.contact.breadcrum')

{{-- contact form --}}
@include('website.components.contact.form')

{{-- google map --}}
@include('website.components.contact.map')

{{-- subscribe --}}
@include('website.components.home.subscribe-form')
@endsection