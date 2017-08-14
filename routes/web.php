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

Route::get('/', function () {
    return redirect()->route('items.index');
});
Route::resource('items', 'ItemViewerController');

// Route::resource('search', 'SearchItemController');

Route::get('/search', [
    'as' => 'api.search',
    'uses' => 'Api\SearchController@search',
    ]);

Route::get('/search/index', function () {
    return view('search');
});