<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;

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

Route::get('/admin', function () {
    return 'hello admin';
});



Route::namespace('App\Http\Controllers\Front')->group(function ()
{
    Route::get('users','UserController@showAdminName');
});

/*
Route::prefix('users')->group(function (){
    Route::get('show','UserController@showAdminName');
    Route::delete('delete','UserController@showAdminName');
    Route::get('edit','UserController@showAdminName');
    Route::put('update','UserController@showAdminName');
});
*/


Route::group(['prefix'=>'users','middleware'=>'auth'],function (){
    // set of routes
    Route::get('/',function (){
        return 'work';
    });
    Route::get('show','UserController@showAdminName');
    Route::delete('delete','UserController@showAdminName');
    Route::get('edit','UserController@showAdminName');
    Route::put('update','UserController@showAdminName');
});


Route::get('check',function (){
    return 'middleware';
})->middleware('auth');
