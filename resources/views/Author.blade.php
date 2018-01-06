
<html>

 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css">
<style>

.display-1{
  text-align: center;
  position: relative;
    top:50px;
    font-size: 84px;
}

body{
  background-color:#292b2c;
}

</style>
</head>

<body>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-1">Author</h1>
          
        </div>
      </div>
    </div>
  </div>

      
@foreach ($authorData as $row)
  <div class="py-5">
    <div class="container" id="fir">
      <div class="row">
        <div class="col-md-12">
          <p class="lead">
            <font size="7" class="">{{$row->name}}</font>
          </p>
          <font size="5">
            <p class="">　
             <img src="{{ url('/img/'.$row->img) }}" style="float: right; margin: 10px;width: 300px;height:300px;"> 
              {!!$row->content!!}
            </p> 
            </font>
        </div>
      </div>
    </div>
  </div>
  <br>
@endforeach
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

 
</html>