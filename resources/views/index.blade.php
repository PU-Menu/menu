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

  <title>櫟舍文學餐廳</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap_bigpicture.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/the-big-picture.css" rel="stylesheet">

</head>

<style>

.button {
  display: inline-block;
  border-radius: 10px;
  background-color:  #6d9351;
  border: none;
  color: black;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.article{
  margin-top: 30px;
  opacity: 0.9;
  border-radius: 5px;
  font-size: 40px;
}

body{
  font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
}

</style>

<body>

  <!-- Page Content -->
  
    <div class="container w3-display-middle">
      <div class="row">
        <div class="col-md-3">
          
        </div>
        <div class="col-md-12 w3-center w3-animate-opacity article">
          文學食旅，無所<b>味</b>懼 
          <h2>櫟社文學餐廳</h2>
        </div>
        <div class="col-md-3">
          
        </div>
      </div>

      <div class="col-md-12 w3-container w3-center w3-animate-opacity">
      <a href="{{ url('/header') }}" id="item"><button class="button" style="vertical-align:middle" ><span>瞭解更多？ </span></button></a>
    </div>

    </div>

    
    
  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery_bigpicture.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap_bigpicture.bundle.min.js"></script>

  </body>

</html>