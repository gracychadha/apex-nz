@extends('website.layout.app')
@section('title', 'News Detail  - Apex GPS Tracker Manufacturer')
@section('content')

    {{-- breadcrumb --}}
    @include('website.components.news.detail.breadcrum')

    {{-- main section --}}
    <div class="blog-details-area-main-wrapper mt-dec-180">
        <div class="container">
            <div class="row">

                {{-- main --}}
                @include('website.components.news.detail.about')
                {{-- sidebar --}}
                @include('website.components.news.sidebar')
            </div>
        </div>
    </div>

@endsection