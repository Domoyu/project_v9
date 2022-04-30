<?php
    session_start();
    // $db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
    $db = new PDO('mysql:host=localhost;dbname=s1080420;charset=utf8','s1080420','s1080420');

    date_default_timezone_set("Asia/Taipei");

    //select SQL
    function select($tableName,$where){
        global $db;
        $sql = "SELECT *  FROM ".$tableName." WHERE ".$where;
        return $db->query($sql)->fetchall();
    }

    //insert SQL
    function insert($ary,$tableName){
        global $db;
        $feild = "id";
        $data = "null";
        foreach ($ary as $key => $value){
            $feild.=",".$key;
            $data.=",'".$value."'";
        }
        $sql = "INSERT INTO ".$tableName."(".$feild.") VALUES(".$data.")";
        $db->query($sql);
        return $db->lastInsertId();
    }

    //update SQL
    function update($ary,$tableName){
        global $db;

        foreach($ary as $do => $data){
            switch($do){
                case 'num+1';
                    $sql="UPDATE ".$tableName." SET num=num+1 WHERE id=".$data;                    
                    $db->query($sql);
                break;
                case 'num-1';
                    $sql="UPDATE ".$tableName." SET num=num-1 WHERE id=".$data;
                    $db->query($sql);
                break;
                default:
                    foreach($data as $key => $value){
                        echo $sql="UPDATE ".$tableName." SET ".$do."='".$value."'WHERE id=".$key." ";
                        $db->query($sql);
                    }
                break;
            }
        }
    }

    //delete SQL
    function delete($ary,$tableName){
        global $db;
        foreach($ary as $do => $data){
            switch($do){
                case 'del':
                    foreach($data as $key => $value){
                        echo $sql = "DELETE FROM ".$tableName." WHERE id=". $value;
                        $db->query($sql);
                    }
                break;

                case 'delat':
                        $sql = "DELETE FROM ".$tableName." WHERE ".$data;
                        $db->query($sql);
                break;
            }
        }
    }

    //php轉址
    function plo($link){
        return header("location:".$link);
    }

    //JS轉址
    function jlo($link){
        return "location.href='".$link."'";
    }

    //file upload
    function addfile($file){
        $newname = time()."_".$file['name'];
        copy($file['tmp_name'],"img/".$newname);
        return $newname;
    }

    //pageNav
    function navpage($tableName,$where,$range,$nowpage){
        $result = select($tableName,$where);
        $total = count($result);
        $many = ceil($total/$range);

        $pg['<'] = ($nowpage==1)?1:$nowpage-1;

        for($i=1;$i<=$many;$i++){
            $pg[$i] = $i;
        }

        $pg['>'] = ($nowpage == $many)?$many:$nowpage+1;

        return $pg;
    }


    //select art
    function selectart($tableName){
        global $db;
        $sql = "SELECT *  FROM ".$tableName."";
        return $db->query($sql)->fetchall();
    }

    //select art_all
    function selectartall($tableName){
        global $db;
        $sql = "SELECT *  FROM ".$tableName." ORDER BY artucle_firstdate DESC LIMIT 3";                
        return $db->query($sql)->fetchall();
    }

    //select art_news
    function selectartnews($tableName){
        global $db;
        $sql = "SELECT *  FROM ".$tableName." ORDER BY artucle_firstdate DESC";                
        return $db->query($sql)->fetchall();
    }

    //select art_news_guild
    function selectartnewsguild($tableName){
        global $db;
        $sql = "SELECT *  FROM ".$tableName." WHERE artucle_type='公會資訊' ORDER BY artucle_firstdate DESC";                
        return $db->query($sql)->fetchall();
    }

    //select art_news_game_news
    function selectartnewsgamenews($tableName){
        global $db;
        $sql = "SELECT *  FROM ".$tableName." WHERE artucle_type='遊戲資訊' ORDER BY artucle_firstdate DESC";                
        return $db->query($sql)->fetchall();
    }

    //select art_news_game_news
    function selectartnewsgamestrategy($tableName){
        global $db;
        $sql = "SELECT *  FROM ".$tableName." WHERE artucle_type='遊戲攻略' ORDER BY artucle_firstdate DESC";                
        return $db->query($sql)->fetchall();
    }

    //select art_id
    function selectartid($tableName,$id){
        global $db;
        $sql = "SELECT *  FROM ".$tableName." WHERE id=".$id;                
        return $db->query($sql)->fetchall();
    }

    //select art_guild
    function selectartguild($tableName){
        global $db;
        $sql = "SELECT *  FROM ".$tableName." WHERE artucle_type='公會資訊' ORDER BY artucle_firstdate DESC LIMIT 3";
                // SELECT * FROM artucle WHERE artucle_type='公會資訊' ORDER BY artucle_firstdate DESC LIMIT 3                
        return $db->query($sql)->fetchall();
    }

    //select art_game_news
    function selectartgamenews($tableName){
        global $db;
        $sql = "SELECT *  FROM ".$tableName." WHERE artucle_type='遊戲資訊' ORDER BY artucle_firstdate DESC LIMIT 3";
                // SELECT * FROM artucle WHERE artucle_type='公會資訊' ORDER BY artucle_firstdate DESC LIMIT 3                
        return $db->query($sql)->fetchall();
    }

    //select art_game_strategy
    function selectartgamestrategy($tableName){
        global $db;
        $sql = "SELECT *  FROM ".$tableName." WHERE artucle_type='遊戲攻略' ORDER BY artucle_firstdate DESC LIMIT 3";
                // SELECT * FROM artucle WHERE artucle_type='公會資訊' ORDER BY artucle_firstdate DESC LIMIT 3                
        return $db->query($sql)->fetchall();
    }

    //insert art
    function insertart($ary,$tableName){
        global $db;        
        $data = "null";
        foreach ($ary as $key => $value){            
            $data.=",'".$value."'";
        }
        $sql = "INSERT INTO ".$tableName." VALUES(".$data.")";
        $db->query($sql);
        return $db->lastInsertId();
    }
    
    //updare art    
    function updateart($ary,$tableName){
        global $db;
        $sql = "UPDATE ".$tableName." SET artucle_type='".$ary['artucle_type']."',artucle_firstdate='".$ary['artucle_firstdate']."',artucle_lastdate='".$ary['artucle_lastdate']."',artucle_title='".$ary['artucle_title']."',artucle_content='".htmlentities(htmlentities($ary['artucle_content'], ENT_COMPAT, 'UTF-8'), ENT_COMPAT, 'UTF-8')."',artucle_content_view='".$ary['artucle_content_view']."',artucle_img='".$ary['artucle_img']."',display='".$ary['display']."' WHERE id=".$ary['id'];
        $db->query($sql);
    }

    //select search_art
    function searchart($tableName,$str){
        global $db;        
        $sql = "SELECT * FROM ".$tableName." WHERE artucle_title like '%".$str."%' OR artucle_content like '%".$str."%' ORDER BY artucle_firstdate DESC";
        // $sql = "SELECT * FROM ".$tableName." WHERE display=1";
               //select * from artucle where artucle_title or artucle_content like '%$????%' order by artucle_firstdate desc
        return $db->query($sql);
    }










    // $rows = select("banner","display=1");
    // foreach ($rows as $row){
    //     $banner_ary[] = "img/".$row['banner_img'];  
    // }
