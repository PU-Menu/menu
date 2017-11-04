@extends('header')
<style>
    .form-control{
        width: 14%;
    }
    form{
        margin: 20px;
        width: 16%;
    }
</style>
        @section('header')
        
        @stop

        @section('content')
            <form action="{{ url('/input') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputPassword1">菜單名稱</label>
                    <input  name="menu" type="text" class="form-control" id="exampleInputPassword1" placeholder="菜單名稱">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">作者</label>
                    <input  name="author" type="text" class="form-control" id="exampleInputPassword1" placeholder="作者">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">文章內容</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:150%;"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>
        @stop