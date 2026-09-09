@extends('layouts.nav')

@section('title', 'GameLogger - Calendario')

@section('content')

  <section class="py-5 bg-light">
    <div class="container py-3">
      <h1 class="fw-bold">Calendario de juego</h1>
      <p class="text-secondary mb-0">
        Días en los que se registró haber jugado algún videojuego.
      </p>
    </div>
  </section>

  <section class="py-5">
    <div class="container">

      <ul class="list-group">
        @foreach ($playedDates as $entry)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>{{ $entry['game'] }}</span>
            <span class="badge bg-success">{{ $entry['date'] }}</span>
          </li>
        @endforeach
      </ul>

    </div>
  </section>

@endsection
