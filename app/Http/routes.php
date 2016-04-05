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

Route::get('/', function () {
    if(Auth::check())//
      return view('home');
    else
      return view('auth.login');
});

Route::get('/rent', [
  'uses' => 'RentController@index',
  'as' => 'rent'
]);

Route::group(['prefix' => 'return'],function(){
  Route::get('/', [
    'uses' => 'ReturnController@index',
    'as' => 'return'
  ]);

  Route::get('/info', [
    'uses' => 'ReturnController@info',
    'as' => 'return-info'
  ]);
});

// MEMBER GROUP
Route::group(['prefix'=>'member'],function(){
  Route::get('/', [
    'uses' => 'MemberController@index',
    'as' => 'list-member'
]);

  Route::get('/add', [
    'uses' => 'MemberController@add',
    'as' => 'member-add'
  ]);

  Route::get('/detail', [
    'uses' => 'MemberController@detail',
    'as' => 'member-detail'
  ]);
});

// BOOK GROUP
Route::group(['prefix'=>'book'],function(){
  Route::get('/', [
    'uses' => 'BookController@index',
    'as' => 'list-book'
]);

  Route::get('/add', [
    'uses' => 'BookController@add',
    'as' => 'book-add'
  ]);

  Route::get('/detail', [
    'uses' => 'BookController@detail',
    'as' => 'book-detail'
  ]);

});

// AUTHOR GROUP
Route::group(['prefix'=>'author'],function(){
  Route::get('/', [
    'uses' => 'AuthorController@index',
    'as' => 'list-author'
]);

  Route::get('/add', [
    'uses' => 'AuthorController@add',
    'as' => 'author-add'
  ]);

  Route::get('/detail', [
    'uses' => 'AuthorController@detail',
    'as' => 'author-detail'
  ]);
});

// PUBLISHER GROUP
Route::group(['prefix' => 'publisher'],function(){
  Route::get('/', [
    'uses' => 'PublisherController@index',
    'as' => 'list-publisher'
]);

  Route::get('/add', [
    'uses' => 'PublisherController@add',
    'as' => 'publisher-add'
  ]);

  Route::get('/detail', [
    'uses' => 'PublisherController@detail',
    'as' => 'publisher-detail'
  ]);

});

Route::auth();

Route::get('/home', [
  'uses'=>'HomeController@index',
  'as' => 'home'
]);

Route::get('/logout', array('as' => 'logout', function () {
    Auth::logout();
    return redirect('/login');
}));
