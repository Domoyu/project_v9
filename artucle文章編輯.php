<?php
// $dblink = new PDO("mysql:host=127.0.0.1;dbname=test;charset=utf8", "root", "");
// $sqlcode = $dblink->query("INSERT INTO test VALUES (1578292222,'遊戲資訊',20200106,'測試','內容測試','123',1)");
// $result = $dblink->query($sqlcode);
// if(!$result) print_r($dblink->errorInfo());
// echo ($sqlcode);

require_once("sql.php");
if(empty($_SESSION['admin'])) plo("login.php");
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CKEditor 5 - Classic editor</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
</head>
<body>

  <div class="container card_main">
    <h1 >文章發佈</h1>

    <form action="api.php" method="post" enctype="multipart/form-data" class="form">
    <table class="table">
      <input type="hidden" name="date" value="">
  <tbody>

    <tr>
      <th scope="row">1</th>
      <td>請選擇文章分類</td>
        <td>
          <select name="background">
                <option value="1">遊戲資訊</option>
                <option value="2">公會資訊</option>
                <option value="3">遊戲攻略</option>
            </select>
        </td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>文章標題：</td>
      <td><input type="text" name="name" placeholder=""><br></td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>文章縮圖：</td>
      <td><input type="file" name="pic" id="" class=""><br></td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>文章內容：</td>
      <td>
        <textarea name="content" id="editor">
            &lt;p&gt;編輯文章內容&lt;/p&gt;
        </textarea><br></td>
    </tr>

  </tbody>
</table>

<div style="margin:0px 0px 0px 250px">
    <input type="submit" value="送出"  class="btn btn-info"></td>
</div>

</form>
</div>

<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ),{
              
            } )
            .catch( error => {
                console.error( error );
            } );
</script>
</body>
</html>