<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.index');
})->name('home');

Auth::routes();

Route::get('/traitment', function () {
    return view('user.traitment');
})->name('traitment');



Route::get('/chat', [App\Http\Controllers\ChatGptService::class, 'askToChatGpt'])->name('api');
Route::get('/result', function () {
    return view('user.resultat');
})->name('result');
Route::get('/contact', function () {
    return view('user.contact');
})->name('contact');
