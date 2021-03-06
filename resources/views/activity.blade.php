
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <style>
  .display-1{
    text-align: center;
    position: relative;
      top:50px;
      font-size: 84px;
  }
  .content{
    margin-top: 100px;
    font-size: 50px;
  }

  .content2{
    font-size: 30px;
  }

  .button {
  display: inline-block;
  border-radius: 4px;
  border: none;
  color: black;
  background-color: white;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 180px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}



</style>

<title>活動快報</title>

<body>
  <div class="py-5">
    <div class="w3-container w3-animate-opacity content2">
      <div class="row">

      <div class="col-md-8 col-sm-8 col-xs-8">

        <section>
          <div class="text-center inner-top">
            ～最新活動消息～
          </div>
        </section>

        <table class="table table-striped" style="background-color:#FFF">
        <thead>
          <th colspan="3" class="success"></th>
        </thead> 
        @foreach($activityData as $row)                                                                     
          <tr>
          <!-- 顯示分類圖片 -->
            <td style="text-align: center;" >
              <img src="{{ URL::asset('/leaf.png') }}">
            </td>
            <!-- 顯示活動標題、內容 -->
            <td style="font-size:20px;"> 
              <a href="{{ $row->activity_content }}" target="_blank" id="item" >
                {{ $row->title }}
              </a>
            </td> 
            <!-- 顯示發表日期 -->
            <td style="font-size:20px;">
              {{ $row->created_at }}
            </td>
          </tr>
        @endforeach
        </table>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-4">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRekisha06%2F&tabs=timeline%2Cevents%2Cmessages&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><p><br>
      </div>

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>