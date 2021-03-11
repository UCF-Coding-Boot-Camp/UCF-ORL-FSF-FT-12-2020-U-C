<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
  public function index()
  {
    $first_names = ['Peleke', 'Marcus'];
    $last_names = ['Sengstacke', 'Cicero'];
    $emails = ['peleke@syntax.tech', 'tullia@arpinum.opt'];

    // Clumsy, isn' this?
    $my_full_name = $first_names[0] . " " . $last_names[0];
    $partner_full_name = $first_names[1] . " " . $last_names[1];
    $full_names = [$my_full_name, $partner_full_name];
    
    // We can pass as many arguments to compact as we want
    return view('about', compact('full_names', 'emails'));
  }
}
