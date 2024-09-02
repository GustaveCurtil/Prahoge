<?php

use App\Mail\AfspraakMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('landingspagina');
})->name('landingspagina');

Route::get('/afspraak', function () {
    return view('afspraak');
})->name('afspraak');

Route::get('/privacyverklaring', function () {
    return view('privacyverklaring');
})->name('privacyverklaring');

//route for mailing
Route::get('/email', function() {
    Mail::to('gust.curtil@hotmail.com')->send(new AfspraakMail());
    return new AfspraakMail();
});

Route::post('/contact', [MailController::class, 'submit'])->name('contact.mail');