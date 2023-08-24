{{-- Example blade syntax --}}

<h1> {{ $heading }} </h1>

@if (count($listings) > 0)
  <p>{{ count($listings)  }}</p>
@endif

@foreach ($listings as $listing)
  <a href="/find/{{ $listing['id'] }}">{{ $listing['title'] }} </a>
  <p>{{ $listing['description'] }}</p>
@endforeach
