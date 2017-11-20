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
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
    
    .logo{
        
    }
</style>



<div id="wrapper">
    <header class="cd-auto-hide-header" >
<!--
        <nav class="cd-primary-nav">
            <a href="#cd-navigation" class="nav-trigger">
                <span>
                    <em aria-hidden="true"></em>
                    Menu
                </span>
            </a> 

            <ul id="cd-navigation">
                
            </ul>
        </nav> 
-->
        <!-- 
         <a href="#0"><img src="{{ URL::asset('/logo.jpg') }}" alt="Logo" class="logo_img" width="80px" height="80px"></a>
-->         
        
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
    <!-- /#page-wrapper -->

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="{{ URL::asset('/js/main.js') }}"></script> <!-- Resource jQuery -->

</html>
