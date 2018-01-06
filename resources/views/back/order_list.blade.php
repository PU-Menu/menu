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
        <p>訂位列表</p>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>訂位人</th>
                <th>連絡電話</th>
                <th>人數</th>
                <th>訂位日期</th>
                <th>訂位時間</th>
                <th>未到/已到/取消</th>
                <th>到場時間</th>
                <th>確認到場</th>
                <th>取消訂位</th>
            </tr>
            <?php $i=1; ?>
            @foreach ($allData as $row) 

                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->num }}</td>
                    <td>{{ $row->order_date }}</td>
                    <td>{{ $row->order_time }}</td>
                    <td>
                        @if($row->status==1)
                            未到
                        @elseif($row->status==2)
                            已到
                        @elseif($row->status==0)
                            取消
                        @endif
                    </td>
                    <td>{{ $row->complete_at }}</td>
                    <td>
                        <form action="{{ url('/confirm_order') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $row->id }}">
                            <button type="submit" class="btn btn-warning">確認到場</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ url('/cancle_order') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $row->id }}">
                            <button class="btn btn-danger">取消訂位</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @stop
</body>
</html>