<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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


Route::get('/list', [ContactsController::class, 'index'])->name('contacts.list');


Route::get('/create', function () {
    return view('form');
})->name('contacts.create');

Route::get('/edit', function () {
    return view('welcome');
});

Route::delete('/delete/{post}', ContactsController::class .'@destroy')->name('contacts.destroy');
