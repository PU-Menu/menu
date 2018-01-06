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
            <p>修改密碼</p>
            <form action="{{ url('/update_member') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputPassword1">管理員名稱</label>
                    <h3>{{$data['account']}}</h3>
                    <input  name="account" type="hidden" class="form-control" id="exampleInputPassword1" placeholder="新密碼" value="{{$data['account']}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">新密碼</label>
                    <input  name="password" type="text" class="form-control" id="exampleInputPassword1" placeholder="新密碼" value="">
                </div>
                <button type="submit" class="btn btn-primary">修改</button>
                <a href="{{ url('/back_memberlist') }}" class="btn btn-warning">取消</a>
            </form>
        @stop
