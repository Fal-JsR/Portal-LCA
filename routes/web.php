<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Client\DashboardController as ClientDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/link', [AdminDashboardController::class, 'link'])->name('admin.link');
    Route::get('/trafik-lca', [AdminDashboardController::class, 'trafikLca'])->name('admin.trafik-lca');
    Route::get('/live-monitoring', [AdminDashboardController::class, 'liveMonitoring'])->name('admin.live-monitoring');
    Route::get('/upstream', [AdminDashboardController::class, 'upstream'])->name('admin.upstream');
    Route::get('/upstream-24jam', [AdminDashboardController::class, 'upstream24jam'])->name('admin.upstream-24jam');
    Route::get('/upstream-live', [AdminDashboardController::class, 'upstreamLive'])->name('admin.upstream-live');
    Route::get('/downstream', [AdminDashboardController::class, 'downstream'])->name('admin.downstream');
    Route::get('/downstream-live', [AdminDashboardController::class, 'downstreamLive'])->name('admin.downstream-live');
    Route::get('/downstream-24jam', [AdminDashboardController::class, 'downstream24jam'])->name('admin.downstream-24jam');
    Route::get('/ping', [AdminDashboardController::class, 'ping'])->name('admin.ping');
    Route::get('/profile', [AdminDashboardController::class, 'profile'])->name('admin.profile');
    Route::get('/register', [AdminDashboardController::class, 'register'])->name('admin.register');
    Route::get('/instansi', [AdminDashboardController::class, 'instansi'])->name('admin.instansi');
    Route::post('/instansi', [AdminDashboardController::class, 'storeInstansi'])->name('instansi.store');
});

Route::middleware(['auth', 'role:client'])->prefix('client')->group(function () {
    Route::get('/dashboard', [ClientDashboardController::class, 'index'])->name('client.dashboard');
    Route::get('/link', [ClientDashboardController::class, 'link'])->name('client.link');
});

Route::get('/contact', fn() => view('pages.contact'))->name('contact');
Route::get('/profile', fn() => view('pages.profile'))->name('profile');
Route::get('/faq/fiber', fn() => view('pages.faq_fiber'))->name('faq.fiber');
Route::get('/faq/wireless', fn() => view('pages.faq_wireless'))->name('faq.wireless');
Route::get('/network-ai', fn() => view('pages.network_ai'))->name('network.ai');
require __DIR__.'/auth.php';
