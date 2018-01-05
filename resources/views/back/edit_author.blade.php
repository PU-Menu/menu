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
            <p>修改活動</p>
            <form action="{{ url('/update_author') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $data['id'] }}">
                <div class="form-group">
                    <label for="exampleInputPassword1">作家姓名</label>
                    <input  name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="作家姓名" value="{{ $data['name'] }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">作家介紹</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:150%;">{{$data['content']}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">修改</button>
                <a href="{{ url('/back_authorlist') }}" class="btn btn-warning">取消</a>
            </form>
        @stop
