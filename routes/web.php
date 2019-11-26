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
/*
//Pour l'authentification
Auth::routes();*/
Route::group(['middleware'=>['auth']], function(){

Route::resource('/chauffeurs','chauffeurController');
Route::resource('/hotels','hotelController');
Route::resource('/agences','agenceController');
//Route::resource('/notifications','notificationController');
Route::get('/transfertsIntermediaires/{status}/indexetats', 'transIntermediaireController@indexetats');
//Route::get('/transfertsIntermediaires/2/indexplanifies', 'transIntermediaireController@indexplanifies');
//Route::get('/transfertsIntermediaires/indexrealises', 'transIntermediaireController@indexrealises');
Route::resource('/transfertsIntermediaires','transIntermediaireController');
Route::resource('/transferts','transfertController');
//Route::resource('/notifications','notificationController');



Route::get('/', function () {
    return view('index');
});

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
?>


