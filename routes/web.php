<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
| =============================
| BASIC ROUTING
| =============================
|*/

// Hello SaCode
Route::get('/hello-sacode', function() {
    return "Hello SaCode!";
});

// Hello Laravel
Route::get('/hello-laravel', function() {
    echo "Hello Laravel!";
});

// Home Page
Route::get('/home', function() {
    return view('home');
});

/*
| =============================
| PREFIX ROUTING
| =============================
|*/

Route::prefix('admin')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    // Users
    Route::get('/users', function () {
        return view('admin.users.index');
    });

});

