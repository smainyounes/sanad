<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.home');
});

Route::get('/specialists', function () {
    return view('client.specialists');
})->name('specialists');

Route::view('/login', 'client.login')->name('login');

Route::view('/register', 'client.register')->name('register');

Route::view('/programs', 'client.programs')->name('programs');

Route::view('/aboutus', 'client.aboutus')->name('aboutus');

Route::view('/contactus', 'client.contactus')->name('contactus');

Route::view('/services', 'client.services')->name('services');
Route::view('/privacy-policy', 'client.privacy-policy')->name('privacy-policy');

for ($i=1; $i <= 4; $i++) { 
    Route::view('/test/'. $i, 'test.' . $i);
}
