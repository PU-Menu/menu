<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1;maximum-scale=1.0; user-scalable=0;">
   <script src ="{{ URL::asset('/js/jquery-3.2.1.min.js') }}"> </script>
  <script src ="{{ URL::asset('/js/jquery.fancybox.min.js') }}"></script>
  <link rel ="stylesheet" type ="text/css" href ="{{ URL::asset('/css/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css"> </head>
  
<style>
/*JQuery*/
.animated-modal {
  max-width: 550px;
  border-radius: 4px;
  overflow: hidden;
  
  transform: translateY(-50px);
  transition: all .7s;
}

.animated-modal h2,
.animated-modal p {
  transform: translateY(-50px);
  opacity: 0;
  
  transition-property: transform, opacity;
  transition-duration: .4s;
}

/* Final state */
.fancybox-slide--current .animated-modal,
.fancybox-slide--current .animated-modal h2,
.fancybox-slide--current .animated-modal p {
  transform: translateY(0);
  opacity: 1;
}

/* Reveal content with different delays */
.fancybox-slide--current .animated-modal h2 {
  transition-delay: .1s;
}

.fancybox-slide--current .animated-modal p {
  transition-delay: .3s;
}

/*end*/
.text-center{
   vertical-align:middle;
   text-align:center;
   line-height:50px
   
}
.display-1 {
    text-align: center;
    font-size: 84px;
}

.content {
        text-align: center;
        width: 80%;
        top:-400px;
    }
.subtitle{
    font-size: 45px;
    text-align: left;
}   
.img-fluid{
    width:340px;
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
<?php $i=0; ?>
@foreach($menuData as $row)

  <div class="py-5">
    <div class="container">
      <div class="grid">
        <a data-fancybox data-src="#modal{{++$i}}" href="javascript:;"  class="btn">
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <h1 class="subtitle">{{ $row->menu_name }}</h1>
            </div>
          </div>
          <div class="row">

            <div class="col-xs-12 col-md-4">
              <img align="center" class="d-block" src="{{url('/img/'.$row->img)}}" width="350" height="250"  style="border:2px #ccc solid;padding:10px;">
            </div>
            
            <div class="col-xs-12 col-md-8" >
              <br>
              {!! $row->menu_content !!}
            </div>
          </div>
        </a>
        <div style="display: none" id="modal{{$i}}" max-width="600px";>
          <h1 style="line-height: 50px">{{ $row->menu_name }}</h1>
          <br>
          <img src="{{url('/img/'.$row->img)}}" width="400" height="300"  style="border:2px #ccc solid;padding:10px;" />
          <br>
          {!! $row->menu_content !!}
        </div>
      </div>
    </div>
  </div>
@endforeach
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 
</body>
