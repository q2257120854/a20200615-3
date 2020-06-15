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
    case "goldcoin":
        $username = daddslashes($_POST["username"]);
        $user_limit = daddslashes($_POST["user_limit"]);
        $user_belong = daddslashes($_POST["user_belong"]);
        $reward = $conf["reward"];
        $reward_gj = $conf["reward_gj"];
        $reward_zs = $conf["reward_zs"];
        $out_trade_no = date("YmdHis") . mt_rand(100, 999);
        if( $userrow["reward_money"] < $reward ) 
        {
            $data = array( "code" => -1, "msg" => "您的金币数量不足请充值后在升级！" );
            exit( json_encode($data) );
        }

        if( $user_limit == 1 ) 
        {
            if( $userrow["user_limit"] == $user_limit ) 
            {
                $data = array( "code" => 1, "msg" => "您已经拥有普通代理权限，请勿重复升级！" );
                exit( json_encode($data) );
            }

            if( $user_limit < $userrow["user_limit"] ) 
            {
                $data = array( "code" => -1, "msg" => "参数有误，升级失败！" );
                exit( json_encode($data) );
            }

            $sql = "UPDATE `ku_user` SET `reward_money` =reward_money-" . $reward . ",`user_limit`= '" . $user_limit . "' WHERE `username` = '" . $username . "'";
            if( $DB->query($sql) ) 
            {
                $DB->query("insert into `ku_cons` (`out_trade_no`,`name`,`reward`,`addtime`,`username`,`money`,`user_belong`,`data`,`status`) values ('" . $out_trade_no . "','升级普通代理','" . $reward . "','" . $date . "','" . $username . "','','" . $user_belong . "','0','0')");
                $data = array( "code" => 1, "msg" => "升级普通代理成功！" );
                exit( json_encode($data) );
            }

            $data = array( "code" => 1, "msg" => "升级普通代理失败！" );
            exit( json_encode($data) );
        }

        if( $user_limit == 2 ) 
        {
            if( $userrow["user_limit"] == $user_limit ) 
            {
                $data = array( "code" => 1, "msg" => "您已经拥有高级代理权限，请勿重复升级！" );
                exit( json_encode($data) );
            }

            if( $userrow["reward_money"] < $reward_gj ) 
            {
                $data = array( "code" => -1, "msg" => "您的金币数量不足请充值后在升级！" );
                exit( json_encode($data) );
            }

            if( $user_limit < $userrow["user_limit"] ) 
            {
                $data = array( "code" => -1, "msg" => "参数有误，升级失败！" );
                exit( json_encode($data) );
            }

            $sql = "UPDATE `ku_user` SET `reward_money` =reward_money-" . $reward_gj . ",`user_limit`= '" . $user_limit . "' WHERE `username` = '" . $username . "'";
            if( $DB->query($sql) ) 
            {
                $DB->query("insert into `ku_cons` (`out_trade_no`,`name`,`reward`,`addtime`,`username`,`money`,`user_belong`,`data`,`status`) values ('" . $out_trade_no . "','升级高级代理','" . $reward_gj . "','" . $date . "','" . $username . "','','" . $user_belong . "','0','0')");
                $data = array( "code" => 1, "msg" => "升级高级代理成功！" );
                exit( json_encode($data) );
            }

            $data = array( "code" => 1, "msg" => "升级高级代理失败！" );
            exit( json_encode($data) );
        }

        if( $user_limit == 3 ) 
        {
            if( $userrow["user_limit"] == $user_limit ) 
            {
                $data = array( "code" => 1, "msg" => "您已经拥有最高权限代理，请勿重复升级！" );
                exit( json_encode($data) );
            }

            if( $userrow["reward_money"] < $reward_zs ) 
            {
                $data = array( "code" => -1, "msg" => "您的金币数量不足请充值后在升级！" );
                exit( json_encode($data) );
            }

            if( $user_limit < $userrow["user_limit"] ) 
            {
                $data = array( "code" => -1, "msg" => "参数有误，升级失败！" );
                exit( json_encode($data) );
            }

            $sql = "UPDATE `ku_user` SET `reward_money` =reward_money-" . $reward_zs . ",`user_limit`= '" . $user_limit . "' WHERE `username` = '" . $username . "'";
            if( $DB->query($sql) ) 
            {
                $DB->query("insert into `ku_cons` (`out_trade_no`,`name`,`reward`,`addtime`,`username`,`money`,`user_belong`,`data`,`status`) values ('" . $out_trade_no . "','升级砖石代理','" . $reward_zs . "','" . $date . "','" . $username . "','','" . $user_belong . "','0','0')");
                $data = array( "code" => 1, "msg" => "升级砖石代理成功！" );
                exit( json_encode($data) );
            }

            $data = array( "code" => 1, "msg" => "升级砖石代理失败！" );
            exit( json_encode($data) );
        }

        break;
    case "squan":
        $user_lv = $userrow["user_lv"];
        $kuhost = daddslashes($_POST["kuhost"]);
        $ku_qq = daddslashes($_POST["ku_qq"]);
        $remarks = daddslashes($_POST["remarks"]);
        if( $userrow["user_limit"] == 1 ) 
        {
            $user_money = $conf["psq_price"];
        }
        else
        {
            if( $userrow["user_limit"] == 2 ) 
            {
                $user_money = $conf["sq_price"];
            }
            else
            {
                if( $userrow["user_limit"] == 3 ) 
                {
                    $user_money = $conf["zssq_price"];
                }

            }

        }

        $out_trade_no = date("YmdHis") . mt_rand(100, 999);
        $tabet = date("Y-m-d", strtotime("+12 month"));
        $usercx = "select * from ku_author where kuhost = '" . $kuhost . "'";
        $usecx = $DB->get_row($usercx);
        $user_IP = ($_SERVER["HTTP_VIA"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"]);
        $user_IP = ($user_IP ? $user_IP : $_SERVER["REMOTE_ADDR"]);
        if( !empty($user_lv) || 0 < $user_lv ) 
        {
            if( $usecx["kuhost"] == $kuhost ) 
            {
                $data = array( "code" => -1, "msg" => "授权域名已存在！" );
                exit( json_encode($data) );
            }

            $moneyuser = 1;
            $useerma = "UPDATE `ku_user` SET `user_lv` =user_lv-" . $moneyuser . " WHERE `username` = '" . $userrow["username"] . "'";
            if( $DB->query($useerma) ) 
            {
                $sql = "insert into `ku_author` (`kuhost`,`ku_qq`,`operation`,`addtime`,`dhtime`,`remarks`,`channel`,`state`) values ('" . $kuhost . "','" . $ku_qq . "','" . $userrow["username"] . "','" . $date . "','" . $tabet . "','" . $remarks . "','2','1')";
                if( $DB->query($sql) ) 
                {
                    $DB->query("insert into `ku_authorlog` (`host`,`time`,`ip`,`channel`,`level`,`name`,`data`) values ('" . $kuhost . "','" . $date . "','" . $user_IP . "','手动添加授权','5','" . $userrow["username"] . "','0')");
                }

                $DB->query("insert into `ku_cons` (`out_trade_no`,`name`,`reward`,`addtime`,`username`,`money`,`user_belong`,`data`,`status`) values ('" . $out_trade_no . "','添加授权','使用授权数1','" . $date . "','" . $userrow["username"] . "','无','" . $userrow["user_belong"] . "','0','0')");
                $data = array( "code" => 1, "msg" => "授权添加成功！" );
                exit( json_encode($data) );
            }

            $data = array( "code" => -1, "msg" => "本次授权失败！" );
            exit( json_encode($data) );
        }

        if( $userrow["reward_money"] < $user_money ) 
        {
            $data = array( "code" => -1, "msg" => "金币余额不足，授权失败！" );
            exit( json_encode($data) );
        }

        if( $usecx["kuhost"] == $kuhost ) 
        {
            $data = array( "code" => -1, "msg" => "授权域名已存在！" );
            exit( json_encode($data) );
        }

        $use_money = "UPDATE `ku_user` SET `reward_money` =reward_money-" . $user_money . " WHERE `username` = '" . $userrow["username"] . "'";
        if( $DB->query($use_money) ) 
        {
            $sql = "insert into `ku_author` (`kuhost`,`ku_qq`,`operation`,`addtime`,`dhtime`,`remarks`,`channel`,`state`) values ('" . $kuhost . "','" . $ku_qq . "','" . $userrow["username"] . "','" . $date . "','" . $tabet . "','" . $remarks . "','2','1')";
            if( $DB->query($sql) ) 
            {
                $DB->query("insert into `ku_authorlog` (`host`,`time`,`ip`,`channel`,`level`,`name`,`data`) values ('" . $kuhost . "','" . $date . "','" . $user_IP . "','手动添加授权','5','" . $userrow["username"] . "','0')");
            }

            $DB->query("insert into `ku_cons` (`out_trade_no`,`name`,`reward`,`addtime`,`username`,`money`,`user_belong`,`data`,`status`) values ('" . $out_trade_no . "','添加授权','" . $user_money . "','" . $date . "','" . $userrow["username"] . "','无','" . $userrow["user_belong"] . "','0','0')");
            $data = array( "code" => 1, "msg" => "授权添加成功！" );
            exit( json_encode($data) );
        }

        $data = array( "code" => -1, "msg" => "授权添加失败！" );
        exit( json_encode($data) );
    case "squanedit":
        $id = daddslashes($_POST["id"]);
        $kuhost = daddslashes($_POST["kuhost"]);
        $ku_qq = daddslashes($_POST["ku_qq"]);
        $remarks = daddslashes($_POST["remarks"]);
        $state = daddslashes($_POST["state"]);
        $usercx = "select * from ku_author where kuhost = '" . $kuhost . "'";
        $usecx = $DB->get_row($usercx);
        $usersq_row = $DB->get_row("select * from ku_author where  operation = '" . $userrow["username"] . "' and id = " . $id . " limit 1");
        $user_IP = ($_SERVER["HTTP_VIA"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"]);
        $user_IP = ($user_IP ? $user_IP : $_SERVER["REMOTE_ADDR"]);
        if( $usersq_row["kuhost"] != $kuhost ) 
        {
            if( $usecx["kuhost"] == $kuhost ) 
            {
                $data = array( "code" => -1, "msg" => "授权域名已存在，请使用新域名！" );
                exit( json_encode($data) );
            }

        }

        if( $userrow["user_limit"] == 0 ) 
        {
            if( $conf["squan_limit"] == $userrow["squan_limit"] ) 
            {
                $data = array( "code" => -1, "msg" => "修改授权次数已经上限，修改失败！" );
                exit( json_encode($data) );
            }

            $sqmoney = 1;
            $squan_money = "UPDATE `ku_user` SET `squan_limit` =squan_limit+" . $sqmoney . " WHERE `username` = '" . $userrow["username"] . "'";
            if( $DB->query($squan_money) ) 
            {
                $sql = "update `ku_author` set `kuhost` ='" . $kuhost . "',`ku_qq` ='" . $ku_qq . "',`remarks` ='" . $remarks . "' where `id`='" . $id . "'";
                if( $DB->query($sql) ) 
                {
                    $data = array( "code" => 1, "msg" => "修改授权成功！" );
                    exit( json_encode($data) );
                }

            }

        }
        else
        {
            $sql = "update `ku_author` set `kuhost` ='" . $kuhost . "',`ku_qq` ='" . $ku_qq . "',`remarks` ='" . $remarks . "',`state` ='" . $state . "' where `id`='" . $id . "'";
            if( $DB->query($sql) ) 
            {
                $DB->query("insert into `ku_authorlog` (`host`,`time`,`ip`,`channel`,`level`,`name`,`data`) values ('" . $kuhost . "','" . $date . "','" . $user_IP . "','修改授权','5','" . $userrow["username"] . "','0')");
                $data = array( "code" => 1, "msg" => "修改授权成功！" );
                exit( json_encode($data) );
            }

        }

        break;
    case "useredit":
        $user_name = daddslashes($_POST["user_name"]);
        $userpwd = daddslashes($_POST["userpwd"]);
        $number_nc = daddslashes($_POST["number_nc"]);
        $number_zh = daddslashes($_POST["number_zh"]);
        $email_code = daddslashes($_POST["email_code"]);
        $passer = md5($userpwd . $password_hash . "/");
        if( $userrow["user_status"] == 2 ) 
        {
            $data = array( "code" => -1, "msg" => "账号已经被冻结所有权限，有疑问请联系管理或上级代理！" );
            exit( json_encode($data) );
        }

        if( empty($_SESSION["evc"]) || $email_code != $_SESSION["evc"] ) 
        {
            $data = array( "code" => -1, "msg" => "验证码不正确！" );
            exit( json_encode($data) );
        }

        if( $passer == $userrow["pwd"] ) 
        {
            $data = array( "code" => -1, "msg" => "新密码不能与旧密码一样，请重新修改！" );
            exit( json_encode($data) );
        }

        if( $userpwd == "" ) 
        {
            $sql = "update `ku_user` set `user_name` ='" . $user_name . "',`number_nc` ='" . $number_nc . "',`number_zh` ='" . $number_zh . "' where `username`='" . $userrow["username"] . "'";
            if( $DB->query($sql) ) 
            {
                $data = array( "code" => 1, "msg" => "修改会员信息成功！" );
                exit( json_encode($data) );
            }

        }
        else
        {
            $sql = "update `ku_user` set `user_name` ='" . $user_name . "',`pwd` ='" . $passer . "',`number_nc` ='" . $number_nc . "',`number_zh` ='" . $number_zh . "' where `username`='" . $userrow["username"] . "'";
            if( $DB->query($sql) ) 
            {
                $data = array( "code" => 1, "msg" => "修改会员信息成功！" );
                exit( json_encode($data) );
            }

        }

        break;
    case "sendEmail":
        $email = daddslashes($_POST["email"]);
        $send_interval = intval($conf["send_interval"]);
        if( $_SESSION["sendemailtime"] ) 
        {
            $timec = time() - $_SESSION["sendemailtime"];
            if( $timec < $send_interval ) 
            {
                $timex = $send_interval - $timec;
                $data = array( "code" => -1, "msg" => "请" . $timex . "秒后再试！" );
                exit( json_encode($data) );
            }

        }

        $to = $email;
        $etitle = $conf["title"] . "信息修改验证码";
        $evc = random(6, 1);
        $_SESSION["evc"] = $evc;
        $_SESSION["sendemailtime"] = time();
        $edata = send_email($to, $etitle, "您的验证码是<font color=red>" . $evc . "</font>，请在" . $send_interval / 60 . "分钟内完成验证！");
        if( $edata ) 
        {
            $data = array( "code" => 1, "msg" => "验证码已经成功发送到您的QQ邮箱！" );
        }
        else
        {
            $data = array( "code" => -1, "msg" => "验证码发送失败！" );
        }

        exit( json_encode($data) );
    case "kamiadd":
        $quantity = daddslashes($_POST["quantity"]);
        $endtime = daddslashes($_POST["endtime"]);
        $username = $userrow["username"];
        $user_belong = $userrow["user_belong"];
        $user_IP = ($_SERVER["HTTP_VIA"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"]);
        $user_IP = ($user_IP ? $user_IP : $_SERVER["REMOTE_ADDR"]);
        $km = getkm($conf["kalman"] . "_", 20);
        if( $userrow["user_limit"] == 2 ) 
        {
            $user_money = $conf["kami_price"];
        }
        else
        {
            if( $userrow["user_limit"] == 3 ) 
            {
                $user_money = $conf["z_kami_price"];
            }

        }

        $out_trade_no = date("YmdHis") . mt_rand(100, 999);
        $cod = "";
        $i = 1;
        while( $i <= 4 ) 
        {
            $cod .= chr(rand(97, 122));
            $i++;
        }
        $money = $user_money * $quantity;
        if( $userrow["user_limit"] == 1 ) 
        {
            $data = array( "code" => -1, "msg" => "权限不足，生成失败！" );
            exit( json_encode($data) );
        }

        if( $userrow["reward_money"] < $money ) 
        {
            $data = array( "code" => -1, "msg" => "金币余额不足，生成失败！" );
            exit( json_encode($data) );
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
        }

        $u_money = "UPDATE `ku_user` SET `reward_money` =reward_money-" . $money . " WHERE `username` = '" . $userrow["username"] . "'";
        if( $DB->query($u_money) ) 
        {
            $log = "insert into `ku_kamilog` (`out_trade_no`,`addtime`,`quantity`,`ip`,`dhtime`,`money`,`status`,`download`,`operator`) values ('" . $out_trade_no . "','" . $date . "','" . $quantity . "','" . $user_IP . "','" . $endtime . "','" . $money . "','0','" . $savesrc . "','" . $username . "')";
            if( $DB->query($log) ) 
            {
                $DB->query("insert into `ku_cons` (`out_trade_no`,`name`,`reward`,`addtime`,`username`,`money`,`user_belong`,`data`,`status`) values ('" . $out_trade_no . "','生成卡密','" . $money . "','" . $date . "','" . $userrow["username"] . "','无','" . $user_belong . "','0','0')");
            }

        }

        if( isset($savesrc) ) 
        {
            $data["savesrc"] = $savesrc;
            $data["savename"] = $filename;
        }

        exit( json_encode($data) );
    case "agentadd":
        $username = daddslashes($_POST["username"]);
        $pwd = daddslashes($_POST["pwd"]);
        $user_qq = daddslashes($_POST["user_qq"]);
        $user_name = daddslashes($_POST["user_name"]);
        $pass = md5($pwd . $password_hash . "/");
        $user_limit = daddslashes($_POST["user_limit"]);
        $userip = ($_SERVER["HTTP_VIA"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"]);
        $userip = ($user_IP ? $user_IP : $_SERVER["REMOTE_ADDR"]);
        $out_trade_no = date("YmdHis") . mt_rand(100, 999);
        if( $userrow["user_limit"] == 2 ) 
        {
            if( $user_limit == 1 ) 
            {
                $daili_money = $conf["gjaddpu_price"];
            }
            else
            {
                if( $user_limit == 2 ) 
                {
                    $daili_money = $conf["gjaddgj_price"];
                }

            }

        }
        else
        {
            if( $userrow["user_limit"] == 3 ) 
            {
                if( $user_limit == 1 ) 
                {
                    $daili_money = $conf["adding_price"];
                }
                else
                {
                    if( $user_limit == 2 ) 
                    {
                        $daili_money = $conf["zsadding_price"];
                    }
                    else
                    {
                        if( $user_limit == 3 ) 
                        {
                            $daili_money = $conf["zsadd_price"];
                        }

                    }

                }

            }

        }

        $userdai = "select * from ku_user where username = '" . $username . "'";
        $rowdai = $DB->get_row($userdai);
        $user_dai = "select * from ku_user where user_qq = '" . $user_qq . "'";
        $row_dai = $DB->get_row($user_dai);
        if( $rowdai["username"] == $username ) 
        {
            $data = array( "code" => -1, "msg" => "代理账号已存在请重新填写！" );
            exit( json_encode($data) );
        }

        if( $row_dai["user_qq"] == $user_qq ) 
        {
            $data = array( "code" => -1, "msg" => "代理联系QQ已存在请重新填写！" );
            exit( json_encode($data) );
        }

        if( $userrow["reward_money"] < $daili_money ) 
        {
            $data = array( "code" => -1, "msg" => "金币不足请使用在线充值，添加失败！" );
            exit( json_encode($data) );
        }

        if( $userrow["user_limit"] == 1 ) 
        {
            $data = array( "code" => -1, "msg" => "权限不足，添加失败！" );
            exit( json_encode($data) );
        }

        $dai_money = "UPDATE `ku_user` SET `reward_money` =reward_money-" . $daili_money . " WHERE `username` = '" . $userrow["username"] . "'";
        if( $DB->query($dai_money) ) 
        {
            $dai_add = "insert into `ku_user` (`username`,`pwd`,`user_qq`,`user_name`,`user_addtime`,`user_ip`,`user_limit`,`money`,`user_belong_money`,`reward_money`,`tix_money`,`user_lv`,`squan_limit`,`user_belong`,`user_status`) values ('" . $username . "','" . $pass . "','" . $user_qq . "','" . $user_name . "','" . $date . "','" . $userip . "','" . $user_limit . "','','','','','','','" . $userrow["username"] . "','0')";
            if( $DB->query($dai_add) ) 
            {
                $DB->query("insert into `ku_cons` (`out_trade_no`,`name`,`reward`,`addtime`,`username`,`money`,`user_belong`,`data`,`status`) values ('" . $out_trade_no . "','添加代理','" . $daili_money . "','" . $date . "','" . $userrow["username"] . "','无','" . $username . "','0','0')");
                $data = array( "code" => 1, "msg" => "添加代理成功！" );
            }
            else
            {
                $data = array( "code" => -1, "msg" => "添加代理失败！" );
            }

        }

        exit( json_encode($data) );
    case "agentedit":
        $id = daddslashes($_POST["id"]);
        $pwd = daddslashes($_POST["pwd"]);
        $user_qq = daddslashes($_POST["user_qq"]);
        $user_name = daddslashes($_POST["user_name"]);
        $user_limit = daddslashes($_POST["user_limit"]);
        $user_status = daddslashes($_POST["user_status"]);
        $passer = md5($pwd . $password_hash . "/");
        $daili_row = $DB->get_row("select * from ku_user where  user_belong = '" . $userrow["username"] . "' and id = " . $id . " limit 1");
        if( $userrow["user_limit"] == 2 ) 
        {
            if( $user_limit == 1 ) 
            {
                $daili_money = $conf["gjaddpu_price"];
            }
            else
            {
                if( $user_limit == 2 ) 
                {
                    $daili_money = $conf["gjaddgj_price"];
                }

            }

        }
        else
        {
            if( $userrow["user_limit"] == 3 ) 
            {
                if( $user_limit == 1 ) 
                {
                    $daili_money = $conf["adding_price"];
                }
                else
                {
                    if( $user_limit == 2 ) 
                    {
                        $daili_money = $conf["zsadding_price"];
                    }
                    else
                    {
                        if( $user_limit == 3 ) 
                        {
                            $daili_money = $conf["zsadd_price"];
                        }

                    }

                }

            }

        }

        $out_trade_no = date("YmdHis") . mt_rand(100, 999);
        if( $daili_row["user_status"] == 1 ) 
        {
            $data = array( "code" => -1, "msg" => "该代理账号已经被封禁，无法修改！" );
            exit( json_encode($data) );
        }

        if( $user_limit == $daili_row["user_limit"] ) 
        {
            if( $pwd == "" ) 
            {
                $sql = "update `ku_user` set `user_qq` ='" . $user_qq . "',`user_name` ='" . $user_name . "',`user_limit` ='" . $user_limit . "',`user_status` ='" . $user_status . "' where `user_belong`='" . $userrow["username"] . "'and id = " . $id . "";
                if( $DB->query($sql) ) 
                {
                    $data = array( "code" => 1, "msg" => "修改代理信息成功！" );
                    exit( json_encode($data) );
                }

                $data = array( "code" => -1, "msg" => "修改代理信息失败！" );
                exit( json_encode($data) );
            }

            $sql = "update `ku_user` set `user_qq` ='" . $user_qq . "',`user_name` ='" . $user_name . "',`user_limit` ='" . $user_limit . "',`user_status` ='" . $user_status . "',`pwd` ='" . $passer . "' where `user_belong`='" . $userrow["username"] . "'and id = " . $id . "";
            if( $DB->query($sql) ) 
            {
                $data = array( "code" => 1, "msg" => "修改代理信息成功！" );
                exit( json_encode($data) );
            }

            $data = array( "code" => -1, "msg" => "修改代理信息失败！" );
            exit( json_encode($data) );
        }

        $dai_money = "UPDATE `ku_user` SET `reward_money` =reward_money-" . $daili_money . " WHERE `username` = '" . $userrow["username"] . "'";
        if( $DB->query($dai_money) ) 
        {
            if( $pwd == "" ) 
            {
                $sql = "update `ku_user` set `user_qq` ='" . $user_qq . "',`user_name` ='" . $user_name . "',`user_limit` ='" . $user_limit . "',`user_status` ='" . $user_status . "' where `user_belong`='" . $userrow["username"] . "'and id = " . $id . "";
                if( $DB->query($sql) ) 
                {
                    $DB->query("insert into `ku_cons` (`out_trade_no`,`name`,`reward`,`addtime`,`username`,`money`,`user_belong`,`data`,`status`) values ('" . $out_trade_no . "','修改代理','" . $daili_money . "','" . $date . "','" . $userrow["username"] . "','无','" . $daili_row["username"] . "','0','0')");
                    $data = array( "code" => 1, "msg" => "修改代理信息成功！" );
                    exit( json_encode($data) );
                }

                $data = array( "code" => -1, "msg" => "修改代理信息失败！" );
                exit( json_encode($data) );
            }

            $sql = "update `ku_user` set `user_qq` ='" . $user_qq . "',`user_name` ='" . $user_name . "',`user_limit` ='" . $user_limit . "',`user_status` ='" . $user_status . "',`pwd` ='" . $passer . "' where `user_belong`='" . $userrow["username"] . "'and id = " . $id . "";
            if( $DB->query($sql) ) 
            {
                $DB->query("insert into `ku_cons` (`out_trade_no`,`name`,`reward`,`addtime`,`username`,`money`,`user_belong`,`data`,`status`) values ('" . $out_trade_no . "','修改代理','" . $daili_money . "','" . $date . "','" . $userrow["username"] . "','无','" . $daili_row["username"] . "','0','0')");
                $data = array( "code" => 1, "msg" => "修改代理信息成功！" );
                exit( json_encode($data) );
            }

            $data = array( "code" => -1, "msg" => "修改代理信息失败！" );
            exit( json_encode($data) );
        }

        break;
    case "carrypay":
        $money = daddslashes($_POST["money"]);
        $pay_money = $conf["carrypay"];
        $carrypay_money = $conf["carrypay_money"];
        $js_pay = sprintf("%.3f", ($money * $pay_money) / 100);
        $user_money = $money - $js_pay;
        $out_trade_no = date("YmdHis") . mt_rand(100, 999);
        $pay_row = $DB->get_row("select * from ku_paycarry where  username = '" . $userrow["username"] . "' and state = 0");
        if( $pay_row ) 
        {
            $data = array( "code" => -1, "msg" => "你有提现申请处于未处理状态，提现申请失败！" );
            exit( json_encode($data) );
        }

        if( $money < $carrypay_money ) 
        {
            $data = array( "code" => -1, "msg" => "提现提交失败，最低" . $carrypay_money . "元起提！" );
            exit( json_encode($data) );
        }

        if( $userrow["money"] < $money ) 
        {
            $data = array( "code" => -1, "msg" => "提现余额不足，请重新输入！" );
            exit( json_encode($data) );
        }

        $ti_money = "UPDATE `ku_user` SET `money` =money-" . $money . " WHERE `username` = '" . $userrow["username"] . "'";
        if( $DB->query($ti_money) ) 
        {
            $DB->query("insert into `ku_paycarry` (`out_trade_no`,`number_nc`,`number_zh`,`username`,`addtime`,`money`,`fee_money`,`state`) values ('" . $out_trade_no . "','" . $userrow["number_nc"] . "','" . $userrow["number_zh"] . "','" . $userrow["username"] . "','" . $date . "','" . $user_money . "','" . $js_pay . "','0')");
            $data = array( "code" => 1, "msg" => "本次提现提交成功！" );
            exit( json_encode($data) );
        }

        $DB->query("insert into `ku_paycarry` (`out_trade_no`,`number_nc`,`number_zh`,`username`,`addtime`,`money`,`fee_money`,`state`) values ('" . $out_trade_no . "','" . $userrow["number_nc"] . "','" . $userrow["number_zh"] . "','" . $userrow["username"] . "','" . $date . "','" . $user_money . "','" . $js_pay . "','2')");
        $data = array( "code" => -1, "msg" => "本次提现提交失败！" );
        exit( json_encode($data) );
    case "workadd":
        $title = daddslashes($_POST["title"]);
        $Product = daddslashes($_POST["Product"]);
        $comp = daddslashes($_POST["comp"]);
        $user_IP = ($_SERVER["HTTP_VIA"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"]);
        $user_IP = ($user_IP ? $user_IP : $_SERVER["REMOTE_ADDR"]);
        $add = "insert into `ku_complain` (`title`,`content`,`type`,`username`,`addtime`,`ip`,`qq`,`status`) values ('" . $title . "','" . $comp . "','" . $Product . "','" . $userrow["username"] . "','" . $date . "','" . $user_IP . "','" . ${$userrow["user_qq"]} . "','0')";
        if( $DB->query($add) ) 
        {
            $data = array( "code" => 1, "msg" => "工单提交成功，72小时左右处理完成！" );
        }
        else
        {
            $data = array( "code" => -1, "msg" => "工单提交失败！" );
        }

        exit( json_encode($data) );
    case "work":
        $id = daddslashes($_POST["id"]);
        $comp = daddslashes($_POST["comp"]);
        $work_cx = $DB->get_row("select * from ku_complain where  username = '" . $userrow["username"] . "' and id = " . $id . "");
        $work = "update `ku_complain` set `content` ='" . $comp . "',`status` ='0' where `username`='" . $userrow["username"] . "' and id = " . $id . "";
        if( $work_cx["status"] == 0 ) 
        {
            $data = array( "code" => -1, "msg" => "该工单未处理,回复工单提交失败！" );
            exit( json_encode($data) );
        }

        if( $DB->query($work) ) 
        {
            $data = array( "code" => 1, "msg" => "回复工单提交成功，72小时左右处理完成！" );
        }
        else
        {
            $data = array( "code" => -1, "msg" => "回复工单提交失败！" );
        }

        exit( json_encode($data) );
}

