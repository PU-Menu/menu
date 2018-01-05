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
        <p>管理員列表</p>
        <a href="{{ url('/add_member') }}" class="btn btn-info">新增管理員</a><br/><br/>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>名稱</th>
                <th>修改</th>
                <th>刪除</th>
            </tr>
            <?php $i=1; ?>
            @foreach ($allData as $row) 

                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $row->account }}</td>
                    <td>
                        <form action="{{ url('/edit_member') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="account" value="{{ $row->account }}">
                            <input type="hidden" name="password" value="{{ $row->password }}">
                            <button type="submit" class="btn btn-warning">修改密碼</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ url('/delete_member') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="account" value="{{ $row->account }}">
                            <button class="btn btn-danger">刪除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @stop
</body>
</html>