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
            <form action="{{ url('/update_activity') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $data['id'] }}">
                <div class="form-group">
                    <label for="exampleInputPassword1">活動標題</label>
                    <input  name="title" type="text" class="form-control" id="exampleInputPassword1" placeholder="菜單名稱" value="{{ $data['title'] }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">活動內容</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:150%;">{{$data['content']}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">修改</button>
                <a href="{{ url('/back_activitylist') }}" class="btn btn-warning">取消</a>
            </form>
        @stop
