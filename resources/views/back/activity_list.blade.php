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
        <p>活動列表</p>
        <a href="{{ url('/add_activity') }}" class="btn btn-info">新增活動</a><br/><br/>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>標題</th>
                <th>建立時間</th>
                <th>修改</th>
                <th>刪除</th>
            </tr>
            <?php $i=1; ?>
            @foreach ($allData as $row)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td>
                        <form action="{{ url('/edit_activity') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $row->activity_id }}">
                            <input type="hidden" name="title" value="{{ $row->title }}">
                            <input type="hidden" name="content" value="{{ $row->activity_content }}">
                            <button type="submit" class="btn btn-warning">修改</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ url('/delete_activity') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $row->activity_id }}">
                            <button class="btn btn-danger">刪除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @stop
</body>
</html>