<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\VolunteerController;

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
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('aboutus');

Route::get('/contact', function () {
    return view('pages.about');
})->name('contact');

Route::get('/donate', function () {
    return view('pages.about');
})->name('donate');

Route::get('/volunteer/download', [VolunteerController::class, 'download'])->name('volunteer.download');
