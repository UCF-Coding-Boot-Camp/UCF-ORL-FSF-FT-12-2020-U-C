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

Route::get('', function() {

  $site_title = 'Laravel 5';

  // Note that we do NOT write the $ in the string
  //   we pass to compact!
  return view('welcome', compact('site_title'));
});

Route::get('about', function() {

  $first_name = 'Peleke';
  $last_name = 'Sengstacke';
  $email = 'peleke@syntax.tech';

  // We can pass as many arguments as we want to compact.
  return view('about', compact('first_name', 'last_name', 'email'));
});
