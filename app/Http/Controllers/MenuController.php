<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function author()
    {
        return view('Author');
    }
    public function menu()
    {
        return view('Menu');
    }

    public function location()
    {
        return view('location');
    }

    public function header()
    {
        return view('/header');
    }

    public function dish1()
    {
        return view('Menu_item1');
    }
    public function dish2()
    {
        return view('Menu_item2');
    }


    public function index()
    {
        return view('index');
    }
    public function activity()
    {
        return view('activity');
    }
}

