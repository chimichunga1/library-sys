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



Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['web','auth']], function(){

Route::get('books','PagesController@books');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('search','book_listController@search');

Route::get('search_genre','genre_listController@search_genre');

Route::get('search_section','section_listController@search');

Route::get('search_admin','accountAdminController@search');

Route::get('search_user','accountUserController@search');

Route::get('search_circulation','LibCirculationController@search');

Route::get('search_borrow','userProfileController@search_borrow');

Route::get('LibReturn','LibCirculationController@LibReturn');

Route::get('SectionSearch','UserViewSectionController@search')->name('userSearch');

Route::get('checkout','checkoutController@checkout')->name('checkout');

Route::get('deleteBook','book_listController@deleteBook')->name('deleteBook');

Route::get('approveRequest','LibCirculationController@approveRequest')->name('approveRequest');

Route::get('rejectRequest','LibCirculationController@rejectRequest')->name('rejectRequest');

Route::get('returnRequest','LibCirculationController@returnRequest')->name('returnRequest');

Route::get('receiveRequest','LibCirculationController@receiveRequest')->name('receiveRequest');

Route::get('book_section/search','book_sectionController@search');

Route::get('register_here','PagesController@register');

Route::get('lib_section','PagesController@lib_section');

Route::get('section_show','PagesController@section_show');

Route::resource('userProfile','userProfileController');

Route::resource('LibCirculation','LibCirculationController');

Route::resource('UserViewSection','UserViewSectionController');

Route::resource('accountAdmin','accountAdminController');

Route::resource('accountUser','accountUserController');

Route::resource('accountUser','accountUserController');

Route::resource('book_section','book_sectionController');

Route::resource('book_list','book_listController');

Route::resource('genre_list','genre_listController');

Route::resource('section_list','section_listController');

Route::resource('CreateInSection','CreateInSection');

Route::get('/home',function(){

		if(AUth::user()->admin==0){



			$users['users'] = \App\User::all();				
			return view('home',$users);






		}

		else
		{
			$users['users'] = \App\User::all();
			return view('adminhome',$users);

		}

							});

});