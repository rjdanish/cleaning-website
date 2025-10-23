<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'da'])) {
        abort(400); // invalid locale
    }

    session(['locale' => $locale]);
    app()->setLocale($locale);

    return redirect()->back();
})->name('lang.switch');

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::view('/portfolio', 'pages.portfolio')->name('portfolio');
Route::view('/pricing', 'pages.pricing')->name('pricing');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/team', 'pages.team')->name('team');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/services/hotel', [ServiceController::class, 'hotel'])->name('services.hotel');
Route::get('/services/apartment', [ServiceController::class, 'apartment'])->name('services.apartment');
Route::get('/services/office', [ServiceController::class, 'office'])->name('services.office');
Route::get('/services/industrial', [ServiceController::class, 'industrial'])->name('services.industrial');
Route::view('/privacy', 'pages.privacy')->name('privacy');
