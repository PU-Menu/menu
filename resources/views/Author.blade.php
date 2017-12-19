@extends('header')
<html>
<STYLE TYPE="text/css">
input.gsc-input {
  font-size: 13px;
  outline: none;
}
input.gsc-search-button {
  font-size: 13px;
}
</STYLE>
<div class="left">
  <div id="searchcontrol">Loading...</div>
  <link href="http://www.google.com/uds/css/gsearch.css" type="text/css" rel="stylesheet" />
  <script src="http://www.google.com/uds/api?file=uds.js&v=1.0" type="text/javascript"></script>
  <script language="Javascript" type="text/javascript">
  // 載入 Google AJAX Search API (參數 1 - Google API 代碼, 參數 2 - 版本)
  //google.load("search", "1");
  google.load('search', '1', {language : 'zh-TW'});

  function OnLoad() {
      // 建立搜尋控制容器
      var searchControl = new google.search.SearchControl();
      // 新增搜尋器
      // 網頁搜尋
      //searchControl.addSearcher(new google.search.WebSearch());
      var webSearch = new google.search.WebSearch();
      webSearch.setSiteRestriction('http://blog.webgolds.com/');
      //webSearch.setUserDefinedLabel("網頁");
      searchControl.addSearcher(webSearch);
      
      //影片搜尋
      //searchControl.addSearcher(new google.search.VideoSearch());
      //部落格搜尋
      //searchControl.addSearcher(new google.search.BlogSearch());
      // 將搜尋結果顯示在網頁中 其中 searchcontrol 為 div (區塊) 名稱 此名稱必須相符
      searchControl.draw(document.getElementById("searchcontrol"));
      // 設定預設搜尋項目 即預設開啟時搜尋 Google
      
      searchControl.execute("");
  }
  //載入頁面時執行OnLoad函式
  google.setOnLoadCallback(OnLoad);
  </script>

  <div id="clear"></div>
</div>
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
          <h1 class="display-1">Author</h1>
          
        </div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <div class="container" id="fir">
      <div class="row">
        <div class="col-md-12">
          <p class="lead">
            <font size="7" class="">楊逵</font>（1906─1985） </p>
          <font size="5">
            <p class="">　</p> 本名楊貴，筆名楊逵、楊建文等，出生於臺南新化，1927年自日本返臺，投身文化運動與農民運動，1935年遷居臺中，至1985年辭世，總計入籍臺中五十年。楊逵創辦《一陽週報》，出版中、日文對照《中國文藝叢書》六輯，又任《和平日報》、《力行報》文藝版主編，鼓吹和平統一陣線。在臺中大肚山經營「東海花園」，自喻是「用鐵鍬把詩寫在大地上」。楊逵作品風格以寫實主義手法為主，擅用比喻與嘲諷，關照並批判現實，揭櫫一個公義和平的新世界， 作品有《鵝媽媽出嫁》、《壓不扁的玫瑰》、《綠島家書》、《樂天派》、《睜眼的瞎子》等，2001年中央研究院出版十四冊《楊逵全集》（第十四冊為《資料卷》）。
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
            <font size="7" class="">陳千武</font>（1937─）</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <font size="5">
            <p class="">本名陳武雄，另有筆名桓夫，南投名間人。 陳千武的文學創作包含幾個層面，戰前以詩為主，多集中於四○年代初期，有《徬徨 草笛》、《若櫻》、《花 詩集》三本詩集出版；六○年代後創作文類跨足詩、小說、兒童文學及論述，著有詩集《密林詩抄》、《不眠的眼》、《野鹿》、《剖伊詩稿―伊影集》、《陳千武詩集―現代中國 詩人》等。小說《情虜―短篇小說集》，以及兒童文學《富春的豐原》、《臺灣民間史話》、《臺灣原住民的母語傳統》、《臺灣民間故事》、《擦拭的旅行―檳榔大王遷徒記》、《謎樣的歷史―臺灣平埔族傳說》、《木瓜花詩集》、《荒埔中的傳奇》等。</p>
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
@section('footer')    
@stop 

 
</html>