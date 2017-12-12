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

    <!-- nav bar & sub nav bar -->
    <link href="https://fonts.googleapis.com/css?family=David+Libre|Hind:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">

</head>

<style>
    
    .logo-img{
        /* border-radius: 40px;
        position:relative;
        left:30px;
        margin-top:5px;
        margin-bottom:5px; */
        position: absolute;
        z-index: 1;
        
        top:-6px;
        left: 5%;
    }

    a:hover{
        text-decoration:none;
    }
    
    footer{
        background-color:#25283D;
        color: #FFFFFF;
        padding: 30px;
    }

    .my-footer-col {
        text-align: center;
        font-size:20px;
    }

    .my-footer-col-title {
        font-size: 30px; 
        font-weight:bold; 
        margin:10px;
    }

    .my-footer-col-li {
        margin: 7px;
    }
    
    .footer-copywrite {
        text-align:center;
    }
        
    
</style>



<div id="wrapper">
    <header class="cd-auto-hide-header" >      
        <nav class="cd-secondary-nav">
            <ul>
                <li><a href="{{ url('/activity') }}">活動</a></li>
                <li><a href="{{ url('/menu') }}">菜單</a></li>
                <li><a href="{{ url('/author') }}">作者</a></li>
                <li><a href="{{ url('/location') }}">位置</a></li>
            </ul>
        </nav> <!-- .cd-secondary-nav -->
        <a href="{{ url('/') }}"><img src="{{ URL::asset('logo_burn.png') }}" alt="Kekisha"width="80px" height="80px" class="logo-img"></a>
        @yield('header')
    </header> <!-- .cd-auto-hide-header -->

    <div id="page-wrapper">
            @yield('content')
    </div>

    <footer class="cd-auto-hide-footer" >      
        <nav class="cd-secondary-nav-footer">
            <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4 my-footer-col">
                        <ul>    
                            <li class="my-footer-col-title">聯絡我們</li>
                            <li class="my-footer-col-li">櫟舍文學餐廳 Rekisha</li>
                            <li class="my-footer-col-li">地址 台中市西區自立街6號</li>
                            <li class="my-footer-col-li">電話 (04)3704-6848</li>
                            <li class="my-footer-col-li"><a style="color: white;" href="https://www.facebook.com/Rekisha06/">Facebook 粉絲專頁</a></li>
                            <li class="my-footer-col-li"><a style="color: white;" href="#">意見回饋</a></li>
                            <li class="my-footer-col-li"><a style="color: white;" href="http://www.pu.edu.tw/">Located in【 靜宜大學 】</a></li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4 my-footer-col">
                        <ul>   
                            <li class="my-footer-col-title">網路創新服務設計</li>
                            <li class="my-footer-col-li">鍾韻茹</li>
                            <li class="my-footer-col-li">吳怡蓉</li>
                            <li class="my-footer-col-li">蔡妙欣</li>
                            <li class="my-footer-col-li">金正言</li>
                    </div>
                    <div class="footer-col col-md-4 my-footer-col">
                        <ul>    
                            <li class="my-footer-col-title">城市意象與行銷企劃</li>
                            <li class="my-footer-col-li">尤姿雅</li>
                            <li class="my-footer-col-li">李佳婍</li>
                            <li class="my-footer-col-li">黃佑歆</li>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container footer-copywrite">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Try Catch 2017
                    </div>
                </div>
            </div>
        </div>
        @yield('footer')
    </footer> 
    <!-- /#page-wrapper -->

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="{{ URL::asset('/js/main.js') }}"></script> <!-- Resource jQuery -->

</html>
