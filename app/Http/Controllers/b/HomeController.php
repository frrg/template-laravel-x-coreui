<?php

namespace App\Http\Controllers\b;
use App\Http\Controllers\b\BackendController;

class HomeController extends BackendController
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bcrum = $this->bcrum('Dashboard');
        return view('backend.home',compact('bcrum'));
    }
}
