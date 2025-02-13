<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController; // Tambahkan ini!

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/blog/vpn-tunneling', [PageController::class, 'blogVpn'])->name('blog.vpn');
Route::get('/blog/education', [PageController::class, 'blogEducation'])->name('blog.education');
Route::get('/blog/organization', [PageController::class, 'blogOrganization'])->name('blog.organization');
Route::get('/blog/peltier-competition', [PageController::class, 'blogPeltier'])->name('blog.peltier');

// Sitemap Routes
Route::get('/sitemap.xml', [SitemapController::class, 'show']);
Route::get('/generate-sitemap', [SitemapController::class, 'generate']); // Untuk membuat ulang sitemap
