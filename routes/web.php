<?php

use App\Http\Controllers\AdminController;
use App\Models\Admin;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('contact',function(){
    return view('page.contact');
})->name('contact');

Route::get('about',function(){
    return view('page.about');
})->name('about');

Route::get('rank',function(){
    return view('page.rank');
})->name('rank');

Route::get('event','page\ContactController@view')->name('event');
Route::get('profile','page\ProfileController@view')->name('profile');
Route::get('bookEvent','page\BookeventController@view')->name('booking');
Route::get('detailSong/{id}','page\DetailsongController@view')->name('detail-song');

// home
Route::get('index', 'page\HomeController@view')->name('index');

// register
Route::get('register','RegisterController@register')->name('register');
Route::post('register','RegisterController@postRegister')->name('register');

// login
Route::get('/login','LoginController@login')->name('login');
Route::post('/login','LoginController@postLogin')->name('login');

Route::get('login/redirect','LoginController@redirectToProvider')->name('redirect');
Route::get('login/callbach','LoginController@handlerProviderCallback')->name('callbach');

// logout
Route::get('logout','LogoutController@logout')->name('logout');

Route::get('forgot-admin',function(){ return view('admin.forgot'); });

Route::group(['prefix' => 'backend','middleware' => 'checkLogin'], function(){

    // dashboard
    Route::get('/','admin\DashboardController@view')->name('backend');

    // admin
    Route::get('/view-admin','admin\AdminController@view')->name('view-admin');
    Route::view('/add-admin','admin.admin.add')->name('add-admin');
    Route::post('/add-admin','admin\AdminController@create')->name('add-admin');
    Route::get('/edit-admin/{id}','admin\AdminController@edit')->name('edit-admin');
    Route::post('/edit-admin/{id}','admin\AdminController@update')->name('edit-admin');
    Route::get('/view-admin/{id}','admin\AdminController@delete')->name('delete-admin');

    // country
    Route::get('/view-country','admin\CountryController@view')->name('view-country');
    Route::view('/add-country','admin.country.add')->name('add-country');
    Route::post('/add-country','admin\CountryController@create')->name('add-country');
    Route::get('/edit-country/{id}','admin\CountryController@edit')->name('edit-country');
    Route::post('/edit-country/{id}','admin\CountryController@update')->name('edit-country');
    Route::get('/view-country/{id}','admin\CountryController@delete')->name('delete-country');

    // musician
    Route::get('/view-musician','admin\MusicianController@view')->name('view-musician');
    Route::get('/add-musician','admin\MusicianController@add')->name('add-musician');
    Route::post('/add-musician','admin\MusicianController@create')->name('add-musician');
    Route::get('/edit-musician/{id}','admin\MusicianController@edit')->name('edit-musician');
    Route::post('/edit-musician/{id}','admin\MusicianController@update')->name('edit-musician');
    Route::get('/view-musician/{id}','admin\MusicianController@delete')->name('delete-musician');

    // singer
    Route::get('/view-singer','admin\SingerController@view')->name('view-singer');
    Route::get('/add-singer','admin\SingerController@add')->name('add-singer');
    Route::post('/add-singer','admin\SingerController@create')->name('add-singer');
    Route::get('/edit-singer/{id}','admin\SingerController@edit')->name('edit-singer');
    Route::post('/edit-singer/{id}','admin\SingerController@update')->name('edit-singer');
    Route::get('/view-singer/{id}','admin\SingerController@delete')->name('delete-singer');

    // type
    Route::get('/view-type','admin\TypeController@view')->name('view-type');
    Route::view('/add-type','admin.type.add')->name('add-type');
    Route::post('/add-type','admin\TypeController@create')->name('add-type');
    Route::get('/edit-type/{id}','admin\TypeController@edit')->name('edit-type');
    Route::post('/edit-type/{id}','admin\TypeController@update')->name('edit-type');
    Route::get('/view-type/{id}','admin\TypeController@delete')->name('delete-type');

    // event
    Route::get('/view-event','admin\EventController@view')->name('view-event');
    Route::view('/add-event','admin.event.add')->name('add-event');
    Route::post('/add-event','admin\EventController@create')->name('add-event');
    Route::get('/edit-event/{id}','admin\EventController@edit')->name('edit-event');
    Route::post('/edit-event/{id}','admin\EventController@update')->name('edit-event');
    Route::get('/view-event/{id}','admin\EventController@delete')->name('delete-event');

    // song
    Route::get('/add-song','admin\SongController@add')->name('add-song');
    Route::get('/view-song','admin\SongController@view')->name('view-song');
    Route::post('/add-song','admin\SongController@create')->name('add-song');
    Route::get('/edit-song/{id}','admin\SongController@edit')->name('edit-song');
    Route::post('/edit-song/{id}','admin\SongController@update')->name('edit-song');
    Route::get('/view-song/{id}','admin\SongController@delete')->name('delete-song');

    // user
    Route::get('/view-user','admin\UserController@view')->name('view-user');
    Route::view('/add-user','admin.user.add')->name('add-user');
    Route::post('/add-user','admin\UserController@create')->name('add-user');
    // Route::get('/edit-user/{id}','admin\UserController@edit')->name('edit-user');
    // Route::post('/edit-user/{id}','admin\UserController@update')->name('edit-user');
    // Route::get('/view-user/{id}','admin\UserController@delete')->name('delete-user');
});


