<!-- Example using old syntax -> it's still useful -->
{{-- <h1> <?php echo $heading ?></h1>

<?php foreach ($listings as $listing): ?>
  <h2><?php echo $listing['title'] ?></h2>
  <p><?php echo $listing['description'] ?></p>
<?php endforeach ?> --}}



{{-- Example blade syntax --}}

<h1> {{ $heading }} </h1>

@if (count($listings) > 0)
  <p>{{ count($listings)  }}</p>
@endif

@foreach ($listings as $listing)
  <a href="/find/{{ $listing['id'] }}">{{ $listing['title'] }} </a>
  <p>{{ $listing['description'] }}</p>
@endforeach
