@extends('layouts.nav')

@section('title', 'GameLogger - Inicio')

@section('content')

  <section class="py-5 bg-light">
    <div class="container py-5">
      <div class="row align-items-center">

        <div class="col-lg-7">

          <h1 class="display-4 fw-bold">
            Tu historial de videojuegos,
            <span class="text-success">en un solo lugar.</span>
          </h1>

          <p class="lead text-secondary mt-4">
            GameLogger es una aplicación diseñada para ayudarte a
            mantener un registro organizado de los videojuegos que
            has jugado, tus experiencias y tu progreso.
          </p>

          <div class="mt-4">
            <a href="{{ route('historial.index') }}" class="btn btn-success btn-lg me-2">
              Ver mi historial
            </a>

            <a href="#como-funciona" class="btn btn-outline-secondary btn-lg">
              Conocer más
            </a>
          </div>

        </div>

        <div class="col-lg-5 text-center mt-5 mt-lg-0">

          <div class="card shadow-sm border-0">
            <div class="card-body p-5">

              <div class="display-1 mb-3">
                🎮
              </div>

              <h2 class="fw-bold">
                GameLogger
              </h2>

              <p class="text-secondary mb-0">
                Registra, organiza y recuerda tus videojuegos favoritos.
              </p>

            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- Características -->
  <section id="caracteristicas" class="py-5">

    <div class="container">

      <div class="text-center mb-5">

        <h2 class="fw-bold">
          ¿Qué puedes hacer con GameLogger?
        </h2>

        <p class="text-secondary">
          Mantén organizada toda tu experiencia como jugador.
        </p>

      </div>

      <div class="row g-4">

        <div class="col-md-6 col-lg-3">
          <div class="card h-100 text-center shadow-sm border-0">
            <div class="card-body p-4">
              <div class="display-5 mb-3">🎮</div>
              <h5 class="card-title fw-bold">Registrar videojuegos</h5>
              <p class="card-text text-secondary">
                Agrega los videojuegos que has jugado y mantenlos
                registrados dentro de tu historial.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card h-100 text-center shadow-sm border-0">
            <div class="card-body p-4">
              <div class="display-5 mb-3">📚</div>
              <h5 class="card-title fw-bold">Historial organizado</h5>
              <p class="card-text text-secondary">
                Consulta fácilmente los videojuegos que has registrado
                y mantén tu historial organizado.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card h-100 text-center shadow-sm border-0">
            <div class="card-body p-4">
              <div class="display-5 mb-3">📅</div>
              <h5 class="card-title fw-bold">Calendario de juego</h5>
              <p class="card-text text-secondary">
                Revisa en qué días registraste haber jugado y sigue
                tu progreso a lo largo del mes.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card h-100 text-center shadow-sm border-0">
            <div class="card-body p-4">
              <div class="display-5 mb-3">⭐</div>
              <h5 class="card-title fw-bold">Tus valoraciones</h5>
              <p class="card-text text-secondary">
                Guarda información sobre tu experiencia y valoración
                de los videojuegos que hayas jugado.
              </p>
            </div>
          </div>
        </div>

      </div>

    </div>

  </section>

  <!-- Cómo funciona -->
  <section id="como-funciona" class="py-5 bg-light">

    <div class="container">

      <div class="text-center mb-5">
        <h2 class="fw-bold">¿Cómo funciona?</h2>
        <p class="text-secondary">Comenzar a utilizar GameLogger es sencillo.</p>
      </div>

      <div class="row g-4">

        <div class="col-md-4">
          <div class="text-center">
            <div class="display-4 text-success fw-bold">1</div>
            <h4 class="fw-bold mt-3">Crea tu cuenta</h4>
            <p class="text-secondary">
              Regístrate en GameLogger para comenzar a gestionar
              tu historial de videojuegos.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="text-center">
            <div class="display-4 text-success fw-bold">2</div>
            <h4 class="fw-bold mt-3">Registra tus juegos</h4>
            <p class="text-secondary">
              Agrega los videojuegos que hayas jugado y la información
              que quieras conservar sobre ellos.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="text-center">
            <div class="display-4 text-success fw-bold">3</div>
            <h4 class="fw-bold mt-3">Consulta tu historial</h4>
            <p class="text-secondary">
              Accede a tus registros cuando quieras y mantén
              organizada tu experiencia como jugador.
            </p>
          </div>
        </div>

      </div>

    </div>

  </section>

  <!-- Llamado a la acción -->
  <section class="py-5">

    <div class="container">

      <div class="card bg-dark text-white border-0 shadow">
        <div class="card-body text-center p-5">
          <h2 class="fw-bold">Empieza a organizar tu historial</h2>
          <p class="lead mt-3">Guarda la historia de los videojuegos que has disfrutado.</p>

          <a href="{{ route('historial.index') }}" class="btn btn-success btn-lg mt-3">
            Ver historial
          </a>
        </div>
      </div>

    </div>

  </section>

@endsection
