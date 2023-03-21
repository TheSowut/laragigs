{{-- Template for Vanilla PHP --}}
{{--<h1><?php echo $heading; ?></h1>--}}
{{--<?php foreach ($listings as $listing): ?>--}}
{{--    <h2><?php echo $listing['title']; ?></h2>--}}
{{--    <p><?php echo $listing['description']; ?></p>--}}
{{--<?php endforeach; ?>--}}

@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        {{--@if(count($listings) === 0)--}}
        {{--    <p>No listings found</p>--}}
        {{--@endif--}}
        {{-- OR using unless and else--}}
        @unless(count($listings) === 0)
            @foreach($listings as $listing)
{{--                : when passing a variable --}}
                <x-listing-card :listing="$listing"/>
            @endforeach
        @else
            <p>No listings found</p>
        @endunless
    </div>
@endsection
