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
Route::get('/healthcode','App\Http\Controllers\HealthController@showHealth');
Route::get('/epidemic','App\Http\Controllers\Controller@showEpidemic');
Route::get('/help','App\Http\Controllers\Controller@showHelp');

// Vaccination
Route::get('/vaccination','App\Http\Controllers\VaccinationController@showVaccination');
Route::post('/addVaccination', 'App\Http\Controllers\VaccinationController@addVaccination');

// Emergency
Route::get('/emergency','App\Http\Controllers\EmergencyController@showEmergency');
Route::post('/addEmergency', 'App\Http\Controllers\EmergencyController@addEmergency');
Route::post('/searchEmergency', 'App\Http\Controllers\EmergencyController@searchEmergency');

// Notifications
Route::get('/notifications','App\Http\Controllers\NotificationController@showNotifications');
Route::post('/addNotification', 'App\Http\Controllers\NotificationController@addNotification');

// Users
Route::get('/users','App\Http\Controllers\UserController@showUsers');
