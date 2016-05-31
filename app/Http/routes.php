<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Auth;

Route::get('gallery/list', 'GalleryController@viewGalleryList');
Route::post('gallery/save', 'GalleryController@saveGallery');
Route::get('gallery/view/{id}', 'GalleryController@viewGalleryPics');
Route::post('image/do-upload', 'GalleryController@doImageUpload');
Route::get('gallery/delete/{id}', 'GalleryController@deleteGallery');

Route::post('user/do-login', 'Auth\AuthController@doLogin');

Route::get('user/logout', function (){
    Auth::logout();
    return redirect('/');
});
Route::get('/', function () {
    return view('users.login');
});
