<?php
global $_W, $_GPC;
$op=$_GPC['op'];  //op=1 优惠商品  OP=2新品推荐
$cfg = $this->module['config'];
$weid=$_W['uniacid'];
$appcfg = pdo_fetch ( 'select * from ' . tablename ("tiger_newhu_appset" ) . " where weid='{$weid}'" );
// tj=1  原来是秒杀,现在当定制的   优惠商品     不是1的商品就是 下面的新品推荐
if($op==1){
	$list = pdo_fetchall("select * from ".tablename($this->modulename."_newtbgoods")." where weid='{$weid}' and tj=1  order by id desc LIMIT 10");
}else{
	$list = pdo_fetchall("select * from ".tablename($this->modulename."_newtbgoods")." where weid='{$weid}' and tj is null order by id desc LIMIT 100");
}


$list1=array();
            foreach($list as $k=>$v){
            				if($cfg['lbratetype']==3){
                            	$ratea=$this->ptyjjl($v['itemendprice'],$v['tkrates'],$cfg);
                            }else{
                            	$ratea=$this->sharejl($v['itemendprice'],$v['tkrates'],$bl,$share,$cfg);
                            } 
                            $list1[$k]['itemtitle']=$v['itemtitle'];               			
                            //$ratea=($v['itemendprice']*$v['tkrates']/100)*$rate/100;             			
                            $list1[$k]['rate']=$ratea;
                            $list1[$k]['weid']=$v['weid'];
                            $list1[$k]['fqcat']=$v['fqcat'];
                            $list1[$k]['zy']=$v['zy'];
                            $list1[$k]['quan_id']=$v['quan_id'];
                            $list1[$k]['itemid']=$v['itemid'];
                            $list1[$k]['itemtitle']=$v['itemtitle'];
                            $list1[$k]['itemshorttitle']=$v['itemshorttitle'];
                            $list1[$k]['itemdesc']=$v['itemdesc'];
                            $list1[$k]['itemprice']=$v['itemprice'];
                            $list1[$k]['itemsale']=$v['itemsale'];
                            $list1[$k]['itemsale2']=$v['itemsale2'];
                            $list1[$k]['conversion_ratio']=$v['conversion_ratio'];
                            $list1[$k]['itempic']=$v['itempic'];
                            $list1[$k]['itemendprice']=$v['itemendprice'];
                            $list1[$k]['shoptype']=$v['shoptype'];
                            $list1[$k]['userid']=$v['userid'];
                            $list1[$k]['sellernick']=$v['sellernick'];
                            $list1[$k]['tktype']=$v['tktype'];
                            $list1[$k]['tkrates']=$v['tkrates'];
                            $list1[$k]['ctrates']=$v['ctrates'];
                            $list1[$k]['cuntao']=$v['cuntao'];
                            $list1[$k]['tkmoney']=$v['tkmoney'];
                            $list1[$k]['tkurl']=$v['tkurl'];
                            $list1[$k]['couponurl']=$v['couponurl'];
                            $list1[$k]['planlink']=$v['planlink'];
                            $list1[$k]['couponmoney']=$v['couponmoney'];
                            $list1[$k]['couponsurplus']=$v['couponsurplus'];
                            $list1[$k]['couponreceive']=$v['couponreceive'];
                            $list1[$k]['couponreceive2']=$v['couponreceive2'];
                            $list1[$k]['couponnum']=$v['couponnum'];
                            $list1[$k]['couponexplain']=$v['couponexplain'];
                            $list1[$k]['couponstarttime']=$v['couponstarttime'];
                            $list1[$k]['couponendtime']=$v['couponendtime'];
                            $list1[$k]['starttime']=$v['starttime'];
                            $list1[$k]['isquality']=$v['isquality']; 
                            $list1[$k]['item_status']=$v['item_status'];
                            $list1[$k]['report_status']=$v['report_status'];
                            $list1[$k]['is_brand']=$v['is_brand'];
                            $list1[$k]['is_live']=$v['is_live'];
                            $list1[$k]['videoid']=$v['videoid'];
                            $list1[$k]['activity_type']=$v['activity_type'];
                            $list1[$k]['createtime']=$v['createtime'];
                            $list1[$k]['lm']=1;//2云商品库    0自己采集   1联盟商品
                
           }
		   if($_GPC[page]>1){
			   exit(json_encode(array('pages' =>ceil(1000/20),'tp'=>$appcfg['tptype'], 'data' =>[],'lm'=>1)));
		   }else{
			   exit(json_encode(array('pages' =>ceil(1000/20),'tp'=>$appcfg['tptype'], 'data' =>$list1,'lm'=>1)));
		   }
		   


