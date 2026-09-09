<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'GameLogger')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">GameLogger</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Pagina Principal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('historial.index') ? 'active' : '' }}" href="{{ route('historial.index') }}">Historial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('calendario.index') ? 'active' : '' }}" href="{{ route('calendario.index') }}">Calendario</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Contenido de cada página-->
    <main class="pt-5 mt-3">

      @if (session('success'))
        <div class="container mt-3">
          <div class="alert alert-success">{{ session('success') }}</div>
        </div>
      @endif

      @yield('content')

    </main>

    <!-- Footer -->
    <footer class="bg-body-tertiary py-4">
      <div class="container text-center">
        <p class="fw-bold mb-1">GameLogger</p>
        <p class="text-secondary mb-0">Lleva el registro de tus videojuegos en un solo lugar.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
