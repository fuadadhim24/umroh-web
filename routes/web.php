<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [ArticleController::class,'index'])->name('dashboard');
Route::get('/tentang-kami', function () {return view('main.about');})->name('about');
Route::get('/haji', function () {return view('main.haji');})->name('haji');
Route::get('/umroh', function () {return view('main.umroh');})->name('umroh');
Route::get('/badal', function () {return view('main.badal');})->name('badal');
Route::get('/form-pendaftaran', function () {return view('form.register-form');})->name('register-form');
