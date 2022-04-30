<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Banner</title>
    <!-- link css-->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css" />
    <!-- <script src="js/datetables.json"></script> -->
</head>

<body style="height: 100vh;">

    <!--  -->
    <h1 style="padding:10px 0px;">文章管理(Artucle)</h1>
    <form method="post" action="api.php?do=artucle_modify">
        <table class="table" id="dt">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">文章編號</th>
                    <th scope="col">創建日期</th>
                    <th scope="col">修改日期</th>
                    <th scope="col">文章縮圖</th>
                    <th scope="col">文章分類</th>
                    <th scope="col">文章標題</th>
                    <th scope="col">文章內容</th>
                    <th scope="col">顯示</th>
                    <th scope="col">刪除</th>
                    <th scope="col">修改文章</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $art = "";
                $rows = select("artucle", 1);
                foreach ($rows as $row) {
                    // print_r($row);

                ?>
                    <tr role="row">
                        <td><span><?= $row['id'] ?></span></td>
                        <td><span><?= $row['artucle_firstdate'] ?></span></td>
                        <td><span><?= $row['artucle_lastdate'] ?></span></td>
                        <td><img src="img/<?= $row['artucle_img'] ?>" width="50px"></td>
                        <td><span><?= $row['artucle_type'] ?></span></td>
                        <td><span><?= mb_substr($row['artucle_title'], 0, 4) ?>..</span></td>
                        <td><span><?= mb_substr($row['artucle_content_view'], 0, 8) ?>...</span></td>
                        <!-- <td><span><?= mb_substr($row['artucle_content'], 0, 12) ?>...</span></td> -->
                        <!-- <td><span><?= htmlentities(htmlentities(mb_substr($row['artucle_content'], 0, 6), ENT_COMPAT, 'UTF-8'), ENT_COMPAT, 'UTF-8') ?></span></td> -->



                        <td>
                            <input type="hidden" name="display[<?= $row['id'] ?>]" value="0">
                            <input class="ainput" type="checkbox" name="display[<?= $row['id'] ?>]" value="1" <?= ($row['display'] == 1) ? "checked" : "" ?>>
                        </td>
                        <td><input class="binput" type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                        <td><input class="btn btn-warning" type="button" onclick="op('#cover','#cvr','view.php?do=artucle_change&id=<?= $row['id'] ?>')" value="編輯內容"></td>
                    </tr>

                <?php
                }

                ?>


            </tbody>
        </table>

        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input type="button" onclick="op('#cover','#cvr','view.php?do=artucle_add')" class="btn btn-success" value="新增文章">
                        <input type="submit" class="btn btn-primary" value="修改確定">
                        <input type="reset" class="btn btn-danger" value="取消修改">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <!--  -->

</body>
<!-- link js -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>

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

</html>