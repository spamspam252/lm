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
    if(Auth::check())
      return view('home');
    else
      return view('auth.login');
});

Route::get('/rent', function () {
    return view('rent');
})->name('rent');


Route::group(['prefix' => 'return'],function(){
  Route::get('/', function () {
      return view('return');
  })->name('return');

  Route::get('/info', function () {
      return view('return-info');
  })->name('return-info');
});

// MEMBER GROUP
Route::group(['prefix'=>'member'],function(){
  Route::get('/', function () {
      return view('list-member');
  })->name('list-member');

  Route::get('/add', function () {
      return view('member-add');
  })->name('member-add');

  Route::get('/detail', function () {
      return view('member-detail');
  })->name('member-detail');
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
  Route::get('/', function () {
      return view('list-author');
  })->name('list-author');

  Route::get('/add', function () {
      return view('author-add');
  })->name('author-add');

  Route::get('/detail', function () {
      return view('author-detail');
  })->name('author-detail');
});

// PUBLISHER GROUP
Route::group(['prefix' => 'publisher'],function(){
  Route::get('/', function () {
      return view('list-publisher');
  })->name('list-publisher');

  Route::get('/add', function () {
      return view('publisher-add');
  })->name('publisher-add');

  Route::get('/detail', function () {
      return view('publisher-detail');
  })->name('publisher-detail');


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
