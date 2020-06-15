<?php
use think\Db;
// 未提交ajax提示内容
function _ajaxError($text='微信、APP、网站定制开发，QQ技术：1013175107'){
    return $text;
}
function getImageInfo($img) //$img为图像文件绝对路径
{
    $img_info = getimagesize($img);
    switch ($img_info[2]) {
        case 1:
            $imgtype = "GIF";
            break;
        case 2:
            $imgtype = "JPG";
            break;
        case 3:
            $imgtype = "PNG";
            break;
    }
    $img_type = $imgtype . "图像";
    $img_size = ceil(filesize($img) / 1000) . "k"; //获取文件大小
     
    $new_img_info = array(
        "width" => $img_info[0],
        "height" => $img_info[1],
        "type" => $img_type,
        "size" => $img_size
    );
    print " width";
    print $img_info[0];
    print " height";
    print $img_info[1];
    print " format";
    print $img_type;
    print " size";
    print $img_size;
    print $new_img_info;
}
// 取出图片后缀
function _imgHouZhui($img){
    $img=strstr($img,'.');
    if(!$img){
        return false;
    }else{
        if($img=='.gif'){
            return false;
        }
    }
    return true;
}
// 2018年2月27日 19:59:28 
// 邀请
function _yaoqing($uid,$s1){
    if(!$uid || !$s1){
        return;
    }
 
    // 判断邀请码是否存在
	$row = Db::name('yaoqing')->where(['uid'=>$s1])->find();
	$s1 = $row['uid'];
	$s0 = $row['s1'];
    //$s1=Db::name('yaoqing')->where(['uid'=>$s1])->value('uid');
    if(!$s1){
        return;
    }

    $time=time();
 
 
    // 设置师傅s1 师公s0
    Db::name('yaoqing')->insert(['uid'=>$uid,'s1'=>$s1,'s0'=>$s0]);
    // 更新师傅的徒弟数量
    Db::name('yaoqing')->where('uid',$s1)->setInc('tudi_num');
	if($s0){
		// 更新师公的徒孙数量
		Db::name('yaoqing')->where('uid',$s0)->setInc('tuxun_num');
	}
    $yaoqing=config()['yaoqing'];
    if($yaoqing['money_yaoqing']){
        // 记录徒弟奖励
        _moneyDb([
            'uid'   =>  $uid,
            'money' =>[
                'money'     =>  $yaoqing['money_yaoqing']*100,
                'content'   =>  '邀请码注册'
            ]
        ]);
    }
    if($yaoqing['money_yaoqing_s1']){
        // 记录师傅奖励
        _moneyDb([
            'uid'   =>  $s1,
            'money' =>[
                'money'     =>  $yaoqing['money_yaoqing_s1']*100,
                'content'   =>  'id:'.$uid.'成功邀请徒弟',
            ]
        ]);
    }
	
	if($yaoqing['money_yaoqing_s0'] && $s0){
		// 记录师公奖励
        _moneyDb([
            'uid'   =>  $s0,
            'money' =>[
                'money'     =>  $yaoqing['money_yaoqing_s0']*100,
                'content'   =>  'id:'.$uid.'成功邀请徒孙',
            ]
        ]);
		
	}


              //注册师傅的金币
              if($yaoqing['jinbi_yaoqing_s1']){
                _moneyDb([
                    'uid'   =>  $s1,
                    'jinbi' =>[
                        'money'     =>  $yaoqing['jinbi_yaoqing_s1'],
                        'content'   =>  'id:'.$uid.'成功邀请徒弟',
                    ]
                ]);
                // 记录师傅奖励
               // Db::name('yaoqing_records')->insert(['uid'=>$uid,'content'=>'id:'.$this->member['id'].'邀请徒弟','money'=>$yaoqing['money_yaoqing_s1']*100,'time'=>$time,'ip'=>$ip]);
            }
			
			
			 //注册师公的金币
              if($yaoqing['jinbi_yaoqing_s0'] && $s0){
                _moneyDb([
                    'uid'   =>  $s0,
                    'jinbi' =>[
                        'money'     =>  $yaoqing['jinbi_yaoqing_s0'],
                        'content'   =>  'id:'.$uid.'成功邀请徒孙',
                    ]
                ]);
               
            }
			
			
			
                   //注册得金币
                  if($yaoqing['jinbi_yaoqing']){

                  $db=_moneyDb([
                        'uid'=>$uid,
                        'jinbi'=>[
                            'money'=>$yaoqing['jinbi_yaoqing'],
                            'content'=>'注册奖励金币'
                        ]
                    ]);

                }
  
    return;
    if(!$uid || !$s1){
        return;
    }
    $yaoqing=config()['yaoqing'];
    if($yaoqing['money_yaoqing']){
        $where['money']=$yaoqing['money_yaoqing']*100;
    }
    $where['uid']=$uid;
    $where['s1']=$s1;
    $db=Db::nane('yaoqing')->insert(['uid'=>$uid,'s1'=>$s1,'money'=>0]);
    if($db){
        // 更新师傅的徒弟数量
        Db::name('yaoqing')->where('uid',$uid)->setInc('tudi_num');
    }
    return $db;
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

// 保留价格后面2位数
function _money($money){
    if(empty($money)){
        return '0.00';
    }
   return number_format($money/100,2,'.',''); 
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