<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamenteController;
use App\Http\Controllers\AngajatiController;

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

Route::get('/departamente', [DepartamenteController::class, 'getPage']);
Route::get('/angajati', [AngajatiController::class, 'getPage']);
Route::get('/search', [AngajatiController::class, 'searchAngajati'])->name('search');
Route::get('/getMoreAngajati', [AngajatiController::class, 'getMoreAngajati'])->name('get-more-angajati');

Route::post('');

