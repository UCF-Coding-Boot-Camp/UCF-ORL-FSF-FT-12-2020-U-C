<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
  public function index()
  {
    $site_title = "Laravel 5";
    return view("welcome", compact("site_title"));
  }
}
