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
  <form action="{{ url('/add_orderSeat') }}" method="post">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="email">姓名:</label>
      <input type="text" class="form-control" id="text" placeholder="請輸入 姓名" name="name" required="此欄位為必填">
    </div>
    <div class="form-group">
      <label for="phone">連絡電話:</label>
<<<<<<< HEAD
      <input type="tel" class="form-control" placeholder="請輸入 電話號碼" name="phone" required="此欄位為必填">
=======
      <input type="number" class="form-control" id="phone" placeholder="請輸入 電話號碼" name="phone">
>>>>>>> yr
    </div>
    <div class="form-group">
      <label for="people">人數:</label>
      <input type="number" class="form-control"placeholder="請輸入 人數" name="num" required="此欄位為必填">
    </div>
    <div class="form-group">
      <label for="date">訂位日期:</label>
      <input type="date" class="form-control" id="date" name="order_date" required="此欄位為必填">
    </div>
    <div class="form-group">
      <label for="time">訂位時間:</label>
      <input type="time" class="form-control" id="time" name="order_time" required="此欄位為必填">
    </div>
    <div class="form-group OK">
      <label for="OK" style="color: red;">**位置將保留15分鐘**</label></br>
      <input type="checkbox" name="OK" required="此欄位為必填"><label>我知道了</label>
    </div>
    <input type="submit" class="btn btn-primary" value="送出" >
  </form>
  <!-- <button class="btn btn-primary" onclick="done()">送出</button> -->
</div>



</body>
</html>