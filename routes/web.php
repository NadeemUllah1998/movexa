<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| MOVEXA - Global Moving & Relocations Web Routes
|--------------------------------------------------------------------------
*/

// Main Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services.index');
Route::get('/local-moving-dubai', [PageController::class, 'localMoving'])->name('local-moving');
Route::get('/international-moving', [PageController::class, 'internationalMoving'])->name('international-moving');
Route::get('/destinations', [PageController::class, 'destinations'])->name('destinations.index');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Service Detail Routes (9 services)
Route::get('/services/{slug}', [PageController::class, 'serviceDetail'])->name('services.show');

// International Destination Routes (12 countries)
Route::get('/destinations/{slug}', [PageController::class, 'destinationDetail'])->name('destinations.show');

// Blog Routes (Hub + 10 articles)
Route::get('/blog', [PageController::class, 'blog'])->name('blog.index');
Route::get('/blog/{slug}', [PageController::class, 'blogDetail'])->name('blog.show');

// Legal Pages
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('legal.privacy');
Route::get('/terms-conditions', [PageController::class, 'terms'])->name('legal.terms');

// SEO Routes
Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');
