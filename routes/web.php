<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.pages.welcome');
})->name('home');
Route::get('/contact-us', function () {
    return view('website.pages.contact-us');
})->name('contact-us');
Route::get('/oem-odm-service', function () {
    return view('website.pages.oem-odm-service');
})->name('oem-odm-service');

Route::get('/our-news', function () {
    return view('website.pages.news');
})->name('news');
Route::get('/news-details', function () {
    return view('website.pages.news-detail');
})->name('news-detail');
Route::get('/videos', function () {
    return view('website.pages.video');
})->name('videos');
Route::get('/case-studies', function () {
    return view('website.pages.case-study');
})->name('case-studies');
Route::get('/car-sale', function () {
    return view('website.pages.car-sale');
})->name('car-sale');
Route::get('/car-parts', function () {
    return view('website.pages.car-parts');
})->name('car-parts');
Route::get('/tractor-sale', function () {
    return view('website.pages.tractor-sale');
})->name('tractor-sale');
Route::get('/tractor-parts', function () {
    return view('website.pages.tractor-part');
})->name('tractor-part');
Route::get('/farming-supplies', function () {
    return view('website.pages.farming-supplies');
})->name('farming-supplies');
Route::get('/vehicle-tracker-gs105', function () {
    return view('website.pages.vehicle-tracker-GS105');
})->name('vehicle-tracker-gs105');
Route::get('/vehicle-tracker-h29p', function () {
    return view('website.pages.vehicle-tracker-H29P');
})->name('vehicle-tracker-h29p');
Route::get('/vehicle-management', function () {
    return view('website.pages.vehicle-management');
})->name('vehicle-management');
Route::get('/privacy-policy', function () {
    return view('website.pages.privacy-policy');
})->name('privacy-policy');
Route::get('/terms-conditions', function () {
    return view('website.pages.Terms-conditions');
})->name('terms-conditions');
