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
    <link rel="stylesheet" href="css/MyStyle.css">

<style>
    body{
        height: 100vh;
        background:#fff url(img/illust_068_1920x12002.jpg)center center fixed no-repeat;
    }
    #main{
        border: 5px double rgba(20, 20, 20, 0.5);
        background:rgba(119, 119, 119, 0.9);
    }
</style>
</head>

<body style="height:100vh;background:#fff url(img/illust_011_1920x12002.jpg)center center fixed no-repeat">


    <!-- loading -->
    <!-- <div id="loading" class="position-relative"> -->
    <!-- <div id="loading-text" class="h4 text-coffee position-absolute"></div> -->
    <!-- <img src="img/loading.svg" width="200" height="200"> -->
    <!-- <img class="wow bounceOut" src="img/Unitedicon.png" width="200"> -->
    </div>


    <!-- 內容區 -->
    <?php
    include("navbar.php");
    $myartid = substr($_SERVER['QUERY_STRING'], 3);
    $rows = selectartid("artucle", $myartid);    
    $test = html_entity_decode($rows[0][5], ENT_HTML5, 'UTF-8');
    ?>

    <?php

    ?>
    <!-- <div style="background:#fff url(img/illust_068_1920x12002.jpg)center center fixed no-repeat;"> -->
    <div id="content" class="h-100 container">

        <!-- particles.js -->
        <!-- <div id="particles-js" class="position-fixed h-100 w-100" style="z-index:1029;pointer-events: none;"></div> -->
        <!-- /particles.js -->
        
        <div id="main" class="mt-8" >
            <h1><?= $rows[0][4] ?></h1>
            <hr>
            <div><?= $rows[0][2] ?></div><br>
            <div><?= html_entity_decode($test, ENT_HTML5, 'UTF-8') ?></div>
        </div>
        <?php
        // print_r($_POST);
        // $_SERVER['QUERY_STRING'];
        // print_r($_SERVER);

        ?>








    </div>
    <!-- /內容區 -->
    <!-- </div> -->
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
    //     let loadingPerc = 0;
    //     let loading = setInterval(() => {
    //         if (loadingPerc >= 100) {
    //             $('#loading').fadeOut();
    //             $('#content').delay(1000).fadeIn();
    //             clearInterval(loading);
    //         } else {
    //             loadingPerc += 10;
    //             $('#loading-text').text(loadingPerc + '%');
    //         }
    //     }, 50)

    // })
</script>


<!-- JS LINK -->


<script>
    new WOW().init();
</script>

</html>