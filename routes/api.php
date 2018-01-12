<?php

use Illuminate\Http\Request;
use App\Http\Controllers\listingsController;
use App\Http\Controllers\usersController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




/*
|---------------------------
|Users related route group
|---------------------------
*/
Route::get('/v1/users', 'usersController@getUsers');

Route::get('/v1/users/{id}', 'usersController@getSingleUsers');

/*
|---------------------------
|Listings related route group
|---------------------------
*/

Route::get('/v1/listings', 'listingsController@getListings');

Route::get('/v1/listings/{id}', 'listingsController@getSingleListings');

Route::middleware(['api_auth'])->group(function () {

   Route::get('/v1/authorize/listings/{id}', 'listingsController@getAuthorizeSingleListings');
    
});






// Route::middleware('auth:api')->group(function () {


Route::get('test', function () {
return new listingsResource(listings::find(1));
});










