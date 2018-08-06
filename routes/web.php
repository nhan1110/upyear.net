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

Route::get('/bb-pp.php', 'Frontend\HomeController@bbpp')->name('bbpp');

Route::get('/', 'Frontend\HomeController@index')->name('home');
Route::get('/search', 'Frontend\HomeController@search')->name('search');
Route::get('/suggest', 'Frontend\HomeController@suggest')->name('suggest');
Route::get('/news/detail/{id?}', 'Frontend\HomeController@newsdetail')->name('news.detail');

/* Pre Account */
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/forgot', 'Auth\LoginController@showForgotForm')->name('forgot');
Route::post('/forgot', 'Auth\LoginController@forgot');
Route::get('/reset/{token}', 'Auth\LoginController@showResetForm')->name('reset');

Route::get('/profile/verify/{token}', 'Frontend\UserController@verify')->name('users.verify');

Route::get('/uploadapp', 'Frontend\ProfileController@uploadapp')->name('uploadapp');
Route::post('/uploadapp', 'Frontend\ProfileController@uploadapp')->name('uploadapp');
Route::get('/registerapp', 'Frontend\ProfileController@registerapp')->name('registerapp');
Route::get('/detailapp/{app_id?}', 'Frontend\HomeController@detailapp')->name('detailapp');



/* After Login */
Route::group(['middleware' => 'auth:web', 'prefix' => 'profile'], function (){
    Route::get('/', ['uses' => 'Frontend\ProfileController@showProfileForm'])->name('profile.index');
    Route::post('/', ['uses' => 'Frontend\ProfileController@update']);
    Route::get('/myapp', ['uses' => 'Frontend\ProfileController@myapp'])->name('profile.myapp');
    Route::get('/feeling', ['uses' => 'Frontend\ProfileController@feelingForm'])->name('profile.feeling');
    Route::post('/feeling', ['uses' => 'Frontend\ProfileController@feelingUpdate']);
    Route::get('/news', ['uses' => 'Frontend\ProfileController@newsForm'])->name('profile.news');
    Route::post('/news', ['uses' => 'Frontend\ProfileController@newsUpdate']);
    Route::get('/logout', ['uses' => 'Frontend\ProfileController@logout'])->name('profile.logout');
});

/* CMS Pages not require login */

/* Admin */
Route::group(['prefix' => 'backend'], function () {
    Route::get('/login', ['uses' => 'Backend\LoginController@loginForm'])->name('admin.login');
    Route::post('/login', ['uses' => 'Backend\LoginController@index']);
});


/* Admin */
Route::group(['prefix' => 'backend', 'middleware' => 'auth:backend'], function () {
    Route::get('/', ['uses' => 'Backend\DashboardController@index'])->name('admin.dashboard');
    Route::get('/user', ['uses' => 'Backend\UserController@index'])->name('admin.user');
});