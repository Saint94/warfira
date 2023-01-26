<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\LocalizationController;
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

// Route qui permet de connaître la langue active
Route::get('locale', [LocalizationController::class, 'getLang'])->name('getlang');
// Route qui permet de modifier la langue
Route::get('locale/{lang}', [LocalizationController::class, 'setLang'])->name('setlang');

Route::get('/contactez nous', [ContactController::class, 'index'])->name('contact.index');
Route::get('/a propos de nous', [AboutController::class, 'index'])->name('about.index');


Route::get('/', function () {
    return view('frontend.accueil');
})->name('/');
