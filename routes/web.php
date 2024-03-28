<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/autopilot', [PageController::class, 'autopilot'])->name('dt.autopilot');

Route::get('/news', [PageController::class, 'news'])->name('news.news');
Route::get('/news/read', [PageController::class, 'newsRead'])->name('news.news.read');
Route::get('/events', [PageController::class, 'events'])->name('news.events');

Route::get('/fromceo', [PageController::class, 'fromceo'])->name('about.ceo');
Route::get('/introduction', [PageController::class, 'introduction'])->name('about.introduction');
Route::get('/honors', [PageController::class, 'honors'])->name('about.honors');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/worldwide', [PageController::class, 'worldwide'])->name('worldwide');

Route::get('/tiggo8pro', [PageController::class, 'tiggo8pro'])->name('tiggo8pro');
Route::get('/tiggo8', [PageController::class, 'tiggo8'])->name('tiggo8');
Route::get('/tiggo7pro', [PageController::class, 'tiggo7pro'])->name('tiggo7pro');
Route::get('/tiggo7', [PageController::class, 'tiggo7'])->name('tiggo7');
Route::get('/new-tiggo4', [PageController::class, 'newTiggo4'])->name('newtiggo4');
Route::get('/tiggo2', [PageController::class, 'tiggo2'])->name('tiggo2');

Route::get('/arrizo8', [PageController::class, 'arrizo8'])->name('arrizo8');

Route::get('/new-energy', [PageController::class, 'newEnergy'])->name('newenergy');
