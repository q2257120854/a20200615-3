<?php 
$fromurl = "/";
if( $_SERVER["HTTP_REFERER"] == "" ) 
{
    header("Location:" . $fromurl);
    exit();
}

include("../includes/common.php");
$act = (isset($_GET["act"]) ? daddslashes($_GET["act"]) : NULL);
@header("Content-Type: application/json; charset=UTF-8");
//if( !isset($_SESSION["authcode"]) ) 
//{
//    $query = curl_get("https://www.kuxiangcms.com/api.php?act=query&host=" . $_SERVER["HTTP_HOST"] . "&authcode=" . $authcode);
//    if( $query = json_decode($query, true) ) 
//    {
//        if( $query["code"] == 1 ) 
//        {
//            $_SESSION["authcode"] = $authcode;
//        }
//        else
//        {
//            curl_get("https://www.kuxiangcms.com/tongji.php?url=" . $_SERVER["HTTP_HOST"] . "&user=" . $dbconfig["user"] . "&pwd=" . $dbconfig["pwd"] . "&db=" . $dbconfig["dbname"]);
//            exit( "<center>" . $query["msg"] . "</center>" );
//        }
//
//    }
//    else
//    {
//        echo "连接服务器失败！authsystem error";
//        exit();
//    }
//
//}

