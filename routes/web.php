<?php

use App\Livewire\Front\HomePage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Wardrobe\EditClothing;
use App\Livewire\Wardrobe\ClothingItems;
use App\Livewire\Wardrobe\CreateClothing;
use App\Livewire\Dashboard\DashboardIndex;
use App\Http\Controllers\ClothingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::middleware('guest')->group(function () {
Route::get('/', HomePage::class)->name('home.page');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('auth.registerform');
Route::post('/register', [RegisterController::class, 'register'])->name('auth.register');
Route::view('reset-password', 'components.auth.reset-password')->name('auth.resetpassword');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('auth.loginform');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
});

Route::middleware('auth')->group(function () {
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
// Route::get('dashboard', DashboardIndex::class)->name('dashboard');
Route::get('/clothing-items', ClothingItems::class )->name('clothing.items');
Route::get('clothing-create', CreateClothing::class)->name('clothing.create');
Route::get('/edit-item/{id}', EditClothing::class)->name('clothing.edit');
});