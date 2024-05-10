<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocusignController;
use App\Http\Controllers\VehiclesController;
use App\Models\Category;
use App\Models\Vehicles;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/cars', function () {
    return view('public.cars.index');
})->name('cars-home');

Route::get('/cars/details/{id}', function () {
    return view('public.cars.details');
})->name('cars-details');

Route::get('/cars/list', function () {
    return view('public.cars.list');
})->name('cars-list');

Route::get('/yachts', function () {
    return view('public.yachts.index');
})->name('yachts-home');

Route::get('/yachts/details/{id}', function () {
    return view('public.yachts.details');
})->name('yachts-details');

Route::get('/yachts/list', function () {
    return view('public.yachts.list');
})->name('yachts-list');

Route::get('/about', function () {
    return view('public.about');
})->name('about');

Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');

Route::get('/checkout/{id}', function () {
    return view('public.checkout');
})->name('checkout');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/dashboard/addlisting', function () {
    return view('admin.add-listings');
})->name('add-listings');
Route::get('/dashboard/profile', function () {
    return view('admin.profile');
})->name('profile');

Route::get('/test', [VehiclesController::class, 'index'])->name('vehicles.index');
Route::post('/test', [VehiclesController::class, 'create'])->name('vehicles.store');
