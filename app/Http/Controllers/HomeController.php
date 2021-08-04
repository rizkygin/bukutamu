<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function login(){
        $data = \App\Models\tamu::orderBy('created_at','desc')->where('deleted_at',null)->get();
        $instansi = \App\Models\instansi::all();
        
        return view('masuk',compact(['data','instansi']));
    }
}
