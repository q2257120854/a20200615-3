<?php
     global $_W,$_GPC;
		$type=$_GPC['type'];
		$articletype= pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_articletype") . " WHERE weid='{$_W['uniacid']}' and id='{$type}'");

		include $this -> template('article/articlelist');	
?>