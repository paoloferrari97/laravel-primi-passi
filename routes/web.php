<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $studenti = [
        [
            'nome' => 'Paolo',
            'cognome' => 'Ferrari'
        ],
        [
            'nome' => 'Luigi',
            'cognome' => 'Luigiotti'
        ],
        [
            'nome' => 'Giovanni',
            'cognome' => 'Giovannotti'
        ],
        [
            'nome' => 'Mario',
            'cognome' => 'Mariotti'
        ]
    ];

    return view('home', compact('studenti'));
});