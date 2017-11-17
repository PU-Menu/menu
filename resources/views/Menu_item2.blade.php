@extends('header')
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css">
<style>
.display-1 {
    position: relative;
    top:50px;
    text-align: center;
}
.subtitle{
  font-size: 2em;
}
</style>
</head>
@section('header')    
@stop
@section('content')
<body>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-1">野菜鹹派
            <br>
          </h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="img-fluid d-block" src="{{ URL::asset('/dish02.jpg') }}">
        </div>
        <div class="col-md-6">
           <h1 class="subtitle">菜色介紹</h1>
           <p class=""><h4>採摘野菜，熬煮成粥</h4></p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="subtitle">作家故事</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="">楊逵定居台中50年，自1920年代末積極參與「台灣文化協會」和「台灣農民組合」。當時的台中是文化運動的核心場域，楊逵開闢的「首陽農園」啟蒙了無數人，「野菜宴」即誕生於此。青年們到農園暢聊藝文及時局，排練戲劇，肚子餓了，楊逵的妻子葉陶進園採摘野菜，熬煮成粥；容器不足，楊逵則把花盆洞口糊上，清洗乾淨，替代碗碟。<br>
<br>
普羅文學家的簡樸與盛情，眾人共勞共食的快樂，20年後，野菜宴的故事經楊逵女兒楊素絹的書寫，被《新生副刊》刊載而流傳。楊逵曾說：「能源在我身，能源在我心。冰山底下過活70年，雖然到處碰壁，卻未曾凍僵。」櫟舍設計「楊逵的野菜鹹派」，品嘗野地特有的韌性及生命力；耕耘的甘苦，偕行的情意，都在碗碟中解凍回暖。</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          
          <h1 class="subtitle"><a href="{{ url('/author') }}">作家連結</a></h1>
          
        </div>
      </div>
      
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
@stop 
</html>