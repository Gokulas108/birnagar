<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about/bhaktivinoda-thakura', function () {
    return view('pages.about');
});

Route::get('/about/building-temple', function () {
    return view('pages.building_temple');
});

Route::get('about/message-from-chairman', function () {
    return view('pages.message_chairman');
});

Route::get('/about/team', function () {
    return view('pages.team');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/songs', function () {
    return view('pages.songs');
});

Route::get('/donate', function () {
    return view('pages.donate');
});

Route::get('/terms-and-conditions', function () {
    return view('pages.terms_conditions');
});

Route::get('/privacy-policy', function () {
    return view('pages.privacy_policy');
});