<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Front
Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/portfolio', [FrontController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/admin/dashboard', [FrontController::class, 'dashboard'])->name('dashboard');


//Back

Route::get('/admin/dashboard/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/admin/dashboard/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
// CRUD CREATE
Route::get('/admin/dashboard/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/admin/dashboard/blog/store', [BlogController::class, 'store'])->name('blog.store');

Route::get('/admin/dashboard/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('/admin/dashboard/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');

// CRUD DELETE
Route::delete('/admin/dashboard/blog/{id}/delete', [BlogController::class, 'destroy'])->name('blog.destroy');
Route::delete('/admin/dashboard/portfolio/{id}/delete', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');

// EDIT - UPDATE
Route::get('/admin/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/admin/blog/{id}/update', [BlogController::class, 'update'])->name('blog.update');

Route::get('/admin/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::put('/admin/portfolio/{id}/update', [PortfolioController::class, 'update'])->name('portfolio.update');
