<?php
use think\Db;
use think\Request; //获取请求类型
use think\Session;
use app\api\model\Send; 
 
function gettree($data, $tid,$num=0){
	$num+=1;
	$nbsp='';
	if($tid!=0){
		$nbsp.=$nbsp.'&nbsp;&nbsp;┠&nbsp;&nbsp';
	}
	$html = '';
	$hide=array('0'=>'隐藏','1'=>'显示');
	$hides=array('1'=>'隐藏','0'=>'显示');
	foreach($data as $k => $v){
		if($v['tid'] == $tid){
			$html 	.= "\r\n<tr id=\"id".$v['id']."\" class=\"gradeA footable-even category".$num."\">";
			$html 	.=	"<td class=\"categoryTitle\">".$nbsp.$v['id']."</td>";
			$html 	.=	"<td class=\"categoryTitle\">".$nbsp.$v['title']."</td>";
			$html 	.=	"<td>".$v['controller']."</td>";
			$html 	.=	"<td>".$v['function']."</td>";
			$html 	.=	"<td>".$hide[$v['hide']]."</td>";
			$html 	.=	'<td><div class="btn-group">';
			$html 	.=	'<button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">操作 <span class="caret"></span></button><ul class="dropdown-menu">';
			$html 	.=	"<li><a href=".url('add',['id'=>$v['id']]).">修改</a></li><li><a href=".url('hide',['id'=>$v['id']]).">".$hides[$v['hide']]."</a></li>".'<li class="divider"></li>';
			$html  	.=	"<li><a href=\"javascript:;\" onclick=\"del(".$v['id'].")\">删除</a></li></td></tr>";
			$html 	.= getTree($data, $v['id'],$num);
			$html 	=$html;
		}
	}
	return $html;
}
function category($data, $tid,$selected,$num=0){
	$num+=1;
	$nbsp='';
	$selecteds='';
	if($num!=1){
		for ($i=1; $i <$num ; $i++) { 
			$nbsp.='&nbsp;&nbsp;&nbsp;&nbsp;';
		}
		$nbsp.='┠&nbsp;&nbsp;';
	}
	$html = '';
	foreach($data as $k => $v){
		if($v['tid'] == $tid){
			if($selected==$v['id']){
				$selecteds='selected="selected"';
			}else{
				$selecteds='';
			}
			$html 	.=	"\r\n".'<option value="'.$v['id'].'" '.$selecteds.'>'.$nbsp.$v['title'].'</option>';
			$html 	.= category($data, $v['id'],$selected,$num);
			$html 	=$html;
		}
	}
	return $html;
}
//输出option列表形式
function get_tree_option($data, $tid) {
    $stack = array($tid);
    $child = array();
    $added = array();
    $options = array();
    $obj = array();
    $loop = 0;
    $depth = -1;
    foreach($data as $node) {
        $pid = $node['tid'];
        if(!isset($child[$pid])) {
            $child[$pid] = array();
        }
        array_push($child[$pid], $node['id']);
        $obj[$node['id']] = $node;
    }

    while (count($stack) > 0) {    
        $id = $stack[0];
        $flag = false;
        $node = isset($obj[$id]) ? $obj[$id] : null;
        if (isset($child[$id])) {
            for($i = count($child[$id]) - 1; $i >= 0; $i--) {
                array_unshift($stack, $child[$id][$i]);
            }
            $flag = true;
        }
        if ($id != $tid && $node && !isset($added[$id])) {
            $node['depth'] = $depth;
            $options[] = $node;
            $added[$id] = true;
        }
        if($flag == true){
            $depth++;
        } else {
            if($node) {
                for ($i = count($child[$node['tid']]) - 1; $i >= 0; $i--) {
                    if ($child[$node['tid']][$i] == $id) {
                        array_splice($child[$node['tid']], $i, 1);
                        break;
                    }
                } 
                if(count($child[$node['tid']]) == 0) {
                    $child[$node['tid']] = null;
                    $depth--;
                }
            }
            array_shift($stack);
        }
        $loop++;
        if($loop > 5000) return $options;
    }
    unset($child);
    unset($obj);
    return $options;
}
// 百度编辑器
function ueditor($name=''){
	if(!$name){$name='content';}
	$html='<script type="text/javascript" charset="utf-8" src="__PLUGINS__ueditor/ueditor.config.js"></script>';
	$html.='<script type="text/javascript" charset="utf-8" src="__PLUGINS__ueditor/ueditor.all.min.js"></script>';
	$html.='<script type="text/javascript" src="__PLUGINS__ueditor/lang/zh-cn/zh-cn.js"></script>';
	$html.='<script type="text/javascript">';
	$html.="var ue=UE.getEditor('".$name."');";
	$html.='</script>';
	return $html;
}
 
 // 保留价格后面2位数
