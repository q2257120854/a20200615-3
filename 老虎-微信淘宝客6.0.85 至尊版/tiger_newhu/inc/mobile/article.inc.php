<?php
     global $_W,$_GPC;
		$type=$_GPC['type'];
		$lx=$_GPC['lx'];
		
		if($lx==1){
			$articletype= pdo_fetchall("SELECT * FROM " . tablename("tiger_newhu_articletype") . " WHERE weid='{$_W['uniacid']}'");
			foreach($articletype as $k=>$v){
				$type[$k]['id']=$v['id'];
				$type[$k]['title']=$v['title'];
				$type[$k]['picurl']=tomedia($v[picurl]);
			}
			$articletj1= pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_article") . " WHERE weid='{$_W['uniacid']}' and tj=1");
			
			$articletj2= pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_article") . " WHERE weid='{$_W['uniacid']}' and tj=2");
			
			
			if(empty($articletj2)){
				$articletj2="";
			}else{
				$articletj2['picurl']=tomedia($articletj2['picurl']);
				$articletj2['createtime']=date('Y-m-d',$articletj2['createtime']);
				$articletj2['content']=htmlspecialchars_decode($articletj2['content']);
			}
			if(empty($articletj1)){
				$articletj1="";
			}else{
				$articletj1['picurl']=tomedia($articletj1['picurl']);
				$articletj1['createtime']=date('Y-m-d',$articletj1['createtime']);
				$articletj1['content']=htmlspecialchars_decode($articletj1['content']);
			}
			exit(json_encode(array('articletj1' =>$articletj1, 'articletj2' =>$articletj2,'articletype' => $type)));
		}
		
//		//ajax请求开始
		if($lx==2){
			$page=$_GPC['page'];
			if(empty($page)){
				$page=1;
			}
			
			if(!empty($type)){
				$where=" and type='{$type}'";
			}else{
				$where="";
			}
			
			$pindex = max(1, intval($page));
			$psize = 10;
	        $list1 = pdo_fetchall("select * from ".tablename($this->modulename."_article")." where weid='{$_W['uniacid']}' {$where}  order by id desc LIMIT " . ($pindex - 1) * $psize . ",{$psize}");

			$total = pdo_fetchcolumn("SELECT COUNT(*) FROM " . tablename($this->modulename."_article")." where weid='{$_W['uniacid']}' {$where} ");
			$pager = pagination($total, $pindex, $psize);
			foreach($list1 as $k=>$v){
				$list[$k]['id']=$v['id'];
				$list[$k]['title']=$v['title'];
				$list[$k]['picurl']=tomedia($v['picurl']);
				$list[$k]['videourl']=$v['videourl'];
				$list[$k]['click']=$v['click'];
				$list[$k]['createtime']=date('m-d',$v['createtime']);
				$list[$k]['wlurl']=$v['wlurl'];
				$list[$k]['content']=htmlspecialchars_decode($v['content']);
			}
			
			exit(json_encode(array('pages' =>ceil($total/10), 'data' => $list)));
		}

		include $this -> template('article/article');	
?>