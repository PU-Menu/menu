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
            <p>新增管理員</p>
            <form action="{{ url('/input_member') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputPassword1">帳號</label>
                    <input  name="account" type="text" class="form-control" id="exampleInputPassword1" placeholder="帳號">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">密碼</label>
                    <input  name="password" type="text" class="form-control" id="exampleInputPassword1" placeholder="密碼">
                </div>
                <button type="submit" class="btn btn-primary">新增</button>
                <a href="{{ url('/back_memberlist') }}" class="btn btn-warning">取消</a>
            </form>
        @stop