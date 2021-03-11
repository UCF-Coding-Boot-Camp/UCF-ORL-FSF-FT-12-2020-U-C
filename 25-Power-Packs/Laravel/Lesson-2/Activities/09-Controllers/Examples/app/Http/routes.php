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

Route::get('', 'HomeController@index');

Route::get('about', function() {
  
  $first_name = 'Peleke';
  $last_name = 'Sengstacke';
  $email = 'peleke@syntax.tech';

  // We can pas as many arguments to compact as we want
  return view('about', compact('first_name', 'last_name', 'email'));
});
