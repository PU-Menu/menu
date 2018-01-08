

<style>
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;

    }
    
    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        
    }
    .subtitle{
  		font-size: 2em;

	}
    .content {
        text-align: center;
        margin-top: 150px;
        margin-bottom:50px;
         width:80%;
       
    }
    
    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    
    .links > a:hover{
        color: #45CB85;
    }

    .m-b-md {
        margin-bottom: 20px;
    }

    .address {
        font-size: 20px;
        margin-bottom:20px;
    }
    .display-1{
	  text-align: center;
	  position: relative;
	    
	    font-size: 84px;
	}
	.col-md-6{
		padding: 20px;
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
        <table align="center" valign="center">

        	
        
        <tr>
        	<div class="col-md-6 ">
        	<td >
          <a href="{{ url('/dish1') }}" id="item">
          <img class="img-fluid d-block " src="{{ URL::asset('/dish01.jpg') }}" width= "350" border="5">
          <h1 class="subtitle">梅干蒸肉捲</h1> </a>
        </td>
        </div>
    	

    	
        <div class="col-md-6">
          <td>
          <a href="{{ url('/dish2') }}" id="item">
          <img class="img-fluid d-block" src="{{ URL::asset('/dish02.jpg') }}" width= "350"/>
          <h1 class="subtitle">野菜鹹派</h1></a>
          </td>
        </div>
    	

    	</tr>

    	</table>
      </div>
    </div>
  </div>
</body>

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
            <p class="">　本名楊貴，筆名楊逵、楊建文等，出生於臺南新化，1927年自日本返臺，投身文化運動與農民運動，1935年遷居臺中，至1985年辭世，總計入籍臺中五十年。楊逵創辦《一陽週報》，出版中、日文對照《中國文藝叢書》六輯，又任《和平日報》、《力行報》文藝版主編，鼓吹和平統一陣線。在臺中大肚山經營「東海花園」，自喻是「用鐵鍬把詩寫在大地上」。楊逵作品風格以寫實主義手法為主，擅用比喻與嘲諷，關照並批判現實，揭櫫一個公義和平的新世界， 作品有《鵝媽媽出嫁》、《壓不扁的玫瑰》、《綠島家書》、《樂天派》、《睜眼的瞎子》等，2001年中央研究院出版十四冊《楊逵全集》（第十四冊為《資料卷》）。</p> 
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
 </body> 

<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
        	<h1 class="display-1">
            Location
        	</h1>
        </div>
        <div class="address">
            地址 : 台中市西區自立街6號
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4361.154448640293!2d120.6704144202575!3d24.14029948274557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d0c11936e59%3A0x138ae6b161c8831!2z6Ie65Lit5paH5a246aSo!5e0!3m2!1szh-TW!2stw!4v1509992270274" width="100%" height="450px"  frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
</body>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>