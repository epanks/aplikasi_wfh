<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('home');

Route::livewire('settings', 'account.edit')->layout('layouts.app', ['tittle' => 'Settings'])->name('settings');
Route::livewire('user/{identifier}', 'account.show')->layout('layouts.app')->name('account.show');

Route::middleware('guest')->group(function () {
    Route::view('login', 'auth.login')->name('login');
    Route::view('register', 'auth.register')->name('register');
});

Route::view('password/reset', 'auth.passwords.email')->name('password.request');
Route::get('password/reset/{token}', 'Auth\PasswordResetController')->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::view('email/verify', 'auth.verify')->middleware('throttle:6,1')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'Auth\EmailVerificationController')->middleware('signed')->name('verification.verify');

    Route::post('logout', 'Auth\LogoutController')->name('logout');

    Route::view('password/confirm', 'auth.passwords.confirm')->name('password.confirm');
    //Progres
    Route::livewire('/balai-list', 'balai.balai-list')->layout('layouts.app')->name('balai-list');
    Route::livewire('/balai-paket-list/{id}', 'balai.balai-paket-list')->layout('layouts.app')->name('balai-paket-list');

    Route::livewire('/paket-list', 'paket.paket-list')->layout('layouts.app')->name('paket-list');
    Route::livewire('/paket-create', 'paket.paket-create')->layout('layouts.app')->name('paket-create');
    Route::livewire('/paket-update/{id}', 'paket.paket-update')->layout('layouts.app')->name('paket-update');
    //Program
    Route::livewire('/balai-usulan-list', 'program.balai-usulan-list')->layout('layouts.app')->name('balai-usulan-list');
});
