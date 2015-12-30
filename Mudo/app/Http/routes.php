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
    return view('welcome');
});

Route::get('acceuil', ['as' => 'home', 'uses' => 'PageController@home']);
Route::controller('auth', 'Auth\AuthController');
Route::get('quiz', ['as' => 'quiz', 'uses' => 'PageController@quiz']);
Route::get('movies', ['as' => 'movies', 'uses' => 'PageController@movies']);

Route::get('movies/{id}', 'MovieController@show');
Route::get('person/{id}', 'PersonController@show');

Route::get('question', 'QuestionController@index');
Route::get('question2/{tag}', 'QuestionController@show');
Route::get('question3/{tag}', 'QuestionController@showDeux');
Route::get('question4/{tag}', 'QuestionController@showTrois');

Route::get('questionOne', ['as' => 'qOne', 'uses' => 'PageController@qOne']);
Route::get('questionTwo', ['as' => 'qTwo', 'uses' => 'PageController@qTwo']);
Route::get('questionThree', ['as' => 'qThree', 'uses' => 'PageController@qThree']);
Route::get('questionFour', ['as' => 'qFour', 'uses' => 'PageController@qFour']);
Route::get('questionFive', ['as' => 'qFive', 'uses' => 'PageController@qFive']);
Route::get('questionSix', ['as' => 'qSix', 'uses' => 'PageController@qSix']);
Route::get('questionSeven', ['as' => 'qSeven', 'uses' => 'PageController@qSeven']);
Route::get('questionEight', ['as' => 'qEight', 'uses' => 'PageController@qEight']);
Route::get('questionNine', ['as' => 'qNine', 'uses' => 'PageController@qNine']);
Route::get('questionTen', ['as' => 'qTen', 'uses' => 'PageController@qTen']);



Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
