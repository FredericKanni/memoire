<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::view('/','welcome') ;
Route::view('/contact','contact') ;
Route::view('/a-propos','a-propos') ;
Route::view('/je-participe','je-participe') ;

Route::view('/memoires/video','memoires.video') ;
Route::view('/memoires/photo','memoires.photo') ;
Route::view('/memoires/article','memoires.article') ;






