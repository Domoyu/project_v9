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
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css" />
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

    <form method="post" action="api.php?do=artucle_modify" class="mt-8">
      <table class="table" id="dt">

        <thead class="thead-dark">
          <tr>
            <th scope="col">文章編號</th>
            <th scope="col">創建日期</th>
            <th scope="col">修改日期</th>
          </tr>
        </thead>

        <tbody>

          <tr role="row">
            <td><span>1</span></td>
            <td><span>2</span></td>
            <td><span>3</span></td>
          </tr>
          <tr role="row">
            <td><span>1</span></td>
            <td><span>2</span></td>
            <td><span>3</span></td>
          </tr>
          <tr role="row">
            <td><span>1</span></td>
            <td><span>2</span></td>
            <td><span>3</span></td>
          </tr>
          <tr role="row">
            <td><span>1</span></td>
            <td><span>2</span></td>
            <td><span>3</span></td>
          </tr>
        </tbody>

      </table>
    </form>
    <!-- 頁籤 -->
    <!-- <section id="news" class=" h-100 bg-coffee1 mt-3">
        <div class="container h-100 d-lg-flex flex-lg-column justify-content-lg-center text-center">
          <h3 class="text-center text-white py-4 mb-1">最新消息</h3>
          <div class="row">
            <div class="col-12">

              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="tab-01" data-toggle="tab" href="#news-01">最新消息</a>
                </div>
              </nav>

              <div class="tab-content text-white overflow-auto" id="nav-tabContent" style="height: 500px;"> -->
    <!-- 1 -->
    <!-- <div class="tab-pane fade show active " id="news-01">

                  <div class="media media-unt">
                    <div class="news-imgdiv">
                      <img src="img/mabicons.png" class="news-img" alt="lorem">
                    </div>
                    <div class="">
                      <h5 class="news-sort">最新消息</h5>
                      <h4 class="news-title mt-2 ml-1">123</h4>
                      <p class="news-p m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, ad. Beatae dolores, recusandae vel nam cupiditate ipsam fugit obcaecati officiis.<a href="#" class="more">more</a></p>
                    </div>
                  </div>
                  <div class="media media-unt">
                    <div class="news-imgdiv">
                      <img src="img/mabicons.png" class="news-img" alt="lorem">
                    </div>
                    <div class="">
                      <h5 class="news-sort">最新消息</h5>
                      <h4 class="news-title mt-2 ml-1">123</h4>
                      <p class="news-p m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, ad. Beatae dolores, recusandae vel nam cupiditate ipsam fugit obcaecati officiis.<a href="#" class="more">more</a></p>
                    </div>
                  </div>
                  <div class="media media-unt">
                    <div class="news-imgdiv">
                      <img src="img/mabicons.png" class="news-img" alt="lorem">
                    </div>
                    <div class="">
                      <h5 class="news-sort">最新消息</h5>
                      <h4 class="news-title mt-2 ml-1">123</h4>
                      <p class="news-p m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, ad. Beatae dolores, recusandae vel nam cupiditate ipsam fugit obcaecati officiis.<a href="#" class="more">more</a></p>
                    </div>
                  </div>

                </div> -->
    <!-- 1 -->

  </div>
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
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>

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
  // $('#content').hide();
  // $(window).on('load',function(){
  //   let loadingPerc = 0;
  //   let loading = setInterval(()=>{
  //     if(loadingPerc >= 100){
  //       $('#loading').fadeOut();
  //       $('#content').delay(600).fadeIn();
  //       clearInterval(loading);
  //     }
  //     else{
  //       loadingPerc += 50;
  //       $('#loading-text').text(loadingPerc + '%');
  //     }
  //   },50)

  // })
</script>

<!-- 阻止導覽移置錨點 -->
<script>
  $('#tab-01,#tab-02,#tab-03,#tab-04').on('click', function(event) {
    event.preventDefault();
    $('html, body').stop();

  });
</script>

<script>
  $('#dt').DataTable({

    language: {
      "emptyTable": "無資料...",
      "processing": "處理中...",
      "loadingRecords": "載入中...",
      "lengthMenu": "顯示 _MENU_ 項結果",
      "zeroRecords": "沒有符合的結果",
      "info": "顯示第 _START_ 至 _END_ 項結果，共 _TOTAL_ 項",
      "infoEmpty": "顯示第 0 至 0 項結果，共 0 項",
      "infoFiltered": "(從 _MAX_ 項結果中過濾)",
      "infoPostFix": "",
      "search": "搜尋:",
      "paginate": {
        "first": "第一頁",
        "previous": "上一頁",
        "next": "下一頁",
        "last": "最後一頁"
      },
      "aria": {
        "sortAscending": ": 升冪排列",
        "sortDescending": ": 降冪排列"
      }
    }
  });
</script>

<!-- JS LINK -->

</html>