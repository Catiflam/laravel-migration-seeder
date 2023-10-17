@extends('layouts.app')

@section('main-section')

<section class="container mt-5">
  @forelse($trains as $train)
      <p>
        <strong>Azienda</strong>: {{ $train->name }} <br>
      
      </p>
      <hr>
    @empty
      <h2>Non ci sono risultati</h2>
    @endforelse
</section>

@endsection