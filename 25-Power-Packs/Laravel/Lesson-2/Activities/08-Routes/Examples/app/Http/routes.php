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

  $site_title = "Laravel 5";

  // Note that we do NOT write the $ in the string
  //   we pass to compact!
  return view('welcome', compact('site_title'));
});
