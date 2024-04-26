<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/cars', function () {
    return view('public.cars.index');
})->name('cars-home');

Route::get('/cars/{id}', function () {
    return view('public.cars.details');
})->name('cars-details');

Route::get('/yatchts', function () {
    return view('public.yatchts.index');
})->name('yatchts-home');

Route::get('/yatchts/{id}', function () {
    return view('public.yatchts.details');
})->name('yatchts-details');

Route::get('/about', function () {
    return view('public.about');
})->name('about');

Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');
