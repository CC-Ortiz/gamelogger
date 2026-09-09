<?php

use Illuminate\Support\Facades\Route;

// Página principal
Route::get('/', function () {
    return view('index');
})->name('home');

// Historial de juegos (datos de ejemplo, no se exige CRUD/Eloquent en esta entrega)
Route::get('/historial', function () {
    $games = [
        [
            'title'     => 'The Legend of Zelda: Tears of the Kingdom',
            'platform'  => 'Switch',
            'status'    => 'completed',
            'rating'    => 10,
            'played_at' => '12/06/2026',
            'notes'     => 'Una obra maestra de diseño de mundo abierto.',
        ],
        [
            'title'     => 'Hollow Knight',
            'platform'  => 'PC',
            'status'    => 'playing',
            'rating'    => null,
            'played_at' => '20/08/2026',
            'notes'     => null,
        ],
        [
            'title'     => 'Elden Ring',
            'platform'  => 'PS5',
            'status'    => 'backlog',
            'rating'    => null,
            'played_at' => null,
            'notes'     => null,
        ],
    ];

    return view('historial', compact('games'));
})->name('historial.index');

// Calendario de juego (datos de ejemplo, no se exige CRUD/Eloquent en esta entrega)
Route::get('/calendario', function () {
    $playedDates = [
        ['game' => 'Hollow Knight', 'date' => '05/09/2026'],
        ['game' => 'The Legend of Zelda: Tears of the Kingdom', 'date' => '12/06/2026'],
        ['game' => 'Elden Ring', 'date' => '28/08/2026'],
    ];

    return view('calendario', compact('playedDates'));
})->name('calendario.index');
