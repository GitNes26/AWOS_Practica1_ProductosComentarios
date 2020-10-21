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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products/index','ProductController@index');

Route::get('comments/ByUser/{id?}','CommentController@CommentsByUser')
->where(['id','[0-9]+']);

Route::get('comments/ByProduct/{id?}','CommentController@CommentsByProduct')
->where(['id','[0-9]+']);

Route::post('products/create','ProductController@create');
Route::post('comments/create','CommentController@create');


Route::put('products/update','ProductController@update');

Route::delete('products/delete','ProductController@delete');



// RUTA EJEMPLO Middleware
Route::get('middleware', 'ProductController@aplicacion')->middleware('verificar.rol');
// Route::get('middleware/{usuario?}', 'ProductController@aplicacion');