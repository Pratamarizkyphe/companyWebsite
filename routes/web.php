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

Route::get('/','App\Http\Controllers\FrontendController@index');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\user@index')->name('dashboard');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::get('gallery','App\Http\Controllers\GalleryController@index_fr');
Route::get('portfolio','App\Http\Controllers\PortfolioController@index_fr');
Route::get('profile','App\Http\Controllers\MisiController@index_fr');
Route::get('vidio','App\Http\Controllers\VidioController@index_fr');
Route::get('blog','App\Http\Controllers\BlogController@index_fr');
Route::get('blog/{blog:id}','App\Http\Controllers\BlogController@show');


Route::get('/mailform','App\Http\Controllers\SendMailController@loadForm')->name('mail.form');
Route::post('/mailsend','App\Http\Controllers\SendMailController@sendMail')->name('mail.send');
