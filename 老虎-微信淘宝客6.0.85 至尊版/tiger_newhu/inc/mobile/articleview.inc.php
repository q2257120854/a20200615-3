<?php
     global $_W,$_GPC;
		$id=$_GPC['id'];
		$article= pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_article") . " WHERE weid='{$_W['uniacid']}' and id='{$id}'");
        $article['content']=htmlspecialchars_decode($article['content']);
		include $this -> template('article/articleview');	
?>