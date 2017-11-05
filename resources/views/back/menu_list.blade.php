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
                <th>帳號</th>
                <th>密碼</th>
                <th>名字</th>
                <th>建立時間</th>
            </tr>
            @foreach ($allData as $row)
                <tr>
                    <td></td>
                    <td>{{ $row->menu_name }}</td>
                    <td>{{ $row->menu_author }}</td>
                    <td>{{ strip_tags($row->menu_content) }}</td>
                    <td>{{ $row->created_at }}</td>
                </tr>
            @endforeach
        </table>
    @stop
</body>
</html>