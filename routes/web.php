<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BadalController;
use App\Http\Controllers\HajiController;
use App\Http\Controllers\PaketController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [ArticleController::class,'index'])->name('dashboard');
Route::get('/tentang-kami', function () {return view('main.about');})->name('about');
Route::get('/haji', [HajiController::class,'index'])->name('haji');
Route::get('/detail-haji/{id}',[HajiController::class, 'show'])->name('detail-haji');
Route::get('/detail-badal', function () {return view('main.detail-badal');})->name('detail-badal');
Route::get('/detail-badal/{id}',[BadalController::class, 'show'])->name('detail-haji');
Route::get('/umroh',[PaketController::class, 'index'])->name('umroh');
Route::get('/detail-umroh/{id}',[PaketController::class, 'show'])->name('detail-umroh');
Route::get('/daftar-umroh',[PaketController::class, 'indexDaftar'])->name('daftar-umroh');
Route::get('/badal', [BadalController::class, 'index'])->name('badal');
Route::get('/artikel', function () {return view('main.artikel');})->name('artikel');
Route::get('/test', function () {return view('main.test');})->name('test');
Route::get('/formulir-pendaftaran',  [App\Http\Controllers\RegisterFormController::class,'index'])->name('register-form');
Route::post('/pendaftaran', [App\Http\Controllers\RegisterFormController::class, 'store'])->name('pendaftaran-store');
