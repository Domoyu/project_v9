<?php
require_once("sql.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>United</title>

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
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/MyStyle.css">
<style>
#b1{
  /* filter:blur(5px); */
}
.font1{
  font-family: 'Noto Sans TC', sans-serif,Bold;
  color: #888;
  border: 2px solid #fff;
}
.font2{
  font-family: 'Noto Sans TC', sans-serif,Bold;
  /* color: #888; */
  /* border: 2px solid #fff; */
}
</style>
</head>

<body  data-spy="scroll" data-target="#coffee-navbar" >
<div id="b1" style="background:#fff url(img/illust_068_1920x12002.jpg)center center fixed no-repeat;">
<!-- filter:blur(5px) -->

  <!-- loading -->
  <!-- <div id="loading" class="position-relative">
    <div id="loading-text" class="h4 text-coffee position-absolute"></div>
    <img src="img/loading.svg" width="200" height="200">
    <img class="wow bounceOut" src="img/Unitedicon.png" width="200">
  </div> -->


  
  <!-- 內容區 -->
  <div id="content" class="h-100 container">

    <!-- particles.js -->
    <!-- <div id="particles-js" class="position-fixed h-100 w-100" style="z-index:1029;pointer-events: none;"></div> -->
    <!-- /particles.js -->


    <?php
    include("navbar.php");
    ?>
  <video class="mt-6" width="1140px" autoplay controls loop>
  <source src="video/G24.mp4" type="video/mp4">
  </video>
    <!-- 公會介紹 -->
    <!-- <section id="section02" class=" h-100 bg-unt1 mt-6">
      <div class="">
        <h1 class="text-center text-dark py-4 mb-5">United</h1>
        <div class="row">
          
          <div class="col-4 ml-auto mr-auto mt-6"> -->
            
              

              
              <!-- <div class="col-2 mt-6 ml-auto mr-auto">
                <img src="img/mabicons.png" class="card-img-top" alt="United">
              </div> -->
              <!-- <div class="card-body d-flex flex-column text-center text-white"> -->
                <!-- <h5 class="card-title">瑪-安服</h5> -->
                <!-- <p class="card-text flex-grow-1">United</p> -->
              <!-- </div> -->
            
          <!-- </div>          
        </div>
      </div>
    </section> -->
    <!-- /公會介紹 -->



  <!-- <h1 class="display-4">Hello, world!</h1> -->
  <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> -->
  <!-- <hr class="my-4"> -->
  <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
  <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->



    <!-- 圖片輪播 -->
    <div class="container bg-unt1 mb-5 mt-6">
      <section id="banner" class="h-100">
        <div id="coffee-carousel" class="carousel slide h-100 carousel-fade" data-ride="carousel" data-interval="5000" style="border:5px solid #888">
          <div id="123" class="carousel-inner h-100">

            <?php
            $all = select("banner", "display=1");
            foreach ($all as $row) {
              $banner_ary = "img/" . $row['banner_img'];



            ?>

              <div class="carousel-item">
                <img src="<?= $banner_ary ?>" class="d-block w-100" style="height:400px">
              </div>
            <?php
            }
            ?>

          </div>

          <a class="carousel-control-prev" href="#coffee-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#coffee-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
      </section>
    </div>
    <!-- /圖片輪播 -->

    <!-- 最新消息 -->
    <section id="news" class=" h-100 bg-coffee1">
      <div class="container h-100 d-lg-flex flex-lg-column justify-content-lg-center text-center">
        <h3 class="text-center text-white py-4 mb-1 font1"><a href="news.php">新聞快報</a></h3>
        <div class="row">
          <div class="col-12">

            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="tab-01" data-toggle="tab" href="#news-01">最新消息</a>
                <a class="nav-item nav-link" id="tab-02" data-toggle="tab" href="#news-02">公會資訊</a>
                <a class="nav-item nav-link" id="tab-03" data-toggle="tab" href="#news-03">遊戲資訊</a>
                <a class="nav-item nav-link" id="tab-04" data-toggle="tab" href="#news-04">遊戲攻略</a>
              </div>
            </nav>

            <div class="tab-content text-white overflow-auto" id="nav-tabContent" style="height: 500px;">
              <!-- 1 -->
              <?php
              $all = selectartall("artucle", 1);
              ?>
              <div class="tab-pane fade show active " id="news-01">
                <div class="row  justify-content-around">


                  <div class="card  bg-info col-3 bg-unt2" style="border:3px solid #fff;margin:5px">
                    <img src="img/<?= $all[0][7] ?>" class="card-img-top img-unt mt-3" style="width: 200px;height:200px; margin:auto" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white"><?= mb_substr($all[0][4], 0, 20) ?></h5>
                      <p class="card-text text-white"><?= mb_substr($all[0][6], 0, 30) ?></p>
                      <a href="artucleview.php?do=<?= $all[0][0] ?>" class="btnu btn-unt d-flex justify-content-end">more</a>
                    </div>
                  </div>

                  <div class="card  bg-transparent col-3 bg-unt2" style="border:3px solid #fff;margin:5px">
                    <img src="img/<?= $all[1][7] ?>" class="card-img-top img-unt mt-3" style="width: 200px;height:200px; margin:auto" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white"><?= mb_substr($all[1][4], 0, 20) ?></h5>
                      <p class="card-text text-white"><?= mb_substr($all[1][5], 0, 30) ?></p>
                      <a href="artucleview.php?do=<?= $all[1][0] ?>" class="btnu btn-unt d-flex justify-content-end">more</a>
                    </div>
                  </div>

                  <div class="card  bg-transparent col-3 bg-unt2" style="border:3px solid #fff;margin:5px">
                    <img src="img/<?= $all[2][7] ?>" class="card-img-top img-unt mt-3" style="width: 200px;height:200px; margin:auto" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white"><?= mb_substr($all[2][4], 0, 20) ?></h5>
                      <p class="card-text text-white"><?= mb_substr($all[2][5], 0, 30) ?></p>
                      <a href="artucleview.php?do=<?= $all[2][0] ?>" class="btnu btn-unt d-flex justify-content-end">more</a>
                    </div>
                  </div>

                </div>
              </div>
              <!-- 1 -->

              <!-- 2 -->
              <?php
              $guild = selectartguild("artucle", 1);
              ?>
              <div class="tab-pane fade" id="news-02">
                <div class="row  justify-content-around">



                  <div class="card bg-transparent col-3 bg-unt2" style="border:3px solid #fff;margin:5px">
                    <img src="img/<?= $guild[0][7] ?>" class="card-img-top img-unt mt-3" style="width: 200px;height:200px; margin:auto" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white"><?= mb_substr($guild[0][4], 0, 20) ?></h5>
                      <p class="card-text text-white"><?= mb_substr($guild[0][5], 0, 30) ?></p>
                      <a href="artucleview.php?do=<?= $guild[0][0] ?>" class="btnu btn-unt d-flex justify-content-end">more</a>
                    </div>
                  </div>

                  <div class="card bg-transparent col-3 bg-unt2" style="border:3px solid #fff;margin:5px">
                    <img src="img/<?= $guild[1][7] ?>" class="card-img-top img-unt mt-3" style="width: 200px;height:200px; margin:auto" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white"><?= mb_substr($guild[1][4], 0, 20) ?></h5>
                      <p class="card-text text-white"><?= mb_substr($guild[1][5], 0, 30) ?></p>
                      <a href="artucleview.php?do=<?= $guild[1][0] ?>" class="btnu btn-unt d-flex justify-content-end">more</a>
                    </div>
                  </div>

                  <div class="card bg-transparent col-3 bg-unt2" style="border:3px solid #fff;margin:5px">
                    <img src="img/<?= $guild[2][7] ?>" class="card-img-top img-unt mt-3" style="width: 200px;height:200px; margin:auto" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white"><?= mb_substr($guild[2][4], 0, 20) ?></h5>
                      <p class="card-text text-white"><?= mb_substr($guild[2][5], 0, 30) ?></p>
                      <a href="artucleview.php?do=<?= $guild[2][0] ?>" class="btnu btn-unt d-flex justify-content-end">more</a>
                    </div>
                  </div>


                </div>
              </div>
              <!-- 2 -->

              <!-- 3 -->
              <?php
              $game_news = selectartgamenews("artucle", 1);
              ?>
              <div class="tab-pane fade" id="news-03">
                <div class="row  justify-content-around">

                  <div class="card bg-transparent col-3 bg-unt2" style="border:3px solid #fff;margin:5px">
                    <img src="img/<?= $game_news[0][7] ?>" class="card-img-top img-unt mt-3" style="width: 200px;height:200px; margin:auto" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white"><?= mb_substr($game_news[0][4], 0, 20) ?></h5>
                      <p class="card-text text-white"><?= mb_substr($game_news[0][5], 0, 30) ?></p>
                      <a href="artucleview.php?do=<?= $game_news[0][0] ?>" class="btnu btn-unt d-flex justify-content-end">more</a>
                    </div>
                  </div>

                  <div class="card bg-transparent col-3 bg-unt2" style="border:3px solid #fff;margin:5px">
                    <img src="img/<?= $game_news[1][7] ?>" class="card-img-top img-unt mt-3" style="width: 200px;height:200px; margin:auto" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white"><?= mb_substr($game_news[1][4], 0, 20) ?></h5>
                      <p class="card-text text-white"><?= mb_substr($game_news[1][5], 0, 30) ?></p>
                      <a href="artucleview.php?do=<?= $game_news[1][0] ?>" class="btnu btn-unt d-flex justify-content-end">more</a>
                    </div>
                  </div>

                  <div class="card bg-transparent col-3 bg-unt2" style="border:3px solid #fff;margin:5px">
                    <img src="img/<?= $game_news[2][7] ?>" class="card-img-top img-unt mt-3" style="width: 200px;height:200px; margin:auto" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white"><?= mb_substr($game_news[2][4], 0, 20) ?></h5>
                      <p class="card-text text-white"><?= mb_substr($game_news[2][5], 0, 30) ?></p>
                      <a href="artucleview.php?do=<?= $game_news[2][0] ?>" class="btnu btn-unt d-flex justify-content-end">more</a>
                    </div>
                  </div>


                </div>
              </div>
              <!-- 3 -->

              <!-- 4 -->
              <?php
              $game_strategy = selectartgamestrategy("artucle", 1);
              ?>
              <div class="tab-pane fade" id="news-04">
                <div class="row  justify-content-around">

                  <div class="card bg-transparent col-3 bg-unt2" style="border:3px solid #fff;margin:5px">
                    <img src="img/<?= $game_strategy[0][7] ?>" class="card-img-top img-unt mt-3" style="width: 200px;height:200px; margin:auto" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white"><?= mb_substr($game_strategy[0][4], 0, 20) ?></h5>
                      <p class="card-text text-white"><?= mb_substr($game_strategy[0][5], 0, 30) ?></p>
                      <a href="artucleview.php?do=<?= $game_strategy[0][0] ?>" class="btnu btn-unt d-flex justify-content-end">more</a>
                    </div>
                  </div>

                  <div class="card bg-transparent col-3 bg-unt2" style="border:3px solid #fff;margin:5px">
                    <img src="img/<?= $game_strategy[1][7] ?>" class="card-img-top img-unt mt-3" style="width: 200px;height:200px; margin:auto" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white"><?= mb_substr($game_strategy[1][4], 0, 20) ?></h5>
                      <p class="card-text text-white"><?= mb_substr($game_strategy[1][5], 0, 30) ?></p>
                      <a href="artucleview.php?do=<?= $game_strategy[1][0] ?>" class="btnu btn-unt d-flex justify-content-end">more</a>
                    </div>
                  </div>

                  <div class="card bg-transparent col-3 bg-unt2" style="border:3px solid #fff;margin:5px">
                    <img src="img/<?= $game_strategy[2][7] ?>" class="card-img-top img-unt mt-3" style="width: 200px;height:200px; margin:auto" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white"><?= mb_substr($game_strategy[2][4], 0, 20) ?></h5>
                      <p class="card-text text-white"><?= mb_substr($game_strategy[2][5], 0, 30) ?></p>
                      <a href="artucleview.php?do=<?= $game_strategy[2][0] ?>" class="btnu btn-unt d-flex justify-content-end">more</a>
                    </div>
                  </div>

                </div>
              </div>
              <!-- 4 -->

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- 最新消息 -->
    <!-- footer -->
    <footer id="footer" class="bg-coffeenav py-4 mt-8">
      <div class="contrainer-fluid d-flex justify-content-center">
        <ul class="list-unstyle text-white d-flex flex-lg-row bg-coffee3">
        <lh class="ml-lg-8 font2"><a href="https://forum.gamer.com.tw/C.php?bsn=7422&snA=236436&tnum=9&subbsn=10"><i class="far fa-comment-dots">聯絡我們</i></a></lh>
        
          <!-- <lh class="ml-lg-8"><i class="fas fa-map-marker-alt">公會石位置：杜巴頓星月門旁</i></lh> -->
          <!-- <lh class="ml-lg-4"><i class="fas fa-clock"></i></lh> -->
          <!-- <lh class="ml-lg-4 mr-lg-auto"><i class="fas fa-phone-alt"></i></lh> -->
          <!-- <lh class="ml-lg-4">Design by</lh> -->
        </ul>
      </div>
    </footer>
    <!-- footer -->
















  </div>
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
<!-- <script  src="js/particles.js"></script>
<script  src="js/particles_app.js"></script> -->

