<?php

use App\Http\Controllers\PrivacyCheckupController;
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

Route::get('/privacy', [PrivacyCheckupController::class, 'index'])->name('privacy-checkup.index');
Route::post('/privacy', [PrivacyCheckupController::class, 'show'])->name('privacy-checkup.show');