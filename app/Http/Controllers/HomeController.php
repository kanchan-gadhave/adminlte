<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;	

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$records = DB::table('users')->get();
        //return view('layouts/home');
		return view ('layouts/home')->with('records',$records);
    }
	
	public function dashboard()
    {
		$records = DB::table('users')->get();
        //return view('layouts/home');
		return view ('dashboard')->with('records',$records);
    }
	public function chart()
    {
		//$records = DB::table('users')->get();
        //return view('layouts/home');
		return view ('chart');
    }
}
