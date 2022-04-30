<?php
require_once("sql.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>view</title>
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- fontawesome icon  https://fontawesome.com/-->
  <link rel="stylesheet" href="css/fontawesome.css">
  <!-- google font https://fonts.google.com/specimen/Noto+Sans+TC?selection.family=Noto+Sans+TC -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
  <!-- my style -->
  <link rel="stylesheet" href="css/MyStyle.css">
  <!-- magnific-popup https://codepen.io/hollow3d/pen/ENgvvX -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- magnific-popup-single https://dimsemenov.com/plugins/magnific-popup/ -->
  <link rel="stylesheet" href="css/magnific-popup-single.css">
  <!-- favicon 分頁標題小圖-->
  <link rel="shortcut icon" href="img/favicon.ico" />
  <!-- wow css -->
  <link rel="stylesheet" href="css/wow.css">

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

  <!-- loading -->
  <!-- <div id="loading" class="position-relative">
    <div id="loading-text" class="h4 text-coffee position-absolute"></div>
    <img src="img/loading.svg" width="200" height="200">
  </div> -->



  <!-- 內容區 -->
  <div id="content" class="h-100 container">

    <!-- 導行列 -->
    <?php
    include("navbar.php");
    ?>
    <!-- /導行列 -->


    <!-- 頁籤 -->
    <section id="news" class=" h-100 bg-coffee1 mt-3">
      <div class="container h-100 d-lg-flex flex-lg-column justify-content-lg-center text-center">
        <h3 class="text-center text-white py-4 mb-1"></h3>
        <div class="row">
          <div class="col-12">

            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="tab-01" data-toggle="tab" href="#news-01">搜尋結果</a>
                <!-- 搜尋 -->
                <form class="form-inline my-2 my-lg-0 ml-auto" method="post" action="searchview.php?">                  
                  <input class="form-control ml-auto" type="text" name="a" id="getsearch" value="">                  
                  <input class="btn btn-primary ml-auto" type="submit" value="搜尋" onclick="getvalue(selectart)">
                </form>
                <!-- /搜尋 -->
                <?php
                // print_r($_POST);
                $x = $_POST['a'];
                // echo $x;                
                ?>
              </div>
            </nav>
            <?php            
            ?>
            <!-- 頁籤 -->
            <div class="tab-content text-white overflow-auto" id="nav-tabContent" style="height: 500px;">
              <!-- 最新資訊 -->
              <div class="tab-pane fade show active " id="news-01">
                <?php
                $searchary = searchart("artucle",$x);
                // print_r($searchary);
                
                foreach ($searchary as $sea) {
                  $sea_id = $sea["id"];
                  $sea_type = $sea["artucle_type"];
                  $sea_img = "img/" . $sea["artucle_img"];
                  $sea_title = $sea["artucle_title"];
                  $sea_content_view = $sea["artucle_content_view"];
                ?>
                  <div class="media media-unt bg-secondary">
                    <div class="news-imgdiv">
                      <img src="<?= $sea_img ?>" class="news-img" alt="imgdie">
                    </div>
                    <div class="">
                      <h5 class="news-sort"><?= $sea_type ?></h5>
                      <h4 class="news-title mt-2 ml-1"><?= $sea_title ?></h4>
                      <br>
                      <p class="news-p m-0"><?= $sea_content_view ?><a href="artucleview.php?do=<?= $sea_id ?>" class="more">more</a></p>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
              <!-- /最新資訊 -->
 

            </div>
            <!-- /頁籤 -->
          </div>
        </div>
      </div>
    </section>

    <!-- /頁籤 -->

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

<!-- loading -->
<script>
  $('#content').hide();
  $(window).on('load', function() {
    let loadingPerc = 0;
    let loading = setInterval(() => {
      if (loadingPerc >= 100) {
        $('#loading').fadeOut();
        $('#content').delay(600).fadeIn();
        clearInterval(loading);
      } else {
        loadingPerc += 50;
        $('#loading-text').text(loadingPerc + '%');
      }
    }, 50)

  })
</script>

<!-- 阻止導覽移置錨點 -->
<script>
  $('#tab-01,#tab-02,#tab-03,#tab-04').on('click', function(event) {
    event.preventDefault();
    $('html, body').stop();

  });
</script>

<!-- 搜尋 -->
<script>
  function getvalue() {
    var $selectart = document.getElementById("search0").value;
    document.getElementById("test").innerHTML = $selectart;
    console.log($str);
  }
</script>

<!-- JS LINK -->

</html>