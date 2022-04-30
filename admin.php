<?php
require_once("sql.php");
if (empty($_SESSION['admin'])) plo("login.php");
$maizone = (!empty($_GET['do'])) ? $_GET['do'] : "banner";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>後台</title>

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
    /* body,
    html {
      height: 100%
    } */
    body {
      font-family: 'Noto Sans TC', sans-serif;
      /* background-image: url("images/overlay.png"), -webkit-linear-gradient(90deg, #b9e376 10%, #66ad8f 90%); */
      background-color: #aaa;
      /* background: -webkit-linear-gradient(90deg, #fff 10%, #fff 90%); */
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>

<body style="height:100vh" data-spy="scroll" data-target="#coffee-navbar">

  <?php
  include("navbar.php");
  ?>


  <!-- loading -->
  <!-- <div id="loading" class="position-relative">
      <div id="loading-text" class="h4 text-coffee position-absolute"></div>
      <img src="img/loading.svg" width="200" height="200">
    </div> -->

  <!-- 內容區 -->

  <div id="cover" style="display:none; ">
    <div id="coverr">
      <!-- <div style="width:10px;height:10px;background:#000;"> -->
      <a id="covera" onclick="cl('#cover')">X</a>
    <!-- </div> -->
      <div id="cvr"></div>
    </div>
  </div>


  <div id="content" class="h-100 container mt-6">
    <div>
      <li class="list-group-item text-center" style="background:#000;color:#fff;">後台管理<button style="margin:0px 0px 5px 920px;background:#444;color:#fff"class="btn" onclick="document.cookie='user=';location.replace('api.php?do=logout')">後台登出</button></li>

    </div>

    <!-- 後台顯示區 -->
    <div>


      <div class="input-group">
        <div class="input-group-prepend" id="button-addon3">
          <button class="btn btn-outline-dark" style="background-color:#fff;" type="button"><a class="nav-link" href="?do=banner">輪播圖管理</a></button>
          <button class="btn btn-outline-dark" style="background-color:#fff;" type="button"><a class="nav-link" href="?do=artucle">文章管理</a></button>
        </div>
      </div>

      <!-- </nav> -->


      <div class="bg-light col-12" style="width:100vw;">
        <!-- <h1 class="text-center">後台標題</h1> -->
        <?php
        include_once($maizone . ".php");
        ?>
      </div>
    </div>
    <!-- 後台顯示區 -->




  </div>


  <!--正中央-->
  <!-- <table width="100%">
		    <tbody>
			    <tr> -->
  <!-- 登出 -->
  <!-- <td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;" class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a></td>
					<td><button onclick="document.cookie='user=';location.replace('api.php?do=logout')" style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
				</tr>
			</tbody>
		</table>
	<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;"> -->
  <!-- atitle.php  -->
  <?php
  // include_once($maizone.".php");	
  ?>
  </div>

  <!-- /內容區 -->
</body>

<!-- JS LINK -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myjs.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

<!-- magnific-popup JS -->
<script src="js/jquery.magnific-popup.js"></script>

<!-- magnific-popup-single JS https://dimsemenov.com/plugins/magnific-popup/ -->
<script src="js/magnific-popup-single.js"></script>

<!-- scroll JS -->
<script src='js/jquery.easing.min.js'></script>
<script src="js/scrollpage.js"></script>

<!-- particles JS -->
<!-- <script  src="js/particles.js"></script>
<script  src="js/particles_app.js"></script> -->

<!-- wow JS -->
<script src="js/wow.js"></script>

<!-- loading -->
<!-- <script>
    $('#content').hide();
    $(window).on('load',function(){
      let loadingPerc = 0;
      let loading = setInterval(()=>{
        if(loadingPerc >= 100){
          $('#loading').fadeOut();
          $('#content').delay(600).fadeIn();
          clearInterval(loading);
        }
        else{
          loadingPerc += 50;
          $('#loading-text').text(loadingPerc + '%');
        }
      },50)
  
    })
</script> -->

<!-- 阻止導覽移置錨點 -->
<script>
  $('#tab-01,#tab-02,#tab-03,#tab-04').on('click', function(event) {
    event.preventDefault();
    $('html, body').stop();

  });
</script>

<!-- /JS LINK -->

</html>