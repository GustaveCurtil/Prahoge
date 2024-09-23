<?php

use App\Mail\AfspraakMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('landingspagina');
})->name('landingspagina');

Route::get('/patientencheck', function () {
    return view('patientencheck');
})->name('patientencheck');

Route::get('/afspraak', function () {
    return view('afspraak');
})->name('afspraak');

Route::get('/privacyverklaring', function () {
    return view('privacyverklaring');
})->name('privacyverklaring');


Route::post('/contact', [MailController::class, 'submit'])->name('contact.mail');