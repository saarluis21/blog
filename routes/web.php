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

Route::get('/', 'HomeController@master');

//Route::get('/greetings/{usuari}', 'NouController@greetings');

Route::get('/login', "LoginController@login");

Route::get('/logout', function () {
    return 'Logout usuario';
});

Route::get('/catalog', "CatalogController@index");

Route::get('/catalog/show/{id}',['id' => "CatalogController@show"]);

Route::get('/catalog/create', "CatalogController@create");

Route::get('/catalog/edit/{id}',['id' => "CatalogController@edit"]);

Route::get('/books', 'BookController@llistar');

Route::get('/books/create',function() {

return view('books.createBooks');

});

Route::post('/books/create','BookController@create');
