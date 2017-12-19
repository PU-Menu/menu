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
  border-radius: 4px;
  background-color: grey;
  border: none;
  color: white;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 180px;
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
  padding-top: 10px;
  padding-bottom: 10px;
  opacity: 0.9;
  margin-top: 10px;
  margin-bottom: 30px;
  border-radius: 10px;
  font-size: 30px;
}

.article2{
  margin-top: 20px;
  opacity: 0.9;
  border-radius: 10px;
}

</style>

<body>

  <!-- Page Content -->
  
    <div class="container w3-center">
      <div class="row">
        <div class="col-md-12 w3-light-grey w3-animate-opacity article2">
          <h1 class="mt-5">「文學食旅，無所味懼」</h1>
        </div>

        <div class="col-md-12 w3-large w3-light-grey w3-animate-opacity article">

          <p>臺中自日治時期即為臺灣文壇的中心，從傳統文學社團櫟社、臺灣文社，開風氣之先，引領全臺，到新文學組織臺灣文藝聯盟及其相關文學刊物，乃至林獻堂所領導的臺灣文化協會，都以臺中為主要活動據點，而市區的中央書局不但是當時文學家、藝術家活動的根據地，也是新文化的傳播站；延續到戰後，臺中則是銀鈴會、笠詩社等本土文學社團的發跡地。以上史實，充分彰顯臺中作為臺灣文學發展中心的光榮傳統與重要地位，「文化城」之美名可謂其來有自。</p>
 
          <p>臺中文學館原為日治時期的警察宿舍，1932年落成。基於歷史建築之永續保存，呈現時代的精神與脈絡，記錄大臺中地區文學發展的軌跡，彰顯在地文學家的成就，臺中市政府文化局於2009年將其登錄為歷史建築，以「臺中文學館」為定位，2010年4月進行修復與活化再利用工程。館舍於2015年4月外觀修復完成，先行開放文學公園，同時進行內部展示工程的設計、佈置，2016年8月26日各館舍全面開放。</p>

          <p>臺中文學館全園區佔地約1,863坪，館舍共分6棟，包含常設展區、主題展區、兒童文學區、研習講堂、主題餐飲區及行政區。各館舍以展覽、研習、推廣為主要用途，透過多元活潑的展示手法及互動體驗，達到文學教育與文化休閒之目的。館舍因深具建築美學與歷史氛圍，已成為文化觀光的新亮點。</p>
        </div>

      </div>
    </div>

    <div class="w3-container w3-center w3-animate-opacity w3-display-bottomright">
      <a href="{{ url('/header') }}" id="item"><button class="button" style="vertical-align:middle" ><span>了解更多 </span></button></a>
    </div>
    
  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery_bigpicture.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap_bigpicture.bundle.min.js"></script>

  </body>

</html>