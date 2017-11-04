<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <title>Document</title>
</head>
<style>
    html, body {
                background-color: #BEBEBE;
                color: #CAFFFF;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
            }
    .header 
    {
        background-color: #AAAAAA;
        height: 50px;
        /* padding-right:90px;
        padding-top:25px;
        padding-bottom: 25px; */
    }
    .sign
    {
        position: relative;
        text-align: right;
        
        right: 90px;
    }
    .form-inline{
        margin: 20px;
    }
    .btn-primary{
        position: relative;
        left:78%;
        
    }
</style>
<body>
    <div class="form-inline">
            <button type="button" class="btn btn-default" style="">
                <a href="{{ url('/') }}" style="color:black">HomePage</a>
            </button>
            <button type="button" class="btn btn-primary">
                <a href="{{ url('/add_menu') }}" style="color:white">Add</a>
            </botton>
            <button type="button" class="btn btn-primary">
                <a href="{{ url('/menu_list') }}" style="color:white">Menu</a>
            </botton>
        @yield('header')   
    </div>

        @yield('content')

</body>
</html>