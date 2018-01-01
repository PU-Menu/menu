
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
  @foreach ($allData as $row) 
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="subtitle">{{ $row->menu_name }}</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <img class="img-fluid d-block" src="{{ url('/img/'.$row->img )}}" width="400" height="300"  style="border:2px #ccc solid;padding:10px;">
        </div>
        
        <div class="col-md-8">
          <br>
            {!! $row->menu_content !!}
        </div>
      </div>
    </a>
    </div>
  </div>
  @endforeach
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

