<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
class Backstage extends Controller
{
    
    public function index()//首頁
    {
        return view('/back/header');
    }
    public function menu_list()//現有菜單列表
    {
        $allData = DB::select('select * from menu_table');
        
        
        return view('/back/menu_list',['allData'=>$allData]);
    }
    public function add_menu()//新增菜單頁面
    {
        return view('/back/add_menu');
    }
    public function input(Request $request)//菜單資料匯入資料庫
    {
        
        $menu = request()->input('menu');
        $content = request()->input('content');
        $author = request()->input('author');
    
        DB::table('menu_table')->insert(
            [
                'menu_name' =>  $menu,
                'menu_author' => $author,
                'menu_content' =>  $content,
            ]
        );
        return redirect('/menu_list');
    }   
}
