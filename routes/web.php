<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [ArticleController::class,'index'])->name('dashboard');
Route::get('/tentang-kami', function () {return view('main.about');})->name('about');
Route::get('/haji', function () {return view('main.haji');})->name('haji');
Route::get('/detail-haji', function () {return view('main.detail-haji');})->name('detail-haji');
Route::get('/umroh', function () {return view('main.umroh');})->name('umroh');
Route::get('/badal', function () {return view('main.badal');})->name('badal');
Route::get('/artikel', function () {return view('main.artikel');})->name('artikel');
Route::get('/test', function () {return view('main.test');})->name('test');
Route::get('/formulir-pendaftaran',  [App\Http\Controllers\RegisterFormController::class,'index'])->name('register-form');
Route::post('/pendaftaran', [App\Http\Controllers\RegisterFormController::class, 'store'])->name('pendaftaran-store');
