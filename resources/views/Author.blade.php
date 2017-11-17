@extends('header')
<html>

<head><title>作家一覽</title></head>
@section('header')    
@stop
@section('content') 
<body>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css">
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-secondary">
            <font size="7">Author</font>
          </h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="btn-group">
            <a href="#fir" class="btn btn-primary active">琦君</a>
            <a href="#sec" class="btn btn-primary active">白萩</a>
            <a href="#thi" class="btn btn-primary active">利格拉樂‧阿女烏</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container" id="fir">
      <div class="row">
        <div class="col-md-12">
          <p class="lead">
            <font size="7" class="">琦君</font> (1917─2006）</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <img class="img-fluid d-block" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg"> </div>
        <div class="col-md-8">
          <font size="5">
            <p class="">　本名潘希真，浙江省永嘉縣人。浙江杭州之江大學中文系畢業，曾任司法行政部編審科長，歷任各校教職，包括中國文化學院副教授，中央大學、中興大學中文系教授，退休後曾旅居美國多年，專事寫作，2004年返臺定居。創作以散文及小說為主，兼及評論、兒童文學，重要作品有散文集《煙愁》、《三更有夢書當枕》、《桂花雨》、《水是故鄉甜》等三十餘本，以及小說集《菁姐》、《七月的哀傷》、《錢塘江畔》、《橘子紅了》等。</p>
          </font>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container" id="sec">
      <div class="row">
        <div class="col-md-12">
          <p class="lead">
            <font size="7" class="">白萩</font>（1937─）</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <img class="img-fluid d-block" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg"> </div>
        <div class="col-md-8">
          <font size="5">
            <p class="">本名何錦榮，臺中市人，省立臺中商職畢業，經營廣告美術設計公司。1955年發表新詩〈羅盤〉，獲得中國文藝協會第一屆新詩獎，此後即加入「現代派」。
              <br> 臺灣四大詩社現代詩、藍星、創世紀、笠他都有深厚淵源，先後參與，更是《笠》詩刊創刊者之一。詩風融合了表現主義、新即物主義及象徵主義的方法，能扎根鄉土，又能創造獨特的語言風格，兼有浪漫情懷及生命體驗，語言淺顯意象凸出，卓然有成。著有《蛾之死》、《風的薔薇》等詩集，有多本被譯為外國語言。</p>
          </font>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container" id="thi">
      <div class="row">
        <div class="col-md-12">
          <p class="lead">
            <font size="7">利格拉樂‧阿女烏</font>（1969─）</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <img class="img-fluid d-block" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg"> </div>
        <div class="col-md-8">
          <font size="5">
            <p class="" contenteditable="true">漢名高振蕙，屏東人，小學五年級搬至臺中，現居臺北。為當代原住民女作家。曾任多所院校之講師。利格拉樂‧阿女烏創作文類以散文為主，「以『原住民女性』的觀點，透過對家族（母親、外婆）生命史的溯源，以及族群同胞口耳相傳的故事紀錄。作品中並無艱澀的理論或抽象的敘事，平實的呈現原住民原始自然的文化風貌，淺白易讀，更能在了解族群間的差異之餘，進而學習對異文化的包容與尊重。與瓦歷斯‧諾幹致力於推廣原住民文化，編著有《臺灣原住民人文月曆》、《臺灣原住民人文年曆》」。其文章散見各報刊，集結出版為《誰來穿我織的美麗衣裳》、《穆莉淡：部落手扎》、《故事地圖》等書。</p>
          </font>
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