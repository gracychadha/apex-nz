@extends('website.layout.app')
@section('title', 'News - Apex GPS Tracker Manufacturer')
@section('content')

    {{-- breadcrumb --}}
    @include('website.components.news.breadcrum')

    {{-- main section --}}
    <div class="rts-blog-list-area rts-section-gapBottom">
        <div class="container">
            <div class="row g-5">
             {{-- blogs --}}
             @include('website.components.news.blogs')
               
             {{-- sidebar --}}
                @include('website.components.news.sidebar')
            </div>
        </div>
    </div>

@endsection