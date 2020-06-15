<?php
!defined('IN_ONEZ') && exit('Access Denied');
#初始化数据库信息
//$G['this']->db_init('表名','字符型','数字型','金额型');
$G['this']->db_init('member','grade,username,password,mobile','appid,upid','amt,amt_pay,amt_charge,amt_lock');
