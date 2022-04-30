<?php
require_once('sql.php');
if (!empty($_SESSION['admin'])) {
  plo("admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>login</title>
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- fontawesome icon  https://fontawesome.com/-->
  <link rel="stylesheet" href="css/fontawesome.css">
  <!-- google font https://fonts.google.com/specimen/Noto+Sans+TC?selection.family=Noto+Sans+TC -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
  <!-- magnific-popup https://codepen.io/hollow3d/pen/ENgvvX -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- magnific-popup-single https://dimsemenov.com/plugins/magnific-popup/ -->
  <link rel="stylesheet" href="css/magnific-popup-single.css">
  <!-- favicon 分頁標題小圖-->
  <link rel="shortcut icon" href="img/favicon.ico" />
  <!-- wow css -->
  <link rel="stylesheet" href="css/wow.css">
  <!-- my style -->
  <link rel="stylesheet" href="css/MyStyle.css">
  <style>
    body{
        height: 100vh;
        background:#fff url(img/illust_011_1920x12002.jpg)center center fixed no-repeat;
    }
    #main{
        border: 5px double rgba(20, 20, 20, 0.5);
        background:rgba(119, 119, 119, 0.9);
    }
</style>
</head>

<body style="height:100vh">





  <!-- 內容區 -->
  <div id="content" class="h-100 container">


    <?php
    include("navbar.php")
    ?>
    <div id="main" class="container login_main mt-10">
      <h3 style="text-align:center;color:#fff" class="mt-2">管理登入</h3>
      <form method="post" enctype="multipart/form-data" action="api.php?do=check" class="form">
        <div class="form-group row">
          <label for="inputAcc" class="col-sm-2 col-form-label text-white">帳號</label>
          <div class="col-sm-10">
            <input type="text" class="form-control " id="inputAcc" placeholder="Account" name="acc">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPwd" class="col-sm-2 col-form-label text-white">密碼</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPwd" placeholder="Password" name="pwd">
          </div>
        </div>
        <div style="text-align:center">
          <input class="btn btn-primary" type="submit" value="登入">
          <!-- <input class="btn btn-primary" type="button" value="登入" onclick="location.href='admin.php'">         -->
          <input class="btn btn-danger" type="button" value="取消" onclick="location.href='index.php'">
        </div>
        <!-- <input class="btn btn-danger" type="reset" value="取消"> -->
      </form>
    </div>

    <!-- <form method="post" action="api.php?do=check">
					<p class="t botli">管理員登入區</p>
					<p class="cent">帳號 ： <input name="acc" autofocus="" type="text"></p>
					<p class="cent">密碼 ： <input name="pwd" type="password"></p>
					<p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
				</form> -->



    <!-- /內容區 -->
  </div>


</body>
<!-- JS LINK -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- magnific-popup JS -->
<script src="js/jquery.magnific-popup.js"></script>

<!-- magnific-popup-single JS https://dimsemenov.com/plugins/magnific-popup/ -->
<script src="js/magnific-popup-single.js"></script>

<!-- scroll JS -->
<script src='js/jquery.easing.min.js'></script>
<script src="js/scrollpage.js"></script>

<!-- particles JS -->
<script src="js/particles.js"></script>
<script src="js/particles_app.js"></script>

<!-- wow JS -->
<script src="js/wow.js"></script>


</html>