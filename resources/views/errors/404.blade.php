<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Oops!</title>

<style type="text/css">

</style>
</head>

<body>
  <div class="py-5">
    <div class="w3-container w3-animate-opacity w3-center">
      <div class="row">
      <div class="col-md-12 col-sm-12">
        <img src="{{ URL::asset('/error.jpg') }}">
        <div class="text-center inner-top">
          <h1>抱歉，您似乎連到錯誤的頁面</h1>
        </div>        

        <div class="text-center inner-top col-md-12">
          <div class="col-md-2 col-sm-2"></div>
          <div class="col-md-8 col-sm-8" style="padding-top: 5px;">
            <h3><a href="{{ url('/') }}">您可能想看看我們的首頁！</a></h3>
          </div>
          <div class="col-md-2 col-sm-2"></div>
        </div>
      </div>
  </div>
</body>
</html>