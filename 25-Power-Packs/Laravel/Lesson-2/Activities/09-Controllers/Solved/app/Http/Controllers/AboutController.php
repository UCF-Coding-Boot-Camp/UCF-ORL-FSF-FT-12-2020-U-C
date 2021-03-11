<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
  public function index()
  {
    $first_name = 'Peleke';
    $last_name = 'Sengstacke';
    $email = 'peleke@syntax.tech';
    
    // We can pass as many arguments to compact as we want
    return view('about', compact('first_name', 'last_name', 'email'));
  }
}
