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
        <p>作家列表</p>
        <a href="{{ url('/add_author') }}" class="btn btn-info">新增作家</a><br/><br/>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>姓名</th>
                <th>圖片</th>
                <th>修改</th>
                <th>刪除</th>
            </tr>
            <?php $i=1; ?>
            @foreach ($allData as $row)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $row->name }}</td>
                    <td><img src="{{url('/img/'.$row->img)}}" alt="" width="100px;" height="100px"></td>
                    <td>
                        <form action="{{ url('/edit_author') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $row->id }}">
                            <input type="hidden" name="name" value="{{ $row->name }}">
                            
                            <input type="hidden" name="content" value="{{ $row->content }}">
                            <button type="submit" class="btn btn-warning">修改</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ url('/delete_author') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $row->id }}">
                            <button class="btn btn-danger">刪除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @stop
</body>
</html>