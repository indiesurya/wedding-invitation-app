<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::post('/rsvp', 'RSVPController@save')->name('rsvp');

Route::namespace('Admin')->middleware('auth')->group(function ()
{
	Route::post('/logout', 'AuthController@logout')->name('logout');

	Route::prefix('admin')->name('admin.')->group(function ()
	{
		Route::get('/', 'HomeController@index')->name('home');
		Route::view('about', 'admin.about')->name('about');
		Route::view('navbar', 'admin.navbar')->name('navbar');
		Route::view('banner', 'admin.banner')->name('banner');
		Route::view('quote', 'admin.quote')->name('quote');
		Route::view('wedding', 'admin.wedding')->name('wedding');
		Route::view('countdown', 'admin.countdown')->name('countdown');
		Route::view('location', 'admin.location')->name('location');
		Route::view('rsvp', 'admin.rsvp')->name('rsvp');

		Route::prefix('story')->name('story.')->group(function ()
		{
			Route::view('/', 'admin.story.index')->name('index');
			Route::view('/create', 'admin.story.create')->name('create');
			Route::view('/{story}', 'admin.story.edit')->name('edit');
		});

		Route::prefix('event')->name('event.')->group(function ()
		{
			Route::view('/', 'admin.event.index')->name('index');
			Route::view('/create', 'admin.event.create')->name('create');
			Route::view('/{event}', 'admin.event.edit')->name('edit');
		});

		Route::prefix('gallery')->name('gallery.')->group(function ()
		{
			Route::view('/', 'admin.gallery.index')->name('index');
			Route::view('/create', 'admin.gallery.create')->name('create');
			Route::view('/{gallery}', 'admin.gallery.edit')->name('edit');
		});

	});

});

Route::middleware('guest')->group(function ()
{
	Route::view('/login', 'auth.login')->name('login');
});