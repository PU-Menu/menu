<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Menu</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<style>
    #item {
        padding: 10px;
        
        
    }
    #title {
        background-color: #43DDE6;
        font-size:40px;
        font-family: Microsoft JhengHei;
    }
    #bar {
        display: block;
        background-color: #F0F0F0;
        font-size:25px;
    }
</style>

<body>

    <div id="wrapper">
        <nav>
            <!-- Navigation -->
            <div id="title">
                「文學食旅，無所味懼」 櫟舍文學餐廳<br>
            </div>
            <div id="bar">
                | <a href="#" id="item">活動</a> | 
                <a href="#" id="item">菜單</a> | 
                <a href="#" id="item">作者</a> |
                <a href="#" id="item">位置</a> |
            </div>
            @yield('header')
        </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
