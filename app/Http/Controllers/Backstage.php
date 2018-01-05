<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use DB,View;

class Backstage extends Controller
{
    
    public function index()//後台首頁
    {
        session_start();
        $_SESSION['permission'] = 0;
        return view('/back/login');
    }
    public function session()
    {   
        $account = "";
        $pwd = "";
        $account = request()->input('account');
        $pwd = request()->input('password');
        $pwd = md5($pwd);
        $users = DB::table('member')->where([['account','=',$account],['password','=',$pwd]])->get();
        
        
        foreach($users as $row){
            $permission = $row->permission;
        }
         $permission;
        if(count($users)!=0){
            session_start();
            $_SESSION['permission'] = $permission;
            echo "<script>alert('帳號正確');</script>";
            return redirect('/back_menulist');
        }else{
            echo "<script>alert('帳號錯誤');</script>";
            return view('/back/login');
        }
    }
    public function logout(){
        $_SESSION['permission'] = 0;
        return redirect('/back_login');
    }
    //管理員
    public function member_list()//現有菜單列表
    {
        session_start();
        if($_SESSION['permission']>0){
            $allData = DB::select('select * from member where permission < 2');
            return view('back.member_list',['allData'=>$allData]);
        }else{
            return redirect('/back_login');
        }
    }
    public function add_member()//新增菜單頁面
    {
        session_start();
        if($_SESSION['permission']>0){
            return view('back.add_member');
        }else{
            return redirect('/back_login');
        }
    }
    public function edit_member()//菜單頁面
    {   
        session_start();
        if($_SESSION['permission']>0){
            $account = request()->input('account');
            $password = request()->input('password');

            $arr = array("account" => $account, "password" => $password);
            return view('/back/edit_member',['data'=>$arr]);
        }else{
            return redirect('/back_login');
        }
    }
    public function input_member(Request $request)//菜單資料匯入資料庫
    {
        session_start();
        if($_SESSION['permission']>0){
            $account = request()->input('account');
            $password = request()->input('password');
            $password = md5($password);
            $allData = DB::table('member')->where('account', '=' ,$account)->get();
            if(count($allData)==0){
                DB::table('member')->insert(
                    [
                        'account' =>  $account,
                        'password' => $password,
                        'permission' => 1 
                    ]
                );
                return redirect('/back_memberlist');
            }else{
                echo "<script>alert('帳號重複');</script>";
                return view('back.add_member');
            }
        }else{
            return redirect('/back_login');
        }
    }
    public function delete_member(Request $request)//刪除菜單資料
    {  
        session_start();
        if($_SESSION['permission']>0){
            $account = request()->input('account');
            DB::table('member')->where('account', '=' ,$account)->delete();
            return redirect('/back_memberlist');
        }else{
            return redirect('/back_login');
        }
    }
    public function update_member(Request $request)//更新菜單資料
    {  
        session_start();
        if($_SESSION['permission']>0){
            $account = request()->input('account');
            $password = request()->input('password');
            $password = md5($password);
            DB::table('member')->where('account', '=', $account)->update(
                [
                    'password' => $password,
                ]   
            );
            return redirect('/back_memberlist');
        }else{
            return redirect('/back_login');
        }
    }
    //菜單
    public function menu_list()//現有菜單列表
    {
        session_start();
        if($_SESSION['permission']>0){
            $allData = DB::select('select * from menu_table');
            return view('back.menu_list',['allData'=>$allData]);
        }else{
            return redirect('/back_login');
        }
    }
    public function add_menu()//新增菜單頁面
    {
        session_start();
        if($_SESSION['permission']>0){
            return view('back.add_menu');
        }else{
            return redirect('/back_login');
        }
    }
    public function edit_menu()//修改菜單頁面
    {   
        session_start();
        if($_SESSION['permission']>0){
            $id = request()->input('id');
            $name = request()->input('name');
            $content = request()->input('content');
            $author = request()->input('author');

            $arr = array("id" => $id, "name" => $name, "content" => $content, "author" => $author);
            return view('/back/edit_menu',['data'=>$arr]);
        }else{
            return redirect('/back_login');
        }
    }
    public function input_menu(Request $request)//菜單資料匯入資料庫
    {
        session_start();
        if($_SESSION['permission']>0){
            $menu = request()->input('menu');
            $content = request()->input('content');
            $author = request()->input('author');
            $file = Input::file('img');
            $destination_path = public_path().'/img/';
            $extension = $file->getClientOriginalExtension();
            $file_name = strval(time()).str_random(5).'.'.$extension;
            if (Input::hasFile('img')) {
                $upload_success = $file->move($destination_path, $file_name);
                echo "img upload success!";
            } else {
                echo "img upload failed!";
            }
            DB::table('menu_table')->insert(
                [
                    'menu_name' =>  $menu,
                    'menu_author' => $author,
                    'menu_content' =>  $content,
                    'img' => $file_name
                ]
            );
            return redirect('/back_menulist');
        }else{
            return redirect('/back_login');
        }
    }
    public function delete_menu(Request $request)//刪除菜單資料
    {  
        session_start();
        if($_SESSION['permission']>0){
            $id = request()->input('id');
            DB::table('menu_table')->where('menu_id', '=' ,$id)->delete();
            return redirect('/back_menulist');
        }else{
            return redirect('/back_login');
        }
    }
    public function update_menu(Request $request)//更新菜單資料
    {  
        session_start();
        if($_SESSION['permission']>0){
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
        }else{
            return redirect('/back_login');
        }
    }
    //活動 Activity
    public function activity_list()
    {
        session_start();
        if($_SESSION['permission']>0){
            $allData = DB::select('select * from activity');
            return view('/back/activity_list',compact('allData'));
        }else{
            return redirect('/back_login');
        }
    }
    public function add_activity()//新增活動頁面
    {
        session_start();
        if($_SESSION['permission']>0){
            return view('/back/add_activity');
        }else{
            return redirect('/back_login');
        }
    }
    public function edit_activity()//新增活動頁面
    {
        session_start();
        if($_SESSION['permission']>0){
            $id = request()->input('id');
            $title = request()->input('title');
            $content = request()->input('content');

            $data = array("id" => $id, "title" => $title, "content" => $content,);
            return view('/back/edit_activity',compact('data'));
        }else{
            return redirect('/back_login');
        }
    }
    public function input_activity(Request $request)//菜單資料匯入資料庫
    {
        session_start();
        if($_SESSION['permission']>0){
            $title = request()->input('title');
            $content = request()->input('content');

            DB::table('activity')->insert(
                [
                    'title' =>  $title,
                    'activity_content' =>  $content,
                ]
            );
            
            return redirect('/back_activitylist');
        }else{
            return redirect('/back_login');
        }
    }
    public function update_activity(Request $request)//更新活動資料
    {  
        session_start();
        if($_SESSION['permission']>0){
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
        }else{
            return redirect('/back_login');
        }
    }
    public function delete_activity(Request $request)//刪除活動資料
    {  
        session_start();
        if($_SESSION['permission']>0){
            $id = request()->input('id');
            DB::table('activity')->where('activity_id', '=' ,$id)->delete();
            return redirect('/back_activitylist');
        }else{
            return redirect('/back_login');
        }
    }
    //作家管理
    public function author_list()
    {
        session_start();
        if($_SESSION['permission']>0){
            $allData = DB::select('select * from author');
            return view('/back/author_list',compact('allData'));
        }else{
            return redirect('/back_login');
        }
    }
    public function add_author()//新增作家頁面
    {   
        session_start();
        if($_SESSION['permission']>0){
            return view('/back/add_author');
        }else{
            return redirect('/back_login');
        }
    }
    public function edit_author()//新增作家頁面
    {
        session_start();
        if($_SESSION['permission']>0){
            $id = request()->input('id');
            $name = request()->input('name');
            $content = request()->input('content');

            $data = array("id" => $id, "name" => $name, "content" => $content,);
            return view('/back/edit_author',compact('data'));
        }else{
            return redirect('/back_login');
        }
    }
    public function input_author(Request $request)//作家資料匯入資料庫
    {
        session_start();
        if($_SESSION['permission']>0){
            $name = request()->input('name');
            $content = request()->input('content');
            $file = Input::file('img');
            $destination_path = public_path().'/img/';
            $extension = $file->getClientOriginalExtension();
            $file_name = strval(time()).str_random(5).'.'.$extension;
            if (Input::hasFile('img')) {
                $upload_success = $file->move($destination_path, $file_name);
                echo "img upload success!";
            } else {
                echo "img upload failed!";
            }
            DB::table('author')->insert(
                [
                    'name' =>  $name,
                    'content' =>  $content,
                    'img' => $file_name
                ]
            );
            return redirect('/back_authorlist');
        }else{
            return redirect('/back_login');
        }
    }
    public function update_author(Request $request)//更新作家資料
    {  
        session_start();
        if($_SESSION['permission']>0){
            $id = request()->input('id');
            $name = request()->input('name');
            $content = request()->input('content');

            DB::table('author')->where('id', '=', $id)->update(
                [
                    'name' =>  $name,
                    'content' =>  $content,
                ]   
            );
            return redirect('/back_authorlist');
        }else{
            return redirect('/back_login');
        }
    }
    public function delete_author(Request $request)//刪除作家資料
    {  
        session_start();
        if($_SESSION['permission']>0){
            $id = request()->input('id');
            DB::table('author')->where('id', '=' ,$id)->delete();
            return redirect('/back_authorlist');
        }else{
            return redirect('/back_login');
        }
    }
}
