<?php

use App\Http\Controllers\GithubController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/list/github', [GithubController::class, 'List'])->name('list')->middleware('auth');
Route::post('/search/github/', [GithubController::class, 'Search'])->name('Search')->middleware('auth');
Route::get('/profile/view/{id}', [GithubController::class, 'Profile'])->name('Profile')->middleware('auth');
Route::get('/profile/delete/{id}', [GithubController::class, 'ProfileDelete'])->name('ProfileDelete')->middleware('auth');
