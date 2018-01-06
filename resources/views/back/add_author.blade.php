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
            <p>新增作者</p>
            <form action="{{ url('/input_author') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputPassword1">作者姓名</label>
                    <input  name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="作者姓名">
                </div>
                <label for="exampleInputPassword1">圖片上傳</label>
                <input type="file" class="form-control" id="img" name="img" placeholder="上傳圖片" value="">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">作者介紹</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:150%;"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">新增</button>
                <a href="{{ url('/back_authorlist') }}" class="btn btn-warning">取消</a>
            </form>
        @stop