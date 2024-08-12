<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingspagina');
})->name('landingspagina');

Route::get('/afspraak', function () {
    return view('afspraak');
})->name('afspraak');

Route::get('/privacyverklaring', function () {
    return view('privacyverklaring');
})->name('privacyverklaring');