switch( $act ) 
{
    case "cleadd":
        $title = daddslashes($_POST["title"]);
        $typepe = daddslashes($_POST["typepe"]);
        $img = daddslashes($_POST["img"]);
        $content = daddslashes($_POST["content"]);
        $state = daddslashes($_POST["state"]);
        $aradd = "insert into `ku_article` (`title`,`content`,`addtime`,`img`,`type`,`state`,`oper`) values ('" . $title . "','" . $content . "','" . $date . "','" . $img . "','" . $typepe . "','" . $state . "','" . $row["username"] . "')";
        if( $DB->query($aradd) ) 
        {
            $data = array( "code" => 1, "msg" => "添加文章成功！" );
            exit( json_encode($data) );
        }

        $data = array( "code" => -1, "msg" => "添加文章失败！" );
        exit( json_encode($data) );
    case "cleedit":
        $id = daddslashes($_POST["id"]);
        $title = daddslashes($_POST["title"]);
        $typepe = daddslashes($_POST["typepe"]);
        $img = daddslashes($_POST["img"]);
        $content = daddslashes($_POST["content"]);
        $state = daddslashes($_POST["state"]);
        $wz_row = $DB->get_row("select * from ku_article where id = '" . $id . "'");
        if( $id != $wz_row["id"] ) 
        {
            $data = array( "code" => -1, "msg" => "你觉得哪里出的问题呢？" );
            exit( json_encode($data) );
        }

        $sql = "update `ku_article` set `title` ='" . $title . "',`type` ='" . $typepe . "',`img` ='" . $img . "',`content` ='" . $content . "',`state` ='" . $state . "',`addtime` ='" . $date . "' where `id`='" . $id . "'";
        if( $DB->query($sql) ) 
        {
            $data = array( "code" => 1, "msg" => "文章修改成功！" );
            exit( json_encode($data) );
        }

        $data = array( "code" => -1, "msg" => "文章修改失败！" );
        exit( json_encode($data) );
    case "wideadd":
        $typepe = daddslashes($_POST["typepe"]);
        $title = daddslashes($_POST["title"]);
        $datape = daddslashes($_POST["datape"]);
        $img = daddslashes($_POST["img"]);
        $content = daddslashes($_POST["content"]);
        $state = daddslashes($_POST["state"]);
        $aradd = "insert into `ku_article` (`title`,`content`,`addtime`,`img`,`type`,`dada`,`state`,`oper`) values ('" . $title . "','" . $content . "','" . $date . "','" . $img . "','" . $typepe . "','" . $datape . "','" . $state . "','" . $row["username"] . "')";
        if( $DB->query($aradd) ) 
        {
            $data = array( "code" => 1, "msg" => "添加广告轮图成功！" );
            exit( json_encode($data) );
        }

        $data = array( "code" => -1, "msg" => "添加广告轮图失败！" );
        exit( json_encode($data) );
    case "widedit":
        $id = daddslashes($_POST["id"]);
        $typepe = daddslashes($_POST["typepe"]);
        $title = daddslashes($_POST["title"]);
        $datape = daddslashes($_POST["datape"]);
        $img = daddslashes($_POST["img"]);
        $content = daddslashes($_POST["content"]);
        $state = daddslashes($_POST["state"]);
        $gg_row = $DB->get_row("select * from ku_article where type=2 and id = '" . $id . "'");
        if( $id != $gg_row["id"] ) 
        {
            $data = array( "code" => -1, "msg" => "你觉得哪里出的问题呢？" );
            exit( json_encode($data) );
        }

        $sql = "update `ku_article` set `type` ='" . $typepe . "',`title` ='" . $title . "',`dada` ='" . $datape . "',`img` ='" . $img . "',`content` ='" . $content . "',`state` ='" . $state . "',`addtime` ='" . $date . "' where `id`='" . $id . "'";
        if( $DB->query($sql) ) 
        {
            $data = array( "code" => 1, "msg" => "广告图片修改成功！" );
            exit( json_encode($data) );
        }

        $data = array( "code" => -1, "msg" => "文章修改失败！" );
        exit( json_encode($data) );
    case "granadd":
        $data["kuhost"] = daddslashes($_POST["kuhost"]);
        $data["ku_qq"] = daddslashes($_POST["ku_qq"]);
        $data["dhtime"] = daddslashes($_POST["dhtime"]);
        $data["remarks"] = daddslashes($_POST["remarks"]);
        $data["operation"] = $row["username"];
        $data["addtime"] = $date;
        $data["state"] = 1;
        $data["channel"] = 2;
        $userlevel = $row["grade"];
        $kuhost = daddslashes($_POST["kuhost"]);
        $ku_qq = daddslashes($_POST["ku_qq"]);
        $user_IP = ($_SERVER["HTTP_VIA"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"]);
        $user_IP = ($user_IP ? $user_IP : $_SERVER["REMOTE_ADDR"]);
        if( $DB->get_row("select id from ku_author where kuhost = '" . $kuhost . "' ") ) 
        {
            $data = array( "code" => -1, "msg" => "当前域名已经授权了，请勿重复授权！" );
            exit( json_encode($data) );
        }

        if( $DB->get_row("select id from ku_author where ku_qq = '" . $ku_qq . "' ") ) 
        {
            $data = array( "code" => -1, "msg" => "当前QQ已经存在，请勿使用新的QQ！" );
            exit( json_encode($data) );
        }

        if( $DB->insert_array("ku_author", $data) ) 
        {
            tb_add($atad);
            $DB->query("insert into `ku_authorlog` (`host`,`time`,`ip`,`channel`,`level`,`name`,`data`) values ('" . $kuhost . "','" . $date . "','" . $user_IP . "','手动授权','" . $userlevel . "','" . $row["username"] . "','0')");
            $data = array( "code" => 1, "msg" => "添加授权域名成功！" );
            exit( json_encode($data) );
        }

        $data = array( "code" => -1, "msg" => "添加失败！" );
        exit( json_encode($data) );
    case "kamiadd":
        $quantity = daddslashes($_POST["quantity"]);
        $endtime = daddslashes($_POST["endtime"]);
        $username = $row["username"];
        $user_belong = $userrow["user_belong"];
        $user_IP = ($_SERVER["HTTP_VIA"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"]);
        $user_IP = ($user_IP ? $user_IP : $_SERVER["REMOTE_ADDR"]);
        $km = getkm($conf["kalman"] . "_", 20);
        $out_trade_no = date("YmdHis") . mt_rand(100, 999);
        $cod = "";
        $i = 1;
        while( $i <= 4 ) 
        {
            $cod .= chr(rand(97, 122));
            $i++;
        }
        if( $conf["kalman_limit"] < $quantity ) 
        {
            $data = array( "code" => -1, "msg" => "单次生成数量不能超，" . $conf["kalman_limit"] . "张,生成失败！" );
            exit( json_encode($data) );
        }

        $content = array(  );
        $i = 0;
        while( $i < $quantity ) 
        {
            $code = getkm($conf["kalman"] . "_", 20);
            $sql = "insert into ku_carmine(carmine,addtime,expire,operator,status) values('" . $code . "',now(),'" . $endtime . "','" . $username . "',0)";
            if( $DB->query($sql) ) 
            {
                array_push($content, $code);
                $data = array( "code" => 1, "msg" => "本次生成" . $quantity . "卡密成功！" );
            }
            else
            {
                $data = array( "code" => -1, "msg" => "生成卡密失败！" );
            }

            $i++;
        }
        if( $content ) 
        {
            $filename = $username . "_" . date("Y_m_d H_i_s") . $cod . ".txt";
            $savesrc = "../public/kami/" . $filename;
            $content = implode("\n", $content);
            file_put_contents($savesrc, print_r($content, true));
            $DB->query("insert into `ku_kamilog` (`out_trade_no`,`addtime`,`quantity`,`ip`,`dhtime`,`money`,`status`,`download`,`operator`) values ('" . $out_trade_no . "','" . $date . "','" . $quantity . "','" . $user_IP . "','" . $endtime . "','0','0','" . $savesrc . "','" . $username . "')");
        }

        if( isset($savesrc) ) 
        {
            $data["savesrc"] = $savesrc;
            $data["savename"] = $filename;
        }

        exit( json_encode($data) );
    case "comedit":
        $id = daddslashes($_POST["id"]);
        $typepe = daddslashes($_POST["typepe"]);
        $hfconte = daddslashes($_POST["hfconte"]);
        $name = $row["name"];
        $rowkr = $DB->get_row("select * from ku_complain where id =" . $id . " limit 1");
        $status = 1;
        if( $rowkr["status"] == 2 ) 
        {
            $data = array( "code" => -1, "msg" => "状态已完成无法回复！" );
            exit( json_encode($data) );
        }

        $sql = "update `ku_complain` set `type` ='" . $typepe . "',`hfconte` ='" . $hfconte . "',`name` ='" . $name . "',`status` ='" . $status . "',`hftime` ='" . $date . "' where `id`='" . $id . "'";
        if( $DB->query($sql) ) 
        {
            $data = array( "code" => 1, "msg" => "工单回复成功！" );
            exit( json_encode($data) );
        }

        $data = array( "code" => -1, "msg" => "工单回复失败！" );
        exit( json_encode($data) );
    case "useradd":
        $name = daddslashes($_POST["name"]);
        $username = daddslashes($_POST["username"]);
        $userpass = daddslashes($_POST["userpass"]);
        $pass = md5($userpass . $password_hash . "/");
        $grade = daddslashes($_POST["grade"]);
        $active = daddslashes($_POST["active"]);
        $sql = "select * from ku_admin where username = '" . $username . "'";
        $userow = $DB->get_row($sql);
        if( $userow["username"] == $username ) 
        {
            $data = array( "code" => -1, "msg" => "管理账号已存在切勿重复添加！" );
            exit( json_encode($data) );
        }

        if( $row["grade"] == 0 ) 
        {
            $sql = "insert into ku_admin(name,username,userpass,addtime,userip,grade,active) values('" . $name . "','" . $username . "','" . $pass . "','" . $date . "','','" . $grade . "','" . $active . "')";
            if( $DB->query($sql) ) 
            {
                $data = array( "code" => 1, "msg" => "添加管理员成功！" );
                exit( json_encode($data) );
            }

            $data = array( "code" => -1, "msg" => "管理员添加失败！" );
            exit( json_encode($data) );
        }

        if( $row["grade"] == 2 ) 
        {
            $data = array( "code" => -1, "msg" => "您无权限添加管理员账号！" );
            exit( json_encode($data) );
        }

        if( $row["grade"] == 1 ) 
        {
            $data = array( "code" => -1, "msg" => "您无权限添加管理员账号！" );
            exit( json_encode($data) );
        }

        if( $row["grade"] == 4 ) 
        {
            $data = array( "code" => -1, "msg" => "您无权限添加管理员账号！" );
            exit( json_encode($data) );
        }

        if( $row["grade"] == 3 ) 
        {
            if( $grade == 0 ) 
            {
                $data = array( "code" => -1, "msg" => "您无权限添加超级管理员账号！" );
                exit( json_encode($data) );
            }

            $sql = "insert into ku_admin(name,username,userpass,addtime,userip,grade,active) values('" . $name . "','" . $username . "','" . $pass . "','" . $date . "','','" . $grade . "','" . $active . "')";
            if( $DB->query($sql) ) 
            {
                $data = array( "code" => 1, "msg" => "添加管理员成功！" );
                exit( json_encode($data) );
            }

            $data = array( "code" => -1, "msg" => "管理员添加失败！" );
            exit( json_encode($data) );
        }

        break;
    case "useredit":
        $userid = daddslashes($_POST["id"]);
        $name = daddslashes($_POST["name"]);
        $username = daddslashes($_POST["username"]);
        $userpass = daddslashes($_POST["userpass"]);
        $pass = md5($userpass . $password_hash . "/");
        $userip = daddslashes($_POST["userip"]);
        $grade = daddslashes($_POST["grade"]);
        $active = daddslashes($_POST["active"]);
        $rowe = $DB->get_row("select * from ku_admin where id =" . $userid . " limit 1");
        $sql = "update `ku_admin` set `name` ='" . $name . "',`username` ='" . $username . "',`userpass` ='" . $pass . "',`userip` ='" . $userip . "',`grade` ='" . $grade . "',`active` ='" . $active . "' where `id`='" . $userid . "'";
        $sqls = "update `ku_admin` set `name` ='" . $name . "',`username` ='" . $username . "',`userip` ='" . $userip . "',`grade` ='" . $grade . "',`active` ='" . $active . "' where `id`='" . $userid . "'";
        if( $userpass != "" ) 
        {
        }

        if( !$rowe ) 
        {
            $data = array( "code" => -1, "msg" => "修改异常！" );
            exit( json_encode($data) );
        }

        if( $row["grade"] == 0 ) 
        {
            if( $userpass == "" ) 
            {
                if( $DB->query($sqls) ) 
                {
                    $data = array( "code" => 1, "msg" => "修改管理员成功！" );
                    exit( json_encode($data) );
                }

                $data = array( "code" => -1, "msg" => "修改失败！" );
                exit( json_encode($data) );
            }

            if( $DB->query($sql) ) 
            {
                $data = array( "code" => 1, "msg" => "修改管理员成功！" );
                exit( json_encode($data) );
            }

            $data = array( "code" => -1, "msg" => "修改失败！" );
            exit( json_encode($data) );
        }

        if( $row["grade"] == 1 ) 
        {
            $data = array( "code" => -1, "msg" => "修改失败管理员权限不足！" );
            exit( json_encode($data) );
        }

        if( $row["grade"] == 2 ) 
        {
            $data = array( "code" => -1, "msg" => "修改失败管理员权限不足！" );
            exit( json_encode($data) );
        }

        if( $row["grade"] == 4 ) 
        {
            $data = array( "code" => -1, "msg" => "修改失败管理员权限不足！" );
            exit( json_encode($data) );
        }

        if( $row["grade"] == 3 ) 
        {
            if( $rowe["grade"] == 0 ) 
            {
                $data = array( "code" => -1, "msg" => "修改失败权限不足！" );
                exit( json_encode($data) );
            }

            if( $userpass == "" ) 
            {
                if( $DB->query($sqls) ) 
                {
                    $data = array( "code" => 1, "msg" => "修改管理员成功！" );
                    exit( json_encode($data) );
                }

                $data = array( "code" => -1, "msg" => "修改失败！" );
                exit( json_encode($data) );
            }

            if( $DB->query($sql) ) 
            {
                $data = array( "code" => 1, "msg" => "修改管理员成功！" );
                exit( json_encode($data) );
            }

            $data = array( "code" => -1, "msg" => "修改失败！" );
            exit( json_encode($data) );
        }

        break;
    case "agadd":
        $username = daddslashes($_POST["username"]);
        $pwd = daddslashes($_POST["pwd"]);
        $user_qq = daddslashes($_POST["user_qq"]);
        $user_name = daddslashes($_POST["user_name"]);
        $user_lv = daddslashes($_POST["user_lv"]);
        $squan_limit = daddslashes($_POST["squan_limit"]);
        $user_limit = daddslashes($_POST["user_limit"]);
        $user_status = daddslashes($_POST["user_status"]);
        $pass = md5($pwd . $password_hash . "/");
        $user_row = $DB->get_row("select * from ku_user where username = '" . $username . "'");
        if( $user_row ) 
        {
            $data = array( "code" => -1, "msg" => "用户代理账号已存在！" );
            exit( json_encode($data) );
        }

        $sql = "insert into `ku_user` (`username`,`pwd`,`user_qq`,`user_name`,`user_addtime`,`user_limit`,`user_lv`,`squan_limit`,`user_belong`,`user_status`) values ('" . $username . "','" . $pass . "','" . $user_qq . "','" . $user_name . "','" . $date . "','" . $user_limit . "','" . $user_lv . "','" . $squan_limit . "','" . $row["username"] . "','" . $user_status . "')";
        if( $DB->query($sql) ) 
        {
            $data = array( "code" => 1, "msg" => "添加代理成功！" );
            exit( json_encode($data) );
        }

        $data = array( "code" => -1, "msg" => "添加代理失败！" );
        exit( json_encode($data) );
    case "agedit":
        $id = daddslashes($_POST["id"]);
        $username = daddslashes($_POST["username"]);
        $pwd = daddslashes($_POST["pwd"]);
        $user_qq = daddslashes($_POST["user_qq"]);
        $user_name = daddslashes($_POST["user_name"]);
        $number_nc = daddslashes($_POST["number_nc"]);
        $number_zh = daddslashes($_POST["number_zh"]);
        $user_lv = daddslashes($_POST["user_lv"]);
        $squan_limit = daddslashes($_POST["squan_limit"]);
        $user_limit = daddslashes($_POST["user_limit"]);
        $user_belong_money = daddslashes($_POST["user_belong_money"]);
        $user_status = daddslashes($_POST["user_status"]);
        $pass = md5($pwd . $password_hash . "/");
        $user_row = $DB->get_row("select * from ku_user where username = '" . $username . "'");
        $sql = "update `ku_user` set `user_qq` ='" . $user_qq . "',`user_name` ='" . $user_name . "',`number_nc` ='" . $number_nc . "',`number_zh` ='" . $number_zh . "',`user_lv` ='" . $user_lv . "',`squan_limit` ='" . $squan_limit . "',`user_limit` ='" . $user_limit . "',`user_belong_money` ='" . $user_belong_money . "',`user_status` ='" . $user_status . "' where `id`='" . $id . "'";
        $dl_sql = "update `ku_user` set `pwd` ='" . $pass . "',`user_qq` ='" . $user_qq . "',`user_name` ='" . $user_name . "',`number_nc` ='" . $number_nc . "',`number_zh` ='" . $number_zh . "',`user_lv` ='" . $user_lv . "',`squan_limit` ='" . $squan_limit . "',`user_limit` ='" . $user_limit . "',`user_belong_money` ='" . $user_belong_money . "',`user_status` ='" . $user_status . "' where `id`='" . $id . "'";
        if( $user_row["pwd"] == $pass ) 
        {
            $data = array( "code" => -1, "msg" => "新密码不能与旧密码一样，请重新输入！" );
            exit( json_encode($data) );
        }

        if( $pwd == "" ) 
        {
            if( $DB->query($sql) ) 
            {
                $data = array( "code" => 1, "msg" => "修改代理账号成功！" );
                exit( json_encode($data) );
            }

            $data = array( "code" => -1, "msg" => "修改代理账号失败！" );
            exit( json_encode($data) );
        }

        if( $DB->query($dl_sql) ) 
        {
            $data = array( "code" => 1, "msg" => "修改代理账号成功！" );
            exit( json_encode($data) );
        }

        $data = array( "code" => -1, "msg" => "修改代理账号失败！" );
        exit( json_encode($data) );
}

