@extends('layouts.nav')

@section('title', 'GameLogger - Historial')

@section('content')

  <section class="py-5 bg-light">
    <div class="container py-3">
      <h1 class="display-5 fw-bold">Tu historial de videojuegos</h1>
      <p class="lead text-secondary mt-3">
        Juegos registrados, con su plataforma, estado y valoración.
      </p>
    </div>
  </section>

  <section class="py-5">
    <div class="container">

      <div class="row g-4">
        @foreach ($games as $game)
          <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body p-4">

                <div class="d-flex justify-content-between align-items-start mb-2">
                  <h5 class="card-title fw-bold mb-0">{{ $game['title'] }}</h5>

                  @if ($game['status'] === 'completed')
                    <span class="badge bg-success">Completado</span>
                  @elseif ($game['status'] === 'playing')
                    <span class="badge bg-warning text-dark">Jugando</span>
                  @else
                    <span class="badge bg-secondary">Pendiente</span>
                  @endif
                </div>

                <p class="text-secondary mb-2">{{ $game['platform'] }}</p>

                @if ($game['rating'])
                  <p class="mb-1">⭐ {{ $game['rating'] }} / 10</p>
                @endif

                @if ($game['played_at'])
                  <p class="text-secondary small mb-2">
                    Jugado el {{ $game['played_at'] }}
                  </p>
                @endif

                @if ($game['notes'])
                  <p class="card-text">{{ $game['notes'] }}</p>
                @endif

              </div>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section>

@endsection
