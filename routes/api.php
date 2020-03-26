<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::middleware('api')->get('/movies', 'MoviesController@index');
// Route::middleware('api')->get('/movies/{id}', 'MoviesController@show');
// Route::middleware('api')->post('/movies', 'MoviesController@store');
// Route::middleware('api')->put('/movies/{id}', 'MoviesController@update');
// Route::middleware('api')->delete('/movies/{id}', 'MoviesController@destroy');

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('open', 'DataController@open');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::get('closed', 'DataController@closed');
    Route::resource('movies', 'MoviesController');
});