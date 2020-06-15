<?php
     global $_W,$_GPC;
		$type=$_GPC['type'];//  2APP
		$pttype=$_GPC['pttype'];//1 公告 2帮助中心 3新手攻略 4品牌故事
		$op=$_GPC['op'];
		// if(empty($pttype)){
		// 	$pttype=0;
		// }
		// if(empty($type)){
		// 	$type=1;			
		// }		
		
		
//		//列表有分页
		if($op=='pageajax'){
			$pindex = max(1, intval($_GPC['page']));
			$psize = 100;
	        $list1 = pdo_fetchall("select * from ".tablename($this->modulename."_news")." where weid='{$_W['uniacid']}' and pttype='{$pttype}' and type='{$type}'  order by id desc LIMIT " . ($pindex - 1) * $psize . ",{$psize}");
			$total = pdo_fetchcolumn("SELECT COUNT(*) FROM " . tablename($this->modulename."_news")." where weid='{$_W['uniacid']}' and pttype='{$pttype}'  and type='{$type}'  ");
			$pager = pagination($total, $pindex, $psize);
			foreach($list1 as $k=>$v){
				$list[$k]['px']=$v['px'];
				$list[$k]['picurl']=tomedia($v['picurl']);
				$list[$k]['pttype']=$v['pttype'];
				$list[$k]['type']=$v['type'];
				$list[$k]['title']=$v['title'];
				$list[$k]['content']=htmlspecialchars_decode($v['content']);
				$list[$k]['url']=$v['url'];
				$list[$k]['createtime']=$v['createtime'];
			}
			exit(json_encode(array('pages' =>ceil($total/10), 'data' => $list)));
		}
		// 首页显示4个
		if($op=='newindex'){		
		$list1 = pdo_fetchall("select * from ".tablename($this->modulename."_news")." where weid='{$_W['uniacid']}' and pttype='{$pttype}' and type='{$type}'  order by id desc LIMIT 4");
		foreach($list1 as $k=>$v){
			$list[$k]['px']=$v['px'];
			$list[$k]['picurl']=tomedia($v['picurl']);
			$list[$k]['pttype']=$v['pttype'];
			$list[$k]['type']=$v['type'];
			$list[$k]['title']=$v['title'];
			$list[$k]['content']=htmlspecialchars_decode($v['content']);
			$list[$k]['url']=$v['url'];
			$list[$k]['createtime']=$v['createtime'];
		}
		exit(json_encode(array('pages' =>ceil($total/10), 'data' => $list)));
		}

?>