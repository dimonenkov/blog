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
//Authentication Routes
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('auth/login', 'Auth\LoginController@postLogin');
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@getLogout']);
//Route::get('auth/logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Registration Routes
Route::get('auth/register', 'Auth\RegisterController@getRegister');
Route::post('auth/register', 'Auth\RegisterController@postRegister');

//Password resets Routes
Route::get('password/reset', 'ResetPasswordController@showLinkRequestForm');
Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/email', 'Auth\ResetPasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');



Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('blog', ['uses'=>'BlogController@getIndex', 'as' => 'blog.index']);
Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex')->name('name');
Route::resource('posts', 'PostController');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
// Route::group(['middleware' => ['web']], function() {
// Route::get('admin/categories', function () {
//     return view('admin.categories.single');
// });


// });