<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <!-- Latest compiled and minified CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="../../public/css/init.css">
</head>
<body>

<div class="zaly_container">
    <div class="zaly_login zaly_login_by_phone">
        <div class="initDiv " style="margin-top:2rem;">
            <div class="initHeader" style="">
                检测站点信息
            </div>
            <div class="initHeader-title">
                环境基础检测
            </div>
            <div class="init_check_info margin-top5 " isLoad="<?php echo $isLoadOpenssl; ?>">
                <div class="init_check">
                    1.PHP版本大于5.6
                </div>
                <div class="init_check_result">
                    <?php if ($isPhpVersionValid) {
                        echo " <img src='../../public/img/init/check_success.png' />
";
                    } else {
                        echo "<img src='../../public/img//init/check_failed.png'  />";
                    } ?>
                </div>
            </div>

            <div class="init_check_info  ext_open_ssl" isLoad="<?php echo $isLoadOpenssl; ?>">
                <div class="init_check">
                    2.是否支持OpenSSL
                </div>
                <div class="init_check_result">
                    <?php if ($isLoadOpenssl == 1) {
                        echo " <img src='../../public/img/init/check_success.png'/>
";
                    } else {
                        echo "<img src='../../public/img/msg/check_failed.png' />";
                    } ?>
                </div>
            </div>

            <div class="init_check_info justify-content-left  ext_pdo_sqlite" isLoad="<?php echo $isLoadPDOSqlite; ?>">
                <div class="init_check">
                    3.是否安装PDO_Sqlite
                </div>
                <div class="init_check_result">
                    <?php if ($isLoadPDOSqlite == 1) {
                        echo " <img src='../../public/img/init/check_success.png' />";
                    } else {
                        echo "<img src='../../public/img/msg/check_failed.png' />";
                    } ?>
                </div>
            </div>

            <div class="init_check_info justify-content-left  ext_pdo_mysql" isLoad="<?php echo $isLoadPDOMysql; ?>"
                 style="display:none;">
                <div class="init_check">
                    3.是否安装PDO_Mysql
                </div>
                <div class="init_check_result">
                    <?php if ($isLoadPDOMysql == 1) {
                        echo " <img src='../../public/img/init/check_success.png' />";
                    } else {
                        echo "<img src='../../public/img/msg/check_failed.png' />";
                    } ?>
                </div>
            </div>

            <div class="init_check_info justify-content-left ext_curl" isLoad="<?php echo $isLoadCurl; ?>">
                <div class="init_check">
                    4.是否安装Curl
                </div>
                <div class="init_check_result">
                    <?php if ($isLoadCurl == 1) {
                        echo " <img src='../../public/img/init/check_success.png'/>";
                    } else {
                        echo "<img src='../../public/img/msg/check_failed.png'  />";
                    } ?>
                </div>
            </div>

            <div class="init_check_info justify-content-left  ext_is_write" isLoad="<?php echo $isWritePermission; ?>">
                <div class="init_check">
                    5.当前目录写权限
                </div>
                <div class="init_check_result">
                    <?php if ($isWritePermission == 1) {
                        echo " <img src='../../public/img/init/check_success.png'/>";
                    } else {
                        echo "<img src='../../public/img/msg/check_failed.png'  />";
                    } ?>
                </div>
            </div>

            <div class="init_check_info input_div justify-content-between ">
                <div class="init_check">
                    6.请选择登录方式：
                </div>
                <div class="init_check_result choose_login_type">
                    <select id="verifyPluginId">
                        <option class="selectOption" pluginId="102">本地账户密码校验</option>
                    </select>
                </div>
            </div>
            <div class="initHeader-setting">
                邀请码
            </div>
            <div class="initHeader-uic">
                <input type="text" class="uic-input" placeholder="000000, 纯数字，6-20位">
            </div>
            <div class="initHeader-setting">
                安装程序支持的配置
            </div>

            <div class="initHeader-sql">
                <div class="radioDiv" onclick="clickRadio('sqlite')">sqlite <span><img
                                src="../../public/img/init/select.png" class="dbType radioImg sqliteRadio" data="sqlite"
                                isSelected="1"> </span></div>
                <div class="radioDiv" onclick="clickRadio('mysql')">mysql <span><img
                                src="../../public/img/init/un_select.png" class="dbType radioImg mysqlRadio"
                                data="mysql" isSelected="0"></span></div>
            </div>
            <div class="mysql-div">
                <!--       sql address         -->
                <div class="sql-setting mysql-setting">
                    <input type="text" class="sql-input sql-dbHost" placeholder="数据库地址">
                    <img src="../../public/img/init/failed.png" class="failed_img dbHostFailed">
                </div>
                <!--       sql port         -->
                <div class="sql-setting mysql-setting">
                    <input type="text" class="sql-input sql-dbPort" placeholder="数据库端口号,默认：3306">
                    <img src="../../public/img/init/failed.png" class="failed_img dbPortFailed">
                </div>
                <!--      sql name          -->
                <div class="sql-setting mysql-setting">
                    <input type="text" class="sql-input sql-dbName" placeholder="数据库名称">
                    <img src="../../public/img/init/failed.png" class="failed_img dbNameFailed">
                </div>
                <!--      sql user          -->
                <div class="sql-setting mysql-setting">
                    <input type="text" class="sql-input sql-dbUserName" placeholder="用户名">
                    <img src="../../public/img/init/failed.png" class="failed_img dbUserNameFailed">
                </div>
                <!--      sql password          -->
                <div class="sql-setting mysql-setting">
                    <input type="text" class="sql-input sql-dbPassword" placeholder="数据库密码">
                    <img src="../../public/img/init/failed.png" class="failed_img dbPasswordFailed">
                </div>
            </div>
            <div class="sqlite-div">
                本地文件
                <select id="sqlite-file">
                    <option class="selectOption" fileName="">创建新Sqlite数据库</option>
                    <?php foreach ($dbFiles as $file) { ?>
                        <option class="selectOption" fileName="<?php echo $file ?>"><?php echo $file ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="errorInfo">
            </div>

            <div class="d-flex flex-row justify-content-center " style="text-align: center;margin-bottom: 7rem;">
                <button type="button" class="btn login_button"><span class="span_btn_tip">初始化数据</span></button>
            </div>
        </div>
    </div>

</div>


<script src="../../public/js/jquery.min.js"></script>
<script>
    dbType = "sqlite";

    function clickRadio(radioValue) {
        console.log("radioValue ==" + radioValue);
        var className = "." + radioValue + "Radio";
        var isSelected = $(className).attr("isSelected");
        console.log("isSelected ==" + isSelected);
        var src;
        var unSelectSrc = "../../public/img/init/un_select.png";

        if (radioValue == "mysql") {
            $(".sqliteRadio").attr("isSelected", "0");
            $(".sqliteRadio").attr("src", unSelectSrc);
            $(".mysql-div")[0].style.display = "block";
            $(".sqlite-div")[0].style.display = "none";

            $(".ext_pdo_sqlite").hide();
            $(".ext_pdo_mysql").show();
        } else {
            $(".mysqlRadio").attr("isSelected", "0");
            $(".mysqlRadio").attr("src", unSelectSrc);
            $(".sqlite-div")[0].style.display = "block";
            $(".mysql-div")[0].style.display = "none";

            $(".ext_pdo_sqlite").show();
            $(".ext_pdo_mysql").hide();
        }
        if (isSelected == "1") {
            src = unSelectSrc;
            $(className).attr("isSelected", "0");
            dbType = ""
        } else {
            src = "../../public/img/init/select.png";
            $(className).attr("isSelected", "1");
            dbType = radioValue
        }
        $(className).attr("src", src);
    }


    $(document).on("click", ".login_button", function () {
        var isLoadOpenssl = $(".ext_open_ssl").attr("isLoad");
        var isPdoSqlite = $(".ext_pdo_sqlite").attr("isLoad");
        var isCurl = $(".ext_curl").attr("isLoad");
        var isWrite = $(".ext_is_write").attr("isLoad");

        if (isLoadOpenssl != 1) {
            alert("请先安装openssl");
            return false;
        }
        if (isPdoSqlite != 1) {
            alert("请先安装pdo_sqlite");
            return false;
        }
        if (isCurl != 1) {
            alert("请先安装is_curl");
            return false;
        }

        if (isWrite != 1) {
            alert("当前目录不可写");
            return false;
        }

        var selector = document.getElementById('verifyPluginId');
        var pluginId = $(selector[selector.selectedIndex]).attr("pluginId");
        console.log("dbType ==" + dbType);
        if (dbType == "") {
            alert("请选择数据库类型");
            return;
        }
        var uic = $(".uic-input").val();
        if (dbType == 'mysql') {
            var dbHost = $(".sql-dbHost").val();
            var dbPort = $(".sql-dbPort").val();
            var dbUserName = $(".sql-dbUserName").val();
            var dbPassword = $(".sql-dbPassword").val();
            var dbName = $(".sql-dbName").val();
            var isFocus = false;
            if (dbName == "" || dbName.length < 1) {
                $(".dbNameFailed")[0].style.display = "block";
                isFocus = true;
                $(".sql-dbName").focus();
            }

            if (dbUserName == "" || dbUserName.length < 1) {
                $(".dbUserNameFailed")[0].style.display = "block";
                if (isFocus == false) {
                    $(".sql-dbUserName").focus();
                    isFocus = true;
                    $(".dbNameFailed")[0].style.display = "none";
                }
            }

            if (dbPassword == "" || dbPassword.length < 1) {
                $(".dbPasswordFailed")[0].style.display = "block";
                if (isFocus == false) {
                    $(".sql-dbPassword").focus();
                    isFocus = true;
                    $(".dbNameFailed")[0].style.display = "none";
                    $(".dbUserNameFailed")[0].style.display = "none";
                }
            }

            if (dbPort == "" || dbPort.length < 1) {
                dbPort = 3306;
            }

            if (dbHost == "" || dbHost.length < 1) {
                $(".dbHostFailed")[0].style.display = "block";
                if (isFocus == false) {
                    $(".sql-dbHost").focus();
                    isFocus = true;
                    $(".dbPortFailed")[0].style.display = "none";
                    $(".dbNameFailed")[0].style.display = "none";
                    $(".dbHostFailed")[0].style.display = "none";
                    $(".dbPasswordFailed")[0].style.display = "none";
                }
            }

            if (isFocus == true) {
                return;
            }
            $(".dbPasswordFailed")[0].style.display = "none";

            var data = {
                pluginId: pluginId,
                dbHost: dbHost,
                dbPort: dbPort,
                dbUserName: dbUserName,
                dbPassword: dbPassword,
                dbName: dbName,
                dbType: dbType,
                uic: uic
            }
        } else {
            var selector = document.getElementById('sqlite-file');
            var sqliteFileName = $(selector[selector.selectedIndex]).attr("fileName");

            var data = {
                pluginId: pluginId,
                dbType: dbType,
                sqliteDbFile: sqliteFileName,
                uic: uic
            };
        }

        $.ajax({
            method: "POST",
            url: "./index.php?action=installDB",
            data: data,
            success: function (resp) {
                console.log("init db sqlite " + resp);
                if (resp == "success") {
                    window.location.href = "./index.php?action=page.logout";
                } else {
                    $(".errorInfo").html(resp);
                }
            }
        });
    });


</script>
</body>
</html>
