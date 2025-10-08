<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Client\AuthController as ClientAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProfileController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/specialists', [HomeController::class, 'specialists'])->name('specialists');

Route::get('/login', [ClientAuthController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [ClientAuthController::class, 'login'])->middleware('guest')->name('login.post');
Route::post('/logout', [ClientAuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::view('/register', 'client.register')->middleware('guest')->name('register');
Route::post('/register', [ClientAuthController::class, 'register'])->middleware('guest')->name('register.post');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index'])->name('client.profile');
    Route::post('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('client.profile.update');
});


Route::get('/programs', [HomeController::class, 'programs'])->name('programs');

Route::view('/aboutus', 'client.aboutus')->name('aboutus');

Route::view('/contactus', 'client.contactus')->name('contactus');
Route::post('/contactus', [HomeController::class, 'contactSubmit']);

Route::view('/services', 'client.services')->name('services');
Route::view('/privacy-policy', 'client.privacy-policy')->name('privacy-policy');

for ($i=1; $i <= 4; $i++) { 
    Route::view('/test/'. $i, 'test.' . $i);
}

// admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->middleware('auth:admin')->name('admin.dashboard');

    Route::view('/login', 'admin.login')->middleware('guest:admin')->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login')->middleware('guest:admin');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware('auth:admin');

    Route::group(['prefix' => 'profile', 'middleware' => 'auth:admin'], function () {
        Route::get('/', [ProfileController::class, 'settings'])->name('admin.profile.index');
        Route::post('/updateinfos', [ProfileController::class, 'updateInfos'])->name('admin.profile.infos');
        Route::post('/updatepassword', [ProfileController::class, 'updatePassword'])->name('admin.profile.password');
    });

    Route::prefix('admins')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admins.index');       // List all admins
        Route::get('/create', [AdminController::class, 'create'])->name('admins.create'); // Show create form
        Route::post('/', [AdminController::class, 'store'])->name('admins.store');       // Store new admin
        Route::get('/{admin}', [AdminController::class, 'show'])->name('admins.show');   // Show specific admin
        Route::get('/{admin}/edit', [AdminController::class, 'edit'])->name('admins.edit'); // Show edit form
        Route::put('/{admin}', [AdminController::class, 'update'])->name('admins.update');  // Update admin
        Route::post('/delete/{admin}', [AdminController::class, 'destroy'])->name('admins.destroy'); // Delete admin
    });

    // Route for showing the password set form (Web route example)
    Route::get('/invitation/{token}', [AdminController::class, 'showSetPasswordForm'])->middleware('guest')->name('admin.invitation');

    // Route for setting the password (Web route example)
    Route::post('/invitation/{token}', [AdminController::class, 'setPassword'])->middleware('guest')->name('admin.setPassword');

    // resend admin invitation
    Route::post('/admin/resend/invitation/{id}', [AdminController::class, 'regenInviteToken'])->middleware('guest')->name('admin.regenInviteToken');

    Route::get('contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('contacts/{id}', [ContactController::class, 'show'])->name('admin.contacts.show');
    Route::delete('contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');

    // Route::resource('admins', AdminController::class);
    Route::name('admin.')->group(function () {
        Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class)->middleware('auth:admin');
        Route::resource('specialities', \App\Http\Controllers\Admin\SpecialityController::class)->middleware('auth:admin');
        Route::resource('clients', \App\Http\Controllers\Admin\ClientController::class)->middleware('auth:admin');
        Route::resource('programs', App\Http\Controllers\Admin\ProgramController::class)->middleware('auth:admin');
        Route::resource('specialists', App\Http\Controllers\Admin\SpecialistController::class)->middleware('auth:admin');

    });

});