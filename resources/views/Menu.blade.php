
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css"> </head>

<style>

.text-center{
   vertical-align:middle;
   text-align:center;
   line-height:50px
   
}
.display-1 {
    /*position: relative;*/
   /* top:50px;*/
    /*margin-top: 150px;*/
    text-align: center;
    font-size: 84px;
}

.content {
        text-align: center;
        width: 80%;
        /*margin-top: 50px;*/
       /* margin-left: 150px;*/
        top:-400px;
    }
.subtitle{
    font-size: 45px;
    text-align: left;
}   
.img-fluid{
    width:400px;
    height:300px; 
}
</style>

<body>
 
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-1">Menu</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      
      <div class="row">
        <div class="col-md-12">
          <h1 class="subtitle">水果優格沙拉套餐</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <img class="img-fluid d-block" src="{{ URL::asset('/dish1.jpg') }}" width="400" height="300"  style="border:2px #ccc solid;padding:10px;">
        </div>
        
        <div class="col-md-8">
          <br>
          <p class="text-center">
            <h3 style="line-height: 50px;text-align:center;">
            炎炎夏日首選！清爽沙拉與新鮮水果，淋上酸甜優格醬，永不敗的完美搭配。<br> 
            *套餐含一杯飲品。
            </h3>
          </p>
        </div>
      </div>
    </a>
    </div>
  </div>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="subtitle">手作披薩餃套餐</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <img class="img-fluid d-block"  src="{{ URL::asset('/dish2.jpg') }}" width="400" height="300"  style="border:2px #ccc solid;padding:10px;">
        </div>
        <div class="col-md-8">
          <br>
          <p class="text-center">
            <h3 style="line-height: 50px;text-align:center;"> 
            職人每日手作，烤至金黃的披薩餃包裹滿滿餡料，飽足又不油膩，美味滿分。<br>
            *套餐含一杯飲品。
            </h3>
          </p>
        </div>
      </div>
    </div>
  </div>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>