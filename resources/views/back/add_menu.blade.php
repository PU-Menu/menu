@extends('back.header')
<style>
    .form-control{
        width: 14%;
    }
    form{
        margin: 20px;
        width: 50%;
        height: 50%;
    }
    p{
        font-size: 40px;
        font-weight: bold;
    }
    .mce-tinymce,.mce-container,.mce-panel{
        height:200px;
    }
</style>
        @section('header')
        
        @stop

        @section('content')
            <p>新增菜單</p>
            <form action="{{ url('/input_menu') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputPassword1">菜單名稱</label>
                    <input  name="menu" type="text" class="form-control" id="exampleInputPassword1" placeholder="菜單名稱">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">作者</label>
                    <input  name="author" type="text" class="form-control" id="exampleInputPassword1" placeholder="作者">
                </div>
                <label for="exampleInputPassword1">圖片上傳</label>
                <input type="file" class="form-control" id="img" name="img" placeholder="上傳圖片" value="">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">文章內容</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:150%;"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">新增</button>
                <a href="{{ url('/menu_list') }}" class="btn btn-warning">取消</a>
            </form>
        @stop