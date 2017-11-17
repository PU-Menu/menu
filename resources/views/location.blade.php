@extends('header')
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
        width: 80%;
        margin-top: 150px;
        margin-bottom:50px;
    }

    .title {
        font-size: 84px;
        /*color: #0FFF95;*/
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .links > a:hover{
        color: #45CB85;
    }

    .m-b-md {
        margin-bottom: 20px;
    }

    .address {
        font-size: 20px;
        margin-bottom:20px;
    } 

    
</style>
<body>
@section('header')
    
@stop

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Location
        </div>
        <div class="address">
            地址 : 台中市西區自立街6號
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4361.154448640293!2d120.6704144202575!3d24.14029948274557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d0c11936e59%3A0x138ae6b161c8831!2z6Ie65Lit5paH5a246aSo!5e0!3m2!1szh-TW!2stw!4v1509992270274" width="100%" height="450px"  frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
@stop
</body>
