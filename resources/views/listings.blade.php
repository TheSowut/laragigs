{{-- Template for Vanilla PHP --}}
{{--<h1><?php echo $heading; ?></h1>--}}
{{--<?php foreach ($listings as $listing): ?>--}}
{{--    <h2><?php echo $listing['title']; ?></h2>--}}
{{--    <p><?php echo $listing['description']; ?></p>--}}
{{--<?php endforeach; ?>--}}

<h1>{{ $heading }}</h1>
@foreach($listings as $listing)
    <h1>{{ $listing['title'] }}</h1>
    <p>{{ $listing['description'] }}</p>
@endforeach
