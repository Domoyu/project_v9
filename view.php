<?php
require_once('sql.php');
?>

<?php
switch ($_GET['do']) {

  case 'banner_add':
?>
    <script>
      function readURL(input) {
        if (input.files && input.files[0]) {
          var imageTagID = input.getAttribute("targetID");
          var reader = new FileReader();
          reader.onload = function(e) {
            var img = document.getElementById(imageTagID);
            img.setAttribute("src", e.target.result)
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>

    <!-- <form action="api.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">

      <p class="t cent botli">圖片</p>
      <p class="cent">圖片：<input type="file" name="img"></p>
      <p class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
      </p>
    </form> -->




    <form action="api.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
      <div class="container card_main">
        <h1>新增輪播圖</h1>        
          <table class="table">
            <input type="hidden" name="date" value="">
            <tbody>
              <tr>
                <!-- <th scope="row">1</th> -->
                <td>縮圖</td>
                <td>                
                  <input class="" type="file" onchange="readURL(this)" targetID="viewimg" name="img" id="simg"  onchange="$chck"><br>
                  <img id="viewimg" src="#" style="width:200px;height:100px;">
                </td>
              </tr>
            </tbody>
          </table>

          <div style="margin:0px 0px 0px 20px">
            <input type="submit" value="送出" class="btn btn-info"></td>
            <input type="reset" value="重置" class="btn btn-danger">
          </div>        
      </div>
    </form>





  <?php
    break;

  case 'banner_change':
    $row = select("banner", "id=" . $_GET['id']);
  ?>
      <script>
      function readURL(input) {
        if (input.files && input.files[0]) {
          var imageTagID = input.getAttribute("targetID");
          var reader = new FileReader();
          reader.onload = function(e) {
            var img = document.getElementById(imageTagID);
            img.setAttribute("src", e.target.result)
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
    <!-- <form action="api.php?do=<?= $_GET['do'] ?>&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
      <p class="t cent botli">修改圖片</p>
      <p class="cent">圖片：<input type="file" name="img"></p>
      <p class="cent">
        <input type="submit" value="修改">
        <input type="reset" value="重置">
      </p>
    </form> -->

    <form action="api.php?do=<?= $_GET['do'] ?>&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
      <div class="container card_main">
        <h1>更換輪播圖</h1>        
          <table class="table">
            <input type="hidden" name="date" value="">
            <tbody>
              <tr>
                <!-- <th scope="row">1</th>
                <td>文章縮圖</td>
                <td>                
                  <input type="file" onchange="readURL(this)" targetID="viewimg" name="img" id="simg" class="" onchange="$chck"><br>
                  <img id="viewimg" src="#">
                </td>

                <th scope="row">3</th> -->
                <td></td>
                <td>
                  
                  <span>原來的縮圖</span><br>
                  <img src="img/<?= $row[0]["banner_img"] ?>" style="width:200px;height:100px;"><br>
                  <input type="file" onchange="readURL(this)" targetID="viewimg" name="img" id="simg" class="" onchange="$chck"><br>
                  <span>更換後的縮圖</span><br>
                  <img id="viewimg" src="#" style="width:200px;height:100px;"><br>
                </td>

              </tr>
            </tbody>
          </table>

          <div style="margin:0px 0px 0px 20px">
            <input type="submit" value="送出" class="btn btn-info"></td>
            <input type="reset" value="重置" class="btn btn-danger">
          </div>        
      </div>
    </form>

  <?php
    break;

  case 'artucle_add':
  ?>
    <script>
      function readURL(input) {
        if (input.files && input.files[0]) {
          var imageTagID = input.getAttribute("targetID");
          var reader = new FileReader();
          reader.onload = function(e) {
            var img = document.getElementById(imageTagID);
            img.setAttribute("src", e.target.result)
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>

    <form action="api.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
      <div class="container card_main">
        <h1>文章發佈</h1>

        <form action="api.php" method="post" enctype="multipart/form-data" class="form">
          <table class="table">
            <input type="hidden" name="date" value="">
            <tbody>

              <tr>
                <th scope="row">1</th>
                <td>文章分類</td>
                <td>
                  <select name="artucleType">
                    <option value="公會資訊">公會資訊</option>
                    <option value="遊戲資訊">遊戲資訊</option>
                    <option value="遊戲攻略">遊戲攻略</option>
                  </select>
                </td>
              </tr>

              <tr>
                <th scope="row">2</th>
                <td>文章標題</td>
                <td><input type="text" name="artucleTitle" placeholder=""><br></td>
              </tr>

              <tr>
                <th scope="row">3</th>
                <td>文章縮圖</td>
                <td>
                  <input type="file" onchange="readURL(this)" targetID="viewimg" name="artucleImg" id="simg" class="" onchange="$chck"><br>
                  <img id="viewimg" src="#">
                </td>

              </tr>

              <tr>
                <th scope="row">4</th>
                <td>文章內容</td>
                <td>
                  <textarea name="artucleContent" id="editor">
            &lt;p&gt;編輯文章內容&lt;/p&gt;
        </textarea><br></td>
              </tr>

            </tbody>
          </table>

          <div style="margin:0px 0px 0px 185px">
            <input type="submit" value="送出" class="btn btn-info"></td>
            <input type="reset" value="重置" class="btn btn-danger">
          </div>

        </form>
      </div>
    </form>
    <!-- CKEditor -->
    <script>
      ClassicEditor
        .create(document.querySelector('#editor'), {

        })
        .catch(error => {
          console.error(error);
        });
    </script>
    <!-- /CKEditor -->
  <?php
    break;

  case 'artucle_change':
    $row = select("artucle", "id=" . $_GET['id']);
  ?>
    <script>
      function readURL(input) {
        if (input.files && input.files[0]) {
          var imageTagID = input.getAttribute("targetID");
          var reader = new FileReader();
          reader.onload = function(e) {
            var img = document.getElementById(imageTagID);
            img.setAttribute("src", e.target.result)
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
    <form action="api.php?do=<?= $_GET['do'] ?>&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
      <input name="artucleFirstdate" type="hidden" value="<?= $row[0]["artucle_firstdate"] ?>">
      <div class="container card_main">
        <h1>文章修改</h1>

        <form action="api.php" method="post" enctype="multipart/form-data" class="form">
          <table class="table">
            <input type="hidden" name="date" value="">
            <tbody>

              <tr>
                <th scope="row">1</th>
                <td>文章分類</td>
                <td>
                  <select name="artucleType">
                    <option value="公會資訊">公會資訊</option>
                    <option value="遊戲資訊">遊戲資訊</option>
                    <option value="遊戲攻略">遊戲攻略</option>
                  </select>
                </td>
              </tr>

              <tr>
                <th scope="row">2</th>
                <td>文章標題</td>
                <td><input type="text" name="artucleTitle" placeholder="" value="<?= $row[0]["artucle_title"] ?>"><br></td>
              </tr>

              <tr>
                <th scope="row">3</th>
                <td>文章縮圖</td>
                <td>
                  <!-- <input type="file" name="artucleImg"> -->
                  <span>原來的縮圖</span><br>
                  <img src="img/<?= $row[0]["artucle_img"] ?>" style="width:100px;height:100px;"><br>
                  <input type="file" onchange="readURL(this)" targetID="viewimg" name="artucleImg" id="simg" class="" onchange="$chck"><br>
                  <span>更換後的縮圖</span><br>
                  <img id="viewimg" src="#" style="width:100px;height:100px;"><br>
                </td>
                <br>

              </tr>

              <tr>
                <th scope="row">4</th>
                <td>文章內容</td>
                <td>
                  <textarea name="artucleContent" id="editor"><?= html_entity_decode($row[0]["artucle_content"]) ?></textarea><br></td>
                <!-- <input type="text" name="artucleContentView" value="<?= $row[0]["artucle_content_view"] ?>"><br></td> -->
              </tr>

              <tr>
                <!-- <th scope="row">5</th> -->
                <!-- <td>文章修改日期</td> -->
                <td><input type="hidden" name="artucleLastdate" id="" class=""><br></td>
              </tr>

            </tbody>
          </table>

          <div style="margin:0px 0px 0px 185px">
            <input type="submit" value="送出" class="btn btn-info"></td>
            <input type="reset" value="重置" class="btn btn-danger">
          </div>

        </form>
      </div>
    </form>

    <!-- CKEditor -->
    <script>
      ClassicEditor
        .create(document.querySelector('#editor'), {

        })
        .catch(error => {
          console.error(error);
        });
    </script>
    <!-- /CKEditor -->
<?php
    break;
}
?>