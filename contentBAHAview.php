<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>news</title>
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
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <!-- wow css -->
        <link rel="stylesheet" href="css/wow.css">
</head>
<body style="height:100vh">
    
    <!-- loading -->
    <div id="loading" class="position-relative">
        <div id="loading-text" class="h4 text-coffee position-absolute"></div>
        <img src="img/loading.svg" width="200" height="200">
    </div>
  
      
    
<!-- 內容區 --><div id="content" class="h-100 container">
<!-- 導行列 -->
<?php
  include("navbar.php");
?>
<!-- /導行列 -->
<div class="mt-8" style="border: 5px solid #fff">
    <h1>title</h1>
    <hr>
    <div>artucle_date</div><br>
    <div>content</div>
</div>






<!-- /內容區 --></div>
    

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
<script  src="js/scrollpage.js"></script>

<!-- particles JS -->
<script  src="js/particles.js"></script>
<script  src="js/particles_app.js"></script>

<!-- wow JS -->
<script  src="js/wow.js"></script>

<!-- loading -->
<script>
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
</script>

<!-- 阻止導覽移置錨點 -->
<script>
  $('#tab-01,#tab-02,#tab-03,#tab-04').on('click', function(event) {
    event.preventDefault();
    $('html, body').stop();

  });
</script>

<!-- JS LINK -->
</html>