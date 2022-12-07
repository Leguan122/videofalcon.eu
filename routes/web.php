<?php

use App\Http\Controllers\Controller;
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
Route::get('/email',[Controller::class, 'email']);

Route::get('/',[Controller::class, 'welcome']);
Route::get('/references', [Controller::class, 'references']);
Route::get('/catalog', [Controller::class, 'catalog']);
Route::get('/aboutme', [Controller::class, 'aboutme']);
Route::get('/contact',[Controller::class, 'contact']);

Route::post('/contact', [Controller::class, 'sendingMsg']);
