<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {return view('homepage');});
Route::get('/homepage', function () {return view('homepage');});
Route::get('/about', function () {return view('about');});

// Authentification
Route::get('/register', function () {return view('register');});
Route::post('/register','App\Http\Controllers\AuthController@register');
Route::get('/login', function () {return view('login');});
Route::post('/login','App\Http\Controllers\AuthController@login');
Route::get('/logout','App\Http\Controllers\AuthController@logout');

// Profile
Route::get('/menu','App\Http\Controllers\Controller@showMenu');
Route::get('/vaccination','App\Http\Controllers\Controller@showVaccination');
Route::get('/healthcode','App\Http\Controllers\Controller@showHealthcode');
Route::get('/epidemic','App\Http\Controllers\Controller@showEpidemic');
Route::get('/emergency','App\Http\Controllers\Controller@showEmergency');
Route::get('/help','App\Http\Controllers\Controller@showHelp');