<!-- wow JS -->
<script src="js/wow.js"></script>

<!-- loading -->
<script>
  // $('#content').hide();
  // $(window).on('load', function() {
  //   let loadingPerc = 0;
  //   let loading = setInterval(() => {
  //     if (loadingPerc >= 100) {
  //       $('#loading').fadeOut();
  //       $('#content').delay(1000).fadeIn();
  //       clearInterval(loading);
  //     } else {
  //       loadingPerc += 10;
  //       // $('#loading-text').text(loadingPerc + '%');
  //     }
  //   }, 50)

  // })
</script>

<!-- 阻止導覽移置錨點 -->
<script>
  $('#tab-01,#tab-02,#tab-03,#tab-04').on('click', function(event) {
    event.preventDefault();
    $('html, body').stop();

  });
</script>

<!-- JS LINK -->

<script>
  // BS表單驗證
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>

<script>
  // $('#tab-01').on('click',function(){
  //   $('#nav-img').attr('src','img/section02_01.jpg');
  // })
  // $('#tab-02').on('click',function(){
  //   $('#nav-img').attr('src','img/section02_02.jpg');
  // })
  // $('#tab-03').on('click',function(){
  //   $('#nav-img').attr('src','img/section02_03.jpg');
  // })
  // $('#tab-04').on('click',function(){
  //   $('#nav-img').attr('src','img/section02_04.jpg');
  // })
</script>

<script>
  $('.carousel-control-prev,.carousel-control-next,#tab-01,#tab-02,#tab-03,#tab-04').on('click', function(event) {
    event.preventDefault();
    $('html,body').stop();
  })
</script>


<script>
  new WOW().init();
</script>

<script>
  $(function() {
    var $li = $('ul.tab-title li');
    $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.tab-inner').hide();

    $li.click(function() {
      $($(this).find('a').attr('href')).show().siblings('.tab-inner').hide();
      $(this).addClass('active').siblings('.active').removeClass('active');
    });
  });
</script>

<script>
  $(".carousel-item").first().addClass('active');
</script>

</html>