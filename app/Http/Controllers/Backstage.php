<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
class Backstage extends Controller
{
    
    public function index()//後台首頁
    {
        return view('/back/header');
    }
    //菜單
    public function menu_list()//現有菜單列表
    {
        $allData = DB::select('select * from menu_table');
        
        return view('/back/menu_list',['allData'=>$allData]);
    }
    public function add_menu()//新增菜單頁面
    {
        return view('/back/add_menu');
    }
    public function edit_menu()//新增菜單頁面
    {
        $id = request()->input('id');
        $name = request()->input('name');
        $content = request()->input('content');
        $author = request()->input('author');

        $arr = array("id" => $id, "name" => $name, "content" => $content, "author" => $author);
        return view('/back/edit_menu',['data'=>$arr]);
    }
    public function input_menu(Request $request)//菜單資料匯入資料庫
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
        return redirect('/back_menulist');
    }
    public function delete_menu(Request $request)//刪除菜單資料
    {  
        $id = request()->input('id');
        DB::table('menu_table')->where('menu_id', '=' ,$id)->delete();
        return redirect('/back_menulist');
    }
    public function update_menu(Request $request)//更新菜單資料
    {  
        $id = request()->input('id');
        $menu = request()->input('menu');
        $content = request()->input('content');
        $author = request()->input('author');

        DB::table('menu_table')->where('menu_id', '=', $id)->update(
            [
                'menu_name' =>  $menu,
                'menu_author' => $author,
                'menu_content' =>  $content,
            ]   
        );
        return redirect('/back_menulist');
    }
    //活動 Activity
    public function activity_list()
    {
        $allData = DB::select('select * from activity');

        return view('/back/activity_list',compact('allData'));
    }
    public function add_activity()//新增活動頁面
    {
        return view('/back/add_activity');
    }
    public function edit_activity()//新增活動頁面
    {
        $id = request()->input('id');
        $title = request()->input('title');
        $content = request()->input('content');

        $data = array("id" => $id, "title" => $title, "content" => $content,);
        return view('/back/edit_activity',compact('data'));
    }
    public function input_activity(Request $request)//菜單資料匯入資料庫
    {
        $menu = request()->input('title');
        $content = request()->input('content');
    
        DB::table('activity')->insert(
            [
                'title' =>  $menu,
                'activity_content' =>  $content,
            ]
        );
        return redirect('/back_activitylist');
    }
    public function update_activity(Request $request)//更新活動資料
    {  
        $id = request()->input('id');
        $title = request()->input('title');
        $content = request()->input('content');

        DB::table('activity')->where('activity_id', '=', $id)->update(
            [
                'title' =>  $title,
                'activity_content' =>  $content,
            ]   
        );
        return redirect('/back_activitylist');
    }
    public function delete_activity(Request $request)//刪除活動資料
    {  
        $id = request()->input('id');
        DB::table('activity')->where('activity_id', '=' ,$id)->delete();
        return redirect('/back_activitylist');
    }
}
