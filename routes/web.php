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
Route::get('nowyprzepis', 'pagesController@getRecipeForm');
Route::get('przepis', 'pagesController@getRecipe');
Route::get('przepisy', 'pagesController@getRecipesList');
Route::get('conowego', 'pagesController@getNews');
Route::get('/', 'pagesController@getHome');
Route::resource('przepis', 'RecipeController');


//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('adres/{parametr}', 'nazwaKontrolera@Metoda'); // przekaże do metody parametr pod nazwą $parametr