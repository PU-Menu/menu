@extends('header')
<style>
    .table-dark{
        position: relative;
        top:37px;
        max-width:80% !important;
        margin:auto;
        color:black;
    }
</style>
<body>
    @section('header')
        
    @stop

    @section('content')
        <table class="table table-dark">
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
                    <td>{{ $row->menu_content }}</td>
                    <td>{{ strip_tags($row->created_at) }}</td>
                </tr>
            @endforeach
        </table>
    @stop
</body>
</html>