function _money($money){
    if(empty($money)){
        return '0.00';
    }
   return number_format($money/100,2,'.',''); 
}


function _tieba_jiangli($user,$id){
	
		$yaoqing=config()['yaoqing'];
		$uid=$user['id'];   // 我的id
		$s1=$user['yaoqing']['s1']; // 师傅id
		$s0=$user['yaoqing']['s0']; // 师公id
		if(!$id){
			return ['status'=>0,'error'=>"帖子不存在"];
		}
		$content='创建贴吧 id:'.$id.' 奖励金币';
		
		
		$jinbi = _get_jinbi($yaoqing['jinbi_tieba_create']);
		if(!$jinbi){
			return ['status'=>0,'error'=>"没设置贴吧奖励"];
		}
		
		$ret = array();
		$ret['extend'] = 0;
		$tips_jinbi = $jinbi/1;
		$ret['tips'] = '加'.$tips_jinbi.'金币';
		$ret['title'] = '贴吧创建';
		$db=_moneyDb([
                        'uid'=>$uid,
                        'jinbi'=>[
                            'money'=>$jinbi,
                            'content'=>$content
                        ]
        ]);
		if($db){
			$jinbi_s1 = _get_jinbi($yaoqing['jinbi_tieba_create_s1']);
			$tips_jinbi_s1 = $jinbi_s1/1;
			$content_s1='徒弟创建贴吧 id:'.$id.'奖励金币';
			$jinbi_s0 = _get_jinbi($yaoqing['jinbi_tieba_create_s0']);
			$tips_jinbi_s0 = $jinbi_s0/1;
			$content_s0='徒孙创建贴吧 id:'.$id.'奖励金币';
			if($jinbi_s1 || $jinbi_s0){
				if($s1){_moneyDb(['uid'=>$s1,'jinbi'=>['money'=>$jinbi_s1,'content'=>$content_s1]]);}
				if($s0){_moneyDb(['uid'=>$s0,'jinbi'=>['money'=>$jinbi_s0,'content'=>$content_s0]]);}
			}
						/*师傅 师公奖励*/
						
			$ret['status'] = 1;
			$ret['jinbi'] = $jinbi;
            return $ret;
			
			
	    }else{
			return ['status'=>0,'error'=>"保存数据失败"];
		}
		
}


function _tiezi_jiangli($user,$id){
	    
		$yaoqing=config()['yaoqing'];
		$uid=$user['id'];   // 我的id
		$s1=$user['yaoqing']['s1']; // 师傅id
		$s0=$user['yaoqing']['s0']; // 师公id
		if(!$id){
			return ['status'=>0,'error'=>"帖子不存在"];
		}
		$content='发布帖子 id:'.$id.' 奖励金币';
		
		
		$jinbi = _get_jinbi($yaoqing['jinbi_tiezi_create']);
		if(!$jinbi){
			return ['status'=>0,'error'=>"没设置贴吧奖励"];
		}
		
		$limit = $yaoqing['jinbi_tiezi_limit'];
		if($limit){
		$count=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%发布帖子 id:%']])->whereTime('time','today')->count();
		  if($count >= $limit){
			return ['status'=>0,'error'=>"已达奖励上限"];
		  }
		}
		
		$ret = array();
		$ret['extend'] = 0;
		$tips_jinbi = $jinbi/1;
		$ret['tips'] = '加'.$tips_jinbi.'金币';
		$ret['title'] = '贴子发布';
		$db=_moneyDb([
                        'uid'=>$uid,
                        'jinbi'=>[
                            'money'=>$jinbi,
                            'content'=>$content
                        ]
        ]);
		if($db){
			$jinbi_s1 = _get_jinbi($yaoqing['jinbi_tiezi_create_s1']);
			$tips_jinbi_s1 = $jinbi_s1/1;
			$content_s1='徒弟发布帖子 id:'.$id.'奖励金币';
			$jinbi_s0 = _get_jinbi($yaoqing['jinbi_tiezi_create_s0']);
			$tips_jinbi_s0 = $jinbi_s0/1;
			$content_s0='徒孙发布帖子 id:'.$id.'奖励金币';
			if($jinbi_s1 || $jinbi_s0){
				if($s1){_moneyDb(['uid'=>$s1,'jinbi'=>['money'=>$jinbi_s1,'content'=>$content_s1]]);}
				if($s0){_moneyDb(['uid'=>$s0,'jinbi'=>['money'=>$jinbi_s0,'content'=>$content_s0]]);}
			}
						/*师傅 师公奖励*/
						
			$ret['status'] = 1;
			$ret['jinbi'] = $jinbi;
            return $ret;
			
			
	    }else{
			return ['status'=>0,'error'=>"保存数据失败"];
		}
		
}

