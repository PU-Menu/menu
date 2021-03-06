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
            <p>新增活動</p>
            <form action="{{ url('/input_activity') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputPassword1">活動標題</label>
                    <input  name="title" type="text" class="form-control" id="exampleInputPassword1" placeholder="活動名稱">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">活動連結</label>
                    <input type="text" name="content" class="form-control" placeholder="活動連結">
                </div>
                <button type="submit" class="btn btn-primary">新增</button>
                <a href="{{ url('/back_activitylist') }}" class="btn btn-warning">取消</a>
            </form>
        @stop