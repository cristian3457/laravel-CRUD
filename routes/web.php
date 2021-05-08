<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::view('/', 'home',['nombre'=> 'Cristian'])->name('home');
Route::view('/quienes-somos', 'about')->name('about');
Route::resource('portafolio','App\Http\Controllers\ProjectController')->names('projects')->parameters(['portafolio' => 'project']);
Route::view('/contacto', 'contact')->name('contact');
Route::post('/contact', 'App\Http\Controllers\MessageController@store')->name('messages.store');
require __DIR__.'/auth.php';