function _huitie_jiangli($user,$id){
	    
		$yaoqing=config()['yaoqing'];
		$uid=$user['id'];   // 我的id
		$s1=$user['yaoqing']['s1']; // 师傅id
		$s0=$user['yaoqing']['s0']; // 师公id
		if(!$id){
			return ['status'=>0,'error'=>"帖子不存在"];
		}
		$content='回复帖子 id:'.$id.' 奖励金币';
		
		
		$jinbi = _get_jinbi($yaoqing['jinbi_huitie_create']);
		if(!$jinbi){
			return ['status'=>0,'error'=>"没设置回帖奖励"];
		}
		
		$limit = $yaoqing['jinbi_huitie_limit'];
		if($limit){
		$count=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%回复帖子 id:%']])->whereTime('time','today')->count();
		  if($count >= $limit){
			return ['status'=>0,'error'=>"已达奖励上限"];
		  }
		}
		
		$ret = array();
		$ret['extend'] = 0;
		$tips_jinbi = $jinbi/1;
		$ret['tips'] = '加'.$tips_jinbi.'金币';
		$ret['title'] = '回复帖子';
		$db=_moneyDb([
                        'uid'=>$uid,
                        'jinbi'=>[
                            'money'=>$jinbi,
                            'content'=>$content
                        ]
        ]);
		if($db){
			$jinbi_s1 = _get_jinbi($yaoqing['jinbi_tiezi_create_s1']);
			$tips_jinbi_s1 = $jinbi_s1/1;
			$content_s1='徒弟回复帖子 id:'.$id.'奖励金币';
			$jinbi_s0 = _get_jinbi($yaoqing['jinbi_tiezi_create_s0']);
			$tips_jinbi_s0 = $jinbi_s0/1;
			$content_s0='徒孙回复帖子 id:'.$id.'奖励金币';
			if($jinbi_s1 || $jinbi_s0){
				if($s1){_moneyDb(['uid'=>$s1,'jinbi'=>['money'=>$jinbi_s1,'content'=>$content_s1]]);}
				if($s0){_moneyDb(['uid'=>$s0,'jinbi'=>['money'=>$jinbi_s0,'content'=>$content_s0]]);}
			}
						/*师傅 师公奖励*/
						
			$ret['status'] = 1;
			$ret['jinbi'] = $jinbi;
            return $ret;
			
			
	    }else{
			return ['status'=>0,'error'=>"保存数据失败"];
		}
		
}


// 封装 增减金额/金币
// $data[xx]['type'] 0加 1减
function _moneyDb($data){
    if(empty($data['uid'])){
        return;
    }
    $uid=$data['uid'];
    $where=[];
    $time=time();
    $ip=_ip();
    if(!empty($data['money'])){
        $name=$data['money'];
        if(empty($name['type'])){
            $type='+';
        }else{
            $type='-';
        }
        $money=$name['money'];
        $where['money'] = ['exp','money'.$type.$money];;
        if($type=='+'){
            $where['money_num'] = ['exp','money_num+'.$money];
        }
        $content=$name['content'];
        if(!empty($content)){
            $datas=$type=='+' ? '0' : '1';
            Db::name('yaoqing_records')->insert(['uid'=>$uid,'content'=>$content ,'money'=>$money,'data'=>$datas,'time'=>$time,'ip'=>$ip]);
        }
    }
    if(!empty($data['jinbi']['money'])){
        $name=$data['jinbi'];
        if(empty($name['type'])){
            $type='+';
        }else{
            $type='-';
        }
        $money=$name['money'];
        $where['jinbi'] = ['exp','jinbi'.$type.$money];;
        if($type=='+'){
            $where['jinbi_num'] = ['exp','jinbi_num+'.$money];
        }
        $content=$name['content'];
        if(!empty($content)){
            $datas=$type=='+' ? '0' : '1';
            Db::name('yaoqing_records')->insert(['uid'=>$uid,'content'=>$content ,'money'=>$money,'data'=>$datas,'type'=>1,'time'=>$time,'ip'=>$ip]);
        }
    }
    if(empty($where)){
        return;
    }
    $db=DB::name('yaoqing')->where('uid',$uid)->update($where);
    return $db;
}

// 封装 增减金额/金币

function _get_jinbi($jinbi){
	$jinbi1 = $jinbi;
	if($jinbi){
	$jinbi = explode("-",$jinbi);
			if(count($jinbi)>1){
				$jinbi = rand($jinbi[0],$jinbi[1]);
				$jinbi = $jinbi;
			}else{
				$jinbi = $jinbi1;
			}
	}
    return $jinbi;
}