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
    <div class="container" margin-top="280px">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-1">梅干蒸肉捲
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
          <img class="img-fluid d-block" src="{{ URL::asset('/dish01.jpg') }}">
        </div>

        <div class="col-md-6">
          <h1 class="subtitle">菜色介紹</h1>

          <p class=""><h4>結合義式料理Braciole肉捲的作法和本土內餡，烹調肉捲，須槌拍肉料，放上食材，捲起肉片，紮牢棉線，進鍋油煎——肉片從墊底的下層</h4></p>
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
          <p class="">以「印尼薑黃飯」表現陳千武的太平洋戰火經驗。薑黃是印尼女人生產、孕育必吃的料理，點出陳千武作品中恆常的生死叩問，而金色更如陳千武的鮮明性格。<br>
<br>
「陳千武文學套餐」中的主菜梅干蒸肉捲，結合義式料理Braciole肉捲的作法和本土內餡，來傳達陳千武這「跨越語言的一代」：不同文化共存共榮、互相增色，卻也經常受到族群身分的綑綁。面對戰後轉換的煎熬，陳千武改造中文成獨樹一格的樣子：「讓語言來找我們！」烹調肉捲，須槌拍肉料，放上食材，捲起肉片，紮牢棉線，進鍋油煎——肉片從墊底的下層，躍為包容一切的表層，內核盡是濃郁的台灣味，心懷家鄉的風土詩。<br>
<br>
木舟樣貌的肉捲，如同一艘向外駛出的船。中學的陳千武懷抱明星夢，瞞著家人偷抵日本，青年的他非志願赴南洋參戰，中年以後創立的《笠詩社》，突破戒嚴的封閉環境，將台灣現代詩頻頻送往日本及韓國等國家。<br>
<br>

最後以「紅豆湯」收尾，這是陳千武生前最喜歡的食物，帶我們回到他兒童般率直天真的本性。</p>
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
 <footer>
  <h5 class="text-right">
    資料來源：https://www.openbook.org.tw/article/20170815-701
  </h5>
</footer>
@stop 
</html>