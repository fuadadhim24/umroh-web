<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');})->name('dashboard');
Route::get('/tentang-kami', function () {return view('main.about');})->name('about');
Route::get('/haji', function () {return view('main.haji');})->name('haji');
Route::get('/umroh', function () {return view('main.umroh');})->name('umroh');
