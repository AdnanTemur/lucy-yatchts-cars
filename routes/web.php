<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/cars', function () {
    return view('public.cars.index');
})->name('cars-home');

Route::get('/cars/details/{id}', function () {
    return view('public.cars.details');
})->name('cars-details');

Route::get('/yachts', function () {
    return view('public.yachts.index');
})->name('yachts-home');

Route::get('/yachts/details/{id}', function () {
    return view('public.yachts.details');
})->name('yachts-details');

Route::get('/about', function () {
    return view('public.about');
})->name('about');

Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');
