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
Route::get('/nowyprzepis', 'pagesController@getRecipeForm')->name('nowyprzepis');
Route::get('/przepis', 'recipeController@show')->name('przepis');
Route::get('/przepisy', 'pagesController@getRecipesList')->name('przepisy');
Route::get('/conowego', 'pagesController@getNews')->name('conowego');
Route::get('/', 'pagesController@getHome');
//Route::resource('przepis', 'RecipeController');


//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('adres/{parametr}', 'nazwaKontrolera@Metoda'); // przekaże do metody parametr pod nazwą $parametr