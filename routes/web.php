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

Route::get('/d&t/platform', [PageController::class, 'platform'])->name('dt.platform');
Route::get('/d&t/powertrain', [PageController::class, 'powertrain'])->name('dt.powertrain');
Route::get('/d&t/lab', [PageController::class, 'lab'])->name('dt.lab');
Route::get('/d&t/adas', [PageController::class, 'adas'])->name('dt.adas');
Route::get('/d&t/autopilot', [PageController::class, 'autopilot'])->name('dt.autopilot');
Route::get('/d&t/newenergy', [PageController::class, 'newenergy'])->name('dt.newenergy');

Route::get('/news/news', [PageController::class, 'news'])->name('news.news');
Route::get('/news/events', [PageController::class, 'events'])->name('news.events');

Route::get('/about/fromceo', [PageController::class, 'aboutceo'])->name('about.ceo');
Route::get('/about/introduction', [PageController::class, 'aboutIntroduction'])->name('about.introduction');
Route::get('/about/concept', [PageController::class, 'aboutConcept'])->name('about.concept');
Route::get('/about/honors', [PageController::class, 'aboutHonors'])->name('about.honors');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/worldwide', [PageController::class, 'worldwide'])->name('worldwide');

Route::get('/tiggo8pro', [PageController::class, 'tiggo8pro'])->name('tiggo8pro');
Route::get('/tiggo8', [PageController::class, 'tiggo8'])->name('tiggo8');
Route::get('/tiggo7pro', [PageController::class, 'tiggo7pro'])->name('tiggo7pro');
Route::get('/tiggo7', [PageController::class, 'tiggo7'])->name('tiggo7');
Route::get('/new-tiggo4', [PageController::class, 'newTiggo4'])->name('newtiggo4');
Route::get('/tiggo2', [PageController::class, 'tiggo2'])->name('tiggo2');

Route::get('/models/arrizo/arrizo8', [PageController::class, 'arrizo8'])->name('arrizo8');

Route::get('/models/new-energy', [PageController::class, 'newEnergy'])->name('newenergy');
