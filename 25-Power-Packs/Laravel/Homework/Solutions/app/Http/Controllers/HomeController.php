<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // No need for user null check, because we only
        //   hit this route if authenticated.
        $user  = $request->user();
        $meals = $user->meals()
                      ->whereDate('created_at', '=', Carbon::today()->toDateString())
                      ->get();

        return view('home', compact('user', 'meals'));
    }
}
