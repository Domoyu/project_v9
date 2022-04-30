<?php
require_once("sql.php");

switch ($_GET['do']) {

        // 帳號登入登出
    case 'check':
        $result = select("user", "acc='" . $_POST['acc'] . "' AND pwd='" . $_POST['pwd'] . "'");
        if ($result) { //驗證帳密成功
            $_SESSION['admin'] = $_POST['acc'];
            plo("admin.php");
        } else {
            echo "<script>alert('帳號密碼錯誤');" . jlo('login.php') . "</script>";
        }
        break;

    case 'logout':
        unset($_SESSION['admin']);
        plo("index.php");
        break;

        // 帳號登入登出


        // banner api
    case 'banner_add':
        $mypost['banner_img'] = addfile($_FILES['img']);
        insert($mypost, "banner");
        plo('admin.php?do=banner');
        break;

    case 'banner_change':
        $chgbanner['banner_img'][$_GET['id']] = addfile($_FILES['img']);
        update($chgbanner, "banner");
        plo("admin.php?do=banner");
        break;

    case 'banner_modify':
        update($_POST, "banner");
        delete($_POST, "banner");
        plo("admin.php?do=banner");
        break;
        // banner api


        // artucle api
    case 'artucle_add':
        $addart[] = $_POST["artucleType"];
        $addart[] = date("Y-m-d H:i:s");
        $addart[] = null;
        $addart[] = $_POST["artucleTitle"];
        $addart[] = $_POST["artucleContent"];
        $addart[] = strip_tags($_POST["artucleContent"]);
        $addart[] = addfile($_FILES['artucleImg']);
        $addart[] = 1;
        insertart($addart, "artucle");
        plo('admin.php?do=artucle');
        break;

    case 'artucle_change':
        // $chgart['artucle_lastdate'] = date("Y-m-d H:i:s");
        // print_r($_FILES);
        $chgart['id'] = $_GET['id'];
        $chgart['artucle_type'] = $_POST['artucleType'];
        $chgart['artucle_firstdate'] = $_POST['artucleFirstdate'];
        $chgart['artucle_lastdate'] = date("Y-m-d H:i:s");
        $chgart['artucle_title'] = $_POST['artucleTitle'];
        $chgart['artucle_content'] = $_POST['artucleContent'];
        $chgart['artucle_content_view'] = strip_tags($_POST['artucleContent']);
        $chgart['artucle_img'] = addfile($_FILES['artucleImg']);
        $chgart['display'] = 1;
        updateart($chgart, "artucle");
        plo('admin.php?do=artucle');
        break;

    case 'artucle_modify':
        updateart($_POST, "artucle");
        updateart($_FILES, "artucle");
        delete($_POST, "artucle");
        delete($_FILES, "artucle");
        plo('admin.php?do=artucle');
        break;
        // artucle api

    case 'search_art':
        $search = $_POST["a"];
        plo('searchview.php?do='.$search);
    break;
























        // case 'admartuclemdy':
        //     $who = $_POST['radio'];
        //     $_POST['display'][$who] = 1;
        //     unset($_POST['radio']);
        //     update($_POST,"artucle");
        //     delete($_POST,"artucle");
        //     plo("admin.php");
        // break;


        // case 'titlechg':
        //     $chgimg['img'][$_GET['id']] = addfile($_FILES['img']);
        //     update($chgimg, "q1t3_title");
        //     plo("admin.php");        
        //     break;


        // case 'maqeadd':
        //     insert($_POST, "q1t4_maqe");
        //     plo('admin.php?do=aad');
        //     break;


        // case 'maqemdy':
        //     update($_POST, "q1t4_maqe");
        //     delete($_POST, "q1t4_maqe");
        //     plo('admin.php?do=aad');
        //     break;

        // case 'totalmdy':
        //     update($_POST, "q1t7_total");
        //     plo('admin.php?do=atotal');
        //     break;

        // case 'mvimadd':
        //     $mypost['text'] = addfile($_FILES['img']);
        //     insert($mypost, "q1t5_mvim");        
        //     plo('admin.php?do=mvim');
        //     break;

        // case 'mvimmdy':
        //     update($_POST, "q1t5_mvim");
        //     delete($_POST, "q1t5_mvim");
        //     plo("admin.php?do=mvim");
        //     break;


        // case 'mvimchg':
        //     $chgflash['text'][$_GET['id']] = addfile($_FILES['img']);
        //     update($chgflash, "q1t5_mvim");
        //     plo("admin.php?do=mvim");
        //     break;

        // case 'imageadd':
        //     $mypost['text'] = addfile($_FILES['img']);
        //     insert($mypost, "q1t6_img");
        //     plo('admin.php?do=image');
        //     break;

        // case 'imagechg':
        //     $chgflash['text'][$_GET['id']] = addfile($_FILES['img']);
        //     update($chgflash, "q1t6_img");
        //     plo("admin.php?do=image");
        //     break;

        // case 'imagemdy':
        //     update($_POST, "q1t6_img");
        //     delete($_POST, "q1t6_img");
        //     plo("admin.php?do=image");
        //     break;

        // case 'bottommdy':
        //     update($_POST, "q1t8_footer");
        //     plo("admin.php?do=bottom");
        //     break;

        // case 'newsmdy':
        //     update($_POST, "q1t9_news");
        //     delete($_POST, "q1t9_news");
        //     plo("admin.php?do=anews");
        //     break;

        // case 'newsadd':
        //     insert($_POST, "q1t9_news");
        //     plo('admin.php?do=anews');
        //     break;

        // case 'adminadd':
        //     $result = select("q1t10_admin","acc='".$_POST['acc']."'");

        //     if($result){
        //         echo "<script>alert('帳號已存在 請使用別的帳號');".jlo('admin.php?do=aadmin')."</script>";

        //     }
        //     else if($_POST['pwd']!=$_POST['checkpwd']){
        //         echo "<script>alert('密碼不一致');".jlo('admin.php?do=aadmin')."</script>";
        //     }
        //     else{
        //         unset($_POST['checkpwd']);
        //         print_r($_POST);
        //         insert($_POST,"q1t10_admin");
        //         plo('admin.php?do=aadmin');
        //     }    
        //     break;

    case 'adminmdy':
        update($_POST, "q1t10_admin");
        delete($_POST, "q1t10_admin");
        plo('admin.php?do=aadmin');
        break;

        // case 'menuadd':
        //     insert($_POST, "q1t12_menu");
        //     plo('admin.php?do=menu');
        //     break;

        // case 'menumdy':
        //     update($_POST, "q1t12_menu");
        //     delete($_POST, "q1t12_menu");
        //     plo("admin.php?do=menu");
        //     break;

        // case 'menuchg':
        //     foreach ($_POST['new']['text'] as $key=>$value) {
        //         $newadd['text'] = $value;
        //         $newadd['link'] = $_POST['new']['link'][$key];
        //         $newadd['parent'] = $_GET['id'];
        //         insert($newadd,"q1t12_menu");
        //     }
        //     unset($_POST['new']);
        //     update($_POST, "q1t12_menu");
        //     delete($_POST, "q1t12_menu");
        //     plo("admin.php?do=menu");
        //     break;
}
