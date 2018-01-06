<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
        $allData = DB::select('select * from menu_table');
        return view('Menu',['allData'=>$allData]);
    }

    public function location()
    {
        return view('location');
    }

    public function header()
    {
        $menuData = DB::select('select * from menu_table');
        $authorData = DB::select('select * from author');
        $activityData = DB::select('select * from activity');
        return view('header',['activityData' => $activityData, 'menuData' => $menuData, 'authorData' => $authorData]);
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
        session_start();
        $_SESSION['permission'] = 0;
        return view('index');
    }
    public function activity()
    {
        return view('activity');
    }
    public function test()
    {
        return view('layouts.layout');
    }
    public function all()
    {
        return view('all');
    }
    public function orderSeat()
    {
        return view('orderSeat');
    }
    public function add_orderSeat()
    {
        $name = request()->input('name');
        $phone = request()->input('phone');
        $num = request()->input('num');
        $order_date = request()->input('order_date');
        $order_time = request()->input('order_time');

            DB::table('order_table')->insert(
                [
                    'name' =>  $name,
                    'phone' =>  $phone,
                    'num' => $num,
                    'order_date' => $order_date,
                    'order_time' => $order_date,
                    'status' => 1,
                ]
            );
            echo "<script>alert('訂位成功')</script>";
            return redirect('/header');
    }
}

