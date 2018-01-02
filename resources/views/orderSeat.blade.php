<!DOCTYPE html>
<html lang="en">
<head>
  <title>訂位</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
    function done(){
      var r = confirm("謝謝 已收到您的訂位資料!");
      if (r == true) {
        document.location.href="{{ url('/header') }}";
      } else {
      }
    }

</script>

  <style>
    body{
      margin-bottom: 20px;
      margin-left: 20px;
      margin-right: 20px;
      background-color: #fceabc;
      font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    }

    .OK{
      position:relative;
      left: 20px;
    }
  </style>

</head>


<body>

<div class="container">
  <h2>訂位</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="email">姓名:</label>
      <input type="email" class="form-control" id="email" placeholder="請輸入 姓名" name="email">
    </div>
    <div class="form-group">
      <label for="phone">連絡電話:</label>
      <input type="tel" class="form-control" id="phone" placeholder="請輸入 電話號碼" name="phone">
    </div>
    <div class="form-group">
      <label for="people">人數:</label>
      <input type="number" class="form-control" id="people" placeholder="請輸入 人數" name="people">
    </div>
    <div class="form-group">
      <label for="date">訂位日期:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
      <label for="time">訂位時間:</label>
      <input type="time" class="form-control" id="time" name="time">
    </div>
    <div class="form-group OK">
      <label for="OK" style="color: red;">**位置將保留15分鐘**</label></br>
      <input type="checkbox" name="OK"><label>我知道了</label>
    </div>
  </form>
  <button class="btn btn-primary" onclick="done()">送出</button>
</div>



</body>
</html>