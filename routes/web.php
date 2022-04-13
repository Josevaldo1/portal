<?php

use App\Http\Controllers\SiteAboutController;
use App\Http\Controllers\SiteContactController;
use App\Http\Controllers\SiteHomeController;
use App\Http\Controllers\SiteNewsController;
use App\Http\Controllers\SiteProjectController;
use App\Http\Controllers\SiteServiceController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [SiteHomeController::class, 'index'])->name('site.home');
Route::get('/about', [SiteAboutController::class, 'index'])->name('site.about');
Route::get('/service', [SiteServiceController::class, 'index'])->name('site.service');
Route::get('/project', [SiteProjectController::class, 'index'])->name('site.project');
Route::get('/news', [SiteNewsController::class, 'index'])->name('site.news');
Route::get('/contact', [SiteContactController::class, 'index'])->name('site.contact');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
