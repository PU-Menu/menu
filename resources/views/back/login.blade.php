<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Blog Login</title>
        <style type="text/css">
        .fail {width:200px; margin: 20px auto; color: red;}
        form {font-size:16px; color:#999; font-weight: bold;}
        form {width:160px; margin:20px auto; padding: 10px; border:1px dotted #ccc;}
        form input[type="text"], form input[type="password"] {margin: 2px 0 20px; color:#999;}
        form input[type="submit"] {width: 100%; height: 30px; color:#666; font-size:16px;}
        </style>
    </head>
    <body>
        <center>
            <h1>後台登入</h1>
            <form action="{{ url('/back_login') }}" method="post">
                {{ csrf_field() }}
                帳號:<input type="text" name="account">
                密碼:<input type="password" name="password">
                <input type="submit" value="登入">
            </form>
        </center>
    </body>
</html