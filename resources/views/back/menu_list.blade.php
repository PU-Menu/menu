@extends('back.header')
<style>
    table{
        width: 100%;
        table-layout: fixed;
    }
    p{
        font-size: 40px;
        font-weight: bold;
    }
</style>
<body>
    @section('header')
        
    @stop

    @section('content')
        <p>菜單列表</p>
        <a href="{{ url('/add_menu') }}" class="btn btn-info">新增菜單</a><br/><br/>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>名稱</th>
                <th>作者</th>
                <th>圖片</th>
                <th>建立時間</th>
                <th>修改</th>
                <th>刪除</th>
            </tr>
            <?php $i=1; ?>
            @foreach ($allData as $row) 

                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $row->menu_name }}</td>
                    <td>{{ $row->menu_author }}</td>
                    <td><img src="{{url('/img/'.$row->img)}}" alt="" width="100px;" height="100px"></td>
                    <td>{{ $row->created_at }}</td>
                    <td>
                        <form action="{{ url('/edit_menu') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $row->menu_id }}">
                            <input type="hidden" name="name" value="{{ $row->menu_name }}">
                            <input type="hidden" name="author" value="{{ $row->menu_author }}">
                            <input type="hidden" name="content" value="{{ $row->menu_content }}">
                            <button type="submit" class="btn btn-warning">修改</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ url('/delete_menu') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $row->menu_id }}">
                            <button class="btn btn-danger">刪除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @stop
</body>
</html>