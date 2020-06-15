<?php
namespace app\api\controller;
use app\api\controller\Common;  // 公用   
use think\Db;       //数据库
use think\Session;  // session
use think\Request; //获取请求类型
use think\Validate;

class Yaoqing extends Common
{
    public $member=null;
    public function __construct($tokenaaa=''){

        parent::__construct();

        // 2018年3月12日 17:34:02 增加
        // 检测是否手机设备访问
        if(!Request::instance()->isMobile()){
        	exit(json_encode(['err'=>'禁止操作1']));
        }
 
         //pyx341AH3RDIZM3y41q1fIm7vvYWLFgryxLVw7HelNxHYKMlkG+EC+k4/souIXExfIkBY6ajy90vRg
        // echo $tokenaaa;
        
        // exit();
        // 读取会员配置 - 开始
        $config=Db::name('member_config')->where('name','switch')->value('text');
        unset($data);   // 销毁变量
        // 读取会员配置 - 结束
        // 会员是否开启 - 开始
        if(!$config || $config==0){
			
            exit(json_encode(['err'=>'会员未开放']));
        }

        // 会员是否开启 - 结束
        // 获取登录token
        $token=Session::get('user','ffxiangUser') ? Session::get('user','ffxiangUser') : input('post.token');
		
		//$token = 3434;
		

        if(!$token){
            if($tokenaaa){
                $token=$tokenaaa;

            }else{
				
				
                echo json_encode(['err'=>'token不正确']);
                exit();
            }
             
        }
          
  

        // 解密token UID
        $uid=_Dencrypt($token,'D');
		//$uid = 51066;
        
        if(!$uid){
            echo json_encode(['err'=>'会员UID不正确，请重新获取token']);
            exit();
        }
        // 解密成功获取会员信息
        $member=_user($uid);
        // 检测会员限制
        if($member){
            switch ($member['hide']) {
                case '0':
                    $recording=_records($member['id'],'API操作,账户被禁止');
                    if($recording){
                        $data=['err'=>'无法登录，原因是账户已被封号'];
                    }
                    echo json_encode($data);
                    break;
                    exit();
                case '2':
                    $recording=_records($member['id'],'API操作,账户正在审核');
                    if($recording){
                        $data=['err'=>'账户正在审核，请等待客服处理'];
                    }
                    echo json_encode($data);
                    break;
                    exit();
                case '3':
                    $recording=_records($member['id'],'API操作，账户审核被拒绝');
                    if($recording){
                        $data=['err'=>'账户审核被拒绝，拒绝原因：'.$member['hidetent']];
                    }
                    echo json_encode($data);
                    break;
                    exit();
            }
        }else{
            echo json_encode(['err'=>'会员不存在']);
            exit();
        }
        $this->member=$member;
    }
     
    // 收益总榜
    public function zongbang(){
      //  sleep(11000);
        // 1 总榜  2 我的收徒 3 我的徒孙
        $type=input('type/d') ? input('type/d') : 1;
        if($type==2){
            $where['a.s1']=$this->member['id'];
            $order='b.create_time desc';
        }else if($type==3){
		    $where['a.s0']=$this->member['id'];
            $order='b.create_time desc';
		}else{
            $order='a.money_num desc';
        }
        $where['b.hide']=1;
        $data=Db::name('yaoqing')->alias('a')->join('__MEMBER__ b','a.uid = b.id')->where($where)->order($order)->field('b.id,b.nickname,b.mobile,a.money_num,a.tudi_num,b.create_time')->paginate(10)->toarray();
        if($type==1){
            $pages=input('page');
            if($pages>10){
                $data['total']=100;
                $data['data']='';
            }
        }
        if($data['data']){
            foreach ($data['data'] as $k => $v) {
                $data['data'][$k]['username']=_username($v);
                $data['data'][$k]['money_num']=_money($v['money_num']);
                $data['data'][$k]['time']=date('m-d H:i',$v['create_time']);
            }
        }
		$data['where'] = $where;
        echo json_encode($data);
    }
    //  明细
    public function mingxi(){
        $type=input('type/d');
        if($type==1){
            $where['a.type']=1;
        }else if($type==2){
            $where['a.type']=0;
        }
        $where['a.uid']=$this->member['id'];
        $join=[
            ['member b','a.uid = b.id']
        ];
        
        $data=Db::name('yaoqing_records')->alias('a')->join($join)->where($where)->order('a.time desc')->field('a.money,a.content,a.time,a.type,b.mobile,b.nickname,a.data')->paginate()->toarray();
        foreach ($data['data'] as $k => $v) {
            $data['data'][$k]['username']=_username($v);
            $data['data'][$k]['time']=date('m-d H:i',$v['time']);
			$vt = explode("查看广告",$v['content']);
			if(count($vt)>1){
				$v['content'] = "查看广告".$vt[1];
			}
			$vt = explode("-",$v['content']);
			if(count($vt)>1){
				$v['content'] = $vt[1];
			}
            $data['data'][$k]['content']=$v['content'].(!$v['data'] ? '<b class="sx-jia">+' : '<b class="sx-jian">-').($v['type'] ? $v['money'].'金币' : _money($v['money']).'元').'</b>';
        }
        echo json_encode($data);
    }
    // 邀请码输入
    public function yaoqingma(){
        $yaoqingma=input('yaoqingma/d');
        if(!$yaoqingma){
            exit(json_encode(['err'=>'请输入邀请码']));
        }
        if($yaoqingma == $this->member['id']){
            exit(json_encode(['err'=>'不能自己当师傅哦']));
        }
        // 判断邀请码是否存在
        //$uid=Db::name('yaoqing')->where(['uid'=>$yaoqingma])->value('uid');
		$row = Db::name('yaoqing')->where(['uid'=>$yaoqingma])->find();
        if(!$row){
            exit(json_encode(['err'=>'邀请码不存在']));
        }
		$uid = $row['uid'];
		$s0 = $row['s1'];
        // 判断数据表是否存在
        $mytudi=Db::name('yaoqing')->where(['s1'=>$this->member['id'],'uid'=>$yaoqingma])->find();
         if($mytudi['uid']==$yaoqingma){
                exit(json_encode(['err'=>'不能相互邦定']));
             }

             
        $my=Db::name('yaoqing')->where('uid',$this->member['id'])->find();
        if($my){
            // 判断是否有师傅
             if($my['s1']){
                exit(json_encode(['err'=>'非法操作']));
             }else{
				if($my['s0']){
				if($my['s0'] == $uid){
					exit(json_encode(['err'=>'非法操作']));
				}
				}
				if($row['s0'] && $my['s0']){
				if($row['s0'] == $my['s0']){
					exit(json_encode(['err'=>'非法操作']));
				}
				}
				if($row['s0']){
				if($row['s0'] == $this->member['id']){
					exit(json_encode(['err'=>'非法操作']));
				}
				}
				$count = Db::name('yaoqing')->where(['s0'=>$yaoqingma])->count();
				//$count = Db::name('yaoqing')->where(['s0'=>$this->member['id']])->count();
				if($count>0){
					//exit(json_encode(['err'=>'非法操作']));
				}
                $db=Db::name('yaoqing')->where('uid',$this->member['id'])->setField('s1',$uid);
				if($s0){
				$db=Db::name('yaoqing')->where('uid',$this->member['id'])->setField('s0',$s0);
				}
             }
        }else{
             // 如果没有表则创建
            $db=Db::name('yaoqing')->insert(['uid'=>$this->member['id'],'s1'=>$uid,'s0'=>$s0]);
        }
        $time=time();
        if($db){
            // 更新师傅的徒弟数量
            Db::name('yaoqing')->where('uid',$uid)->setInc('tudi_num');
			if($s0){
		      // 更新师公的徒孙数量
		      Db::name('yaoqing')->where('uid',$s0)->setInc('tuxun_num');
	        }
        	$ip=_ip();
            $yaoqing=config()['yaoqing'];
            if($yaoqing['money_yaoqing']){
                _moneyDb([
                    'uid'   =>  $this->member['id'],
                    'money' =>[
                        'money'     =>  $yaoqing['money_yaoqing']*100,
                        'content'   =>  '邀请码注册'
                    ]
                ]);
                // 记录徒弟奖励
               // Db::name('yaoqing_records')->insert(['uid'=>$this->member['id'],'content'=>,'money'=> ,'time'=>$time,'ip'=>$ip]);
            }
            if($yaoqing['money_yaoqing_s1']){
                _moneyDb([
                    'uid'   =>  $uid,
                    'money' =>[
                        'money'     =>  $yaoqing['money_yaoqing_s1']*100,
                        'content'   =>  'id:'.$this->member['id'].'成功邀请徒弟',
                    ]
                ]);
                // 记录师傅奖励
               // Db::name('yaoqing_records')->insert(['uid'=>$uid,'content'=>'id:'.$this->member['id'].'邀请徒弟','money'=>$yaoqing['money_yaoqing_s1']*100,'time'=>$time,'ip'=>$ip]);
            }
			
		if($yaoqing['money_yaoqing_s0'] && $s0){
		// 记录师公奖励
        _moneyDb([
            'uid'   =>  $s0,
            'money' =>[
                'money'     =>  $yaoqing['money_yaoqing_s0']*100,
                'content'   =>  'id:'.$this->member['id'].'成功邀请徒孙',
            ]
        ]);
		
	}
			
			
              //注册师傅的金币
              if($yaoqing['jinbi_yaoqing_s1']){
                _moneyDb([
                    'uid'   =>  $uid,
                    'jinbi' =>[
                        'money'     =>  $yaoqing['jinbi_yaoqing_s1'],
                        'content'   =>  'id:'.$this->member['id'].'成功邀请徒弟',
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
                        'content'   =>  'id:'.$this->member['id'].'成功邀请徒孙',
                    ]
                ]);
               
            }
			
			
			
                   //注册得金币
                  if($yaoqing['jinbi_yaoqing']){

                  $db=_moneyDb([
                        'uid'=>$this->member['id'],
                        'jinbi'=>[
                            'money'=>$yaoqing['jinbi_yaoqing'],
                            'content'=>'注册奖励金币'
                        ]
                    ]);

                }

            $text=$yaoqing['money_yaoqing'] ? '恭喜你成功领取'.$yaoqing['money_yaoqing'].'元红包' : '操作成功';
            echo json_encode(['ret'=>$text]);
        }else{
            echo json_encode(['err'=>'操作失败']);
        }
         
    }
	
	// 广告点击奖励
    public function AdviewAdd(){
		$request = Request::instance();
		$title=input('title');
		$isapp=input('isapp')?input('isapp'):0;
		$yaoqing=config()['yaoqing'];
		$uid=$this->member['id'];   // 我的id
		$s1=$this->member['yaoqing']['s1']; // 师傅id
		$s0=$this->member['yaoqing']['s0']; // 师公id
		$ip = $request->ip();
		if(!$title){
			echo json_encode(['error'=>"广告不存在"]);
			die();
		}
		$content='IP:'.$ip.'广告:'.$title.' 奖励金币-浏览广告奖励';
		if($isapp){
			$content='安装app:'.$title.' 奖励金币';
		}
		
		$count=Db::name('yaoqing_records')->where(['content'=>['like','%'.$content.'%']])->whereTime('time','today')->count();
		if($count){
			echo json_encode(['error'=>"已奖励"]);
			die();
		}
		$jinbi = _get_jinbi($yaoqing['jinbi_ad_view']);
		$ad = Db::name('ad')->where(['title'=>['like','%'.$title.'%']])->whereOr(['source'=>['like','%'.$title.'%']])->find();
		if($ad){
			if($ad['jingbi']){
			$jinbi = _get_jinbi($ad['jingbi']);
			}
		}
		
		if(!$jinbi){
			echo json_encode(['error'=>"没设置广告奖励"]);
			die();
		}
		
		$ret = array();
		$ret['extend'] = 0;
		$tips_jinbi = $jinbi/1;
		$ret['tips'] = '加'.$tips_jinbi.'金币';
		$ret['title'] = '阅读领取';
		$db=_moneyDb([
                        'uid'=>$uid,
                        'jinbi'=>[
                            'money'=>$jinbi,
                            'content'=>$content
                        ]
        ]);
		if($db){
			//统计广告奖励次数
			Db::name('ad')->where(['title'=>['like','%'.$title.'%']])->whereOr(['source'=>['like','%'.$title.'%']])->setInc('click');
			
			$jinbi_s1 = _get_jinbi($yaoqing['jinbi_ad_view_s1']);
			$tips_jinbi_s1 = $jinbi_s1/1;
			$content_s1='徒弟浏览广告 :'.$title.'奖励金币';
			$jinbi_s0 = _get_jinbi($yaoqing['jinbi_ad_view_s0']);
			$tips_jinbi_s0 = $jinbi_s0/1;
			$content_s0='徒孙浏览广告 :'.$title.'奖励金币';
			if($jinbi_s1 || $jinbi_s0){
				if($s1){_moneyDb(['uid'=>$s1,'jinbi'=>['money'=>$jinbi_s1,'content'=>$content_s1]]);}
				if($s0){_moneyDb(['uid'=>$s0,'jinbi'=>['money'=>$jinbi_s0,'content'=>$content_s0]]);}
			}
						/*师傅 师公奖励*/
						
			$ret['status'] = 1;
			$ret['jinbi'] = $jinbi;
            echo json_encode($ret);
            die();
			
			
	    }else{
			echo json_encode(['error'=>"保存数据失败!"]);
			die();
		}
		
	}
	
	
	// 阅读  观看奖励
    public function viewAdd(){
		$type=input('type');
		$id=input('id');
        $yaoqing=config()['yaoqing'];
        $uid=$this->member['id'];   // 我的id
		$s1=$this->member['yaoqing']['s1']; // 师傅id
		$s0=$this->member['yaoqing']['s0']; // 师公id
		//$type= 'smallvideo';
		if($type=='news'){
			$jinbi=$yaoqing['jinbi_article_view'];
			$jinbi = _get_jinbi($jinbi);
			if($jinbi){
				$content='每天阅读文章id:'.$id.'奖励金币-阅读文章奖励';
				//判断是否已读文章
                $db=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%'.$content.'%']])->value('uid');
				if(!$db){
					 
					 $count=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%每天阅读文章id:%']])->whereTime('time','today')->count();
					 if($yaoqing['jinbi_views_time']){
						 //判断今天奖励的次数
						 if($count>=$yaoqing['jinbi_views_time']){
							 echo json_encode(['error'=>"已达阅读奖励上限"]);
							 die();
						 }
						 
					 }
					 $t = $count;
					 $ret = array();
					 $ret['extend'] = 0;
					 $ret['count'] = $t;
					 $tips_jinbi = $jinbi/1;
					 $ret['tips'] = '加'.$tips_jinbi.'金币';
					 $ret['title'] = '每日阅读';
					 
					 if($t == $yaoqing['jinbi_article_view_extend_time']){
						 
						 $c = '完成'.$ret['count'].'次阅读,额外加';
						 $cc=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%'.$c.'%']])->whereTime('time','today')->count();
						 if(!$cc){
						 $jinbi_extend=$yaoqing['jinbi_article_view_extend'];
						 if($jinbi_extend){
			             $jinbi = _get_jinbi($jinbi_extend);
						  $tips_jinbi = $jinbi/1;
						 $ret['extend'] = 1;
						 $ret['tips'] = '完成'.$ret['count'].'次阅读,额外加'.$tips_jinbi.'金币';
						 $content='完成'.$ret['count'].'次阅读,额外加'.$tips_jinbi.'金币';
						 $ret['title'] = '额外奖励';
						 }
						 }
						 
					 } 
					 $db=_moneyDb([
                        'uid'=>$uid,
                        'jinbi'=>[
                            'money'=>$jinbi,
                            'content'=>$content
                        ]
                    ]);
					if($db){
						
						/*师傅 师公奖励*/
						if($ret['extend']){
							$jinbi_s1 = _get_jinbi($yaoqing['jinbi_article_view_extend_s1']);
							$tips_jinbi_s1 = $jinbi_s1/1;
							$content_s1='完成'.$ret['count'].'次阅读,额外加'.$tips_jinbi_s1.'金币';
							$jinbi_s0 = _get_jinbi($yaoqing['jinbi_article_view_extend_s0']);
							$tips_jinbi_s0 = $jinbi_s0/1;
							$content_s0='完成'.$ret['count'].'次阅读,额外加'.$tips_jinbi_s0.'金币';
						}else{
							$jinbi_s1 = _get_jinbi($yaoqing['jinbi_article_view_s1']);
							$tips_jinbi_s1 = $jinbi_s1/1;
							$content_s1='徒弟阅读文章 id:'.$id.'奖励金币';
							$jinbi_s0 = _get_jinbi($yaoqing['jinbi_article_view_s0']);
							$tips_jinbi_s0 = $jinbi_s0/1;
							$content_s0='徒孙阅读文章 id:'.$id.'奖励金币';
						}
						
						if($jinbi_s1 || $jinbi_s0){
							
							if($s1){
								_moneyDb(['uid'=>$s1,'jinbi'=>['money'=>$jinbi_s1,'content'=>$content_s1]]);
							}
							if($s0){
								_moneyDb(['uid'=>$s0,'jinbi'=>['money'=>$jinbi_s0,'content'=>$content_s0]]);
							}
						}
						/*师傅 师公奖励*/
						
						$ret['status'] = 1;
						$ret['jinbi'] = $jinbi;
                        echo json_encode($ret);
                        die(); 
                    } 
				}
			}
			
		}
		if($type=='video'){
			$jinbi=$yaoqing['jinbi_video_view'];
			$jinbi = _get_jinbi($jinbi);
			if($jinbi){
				$content='视频id:'.$id.'奖励金币-浏览视频奖励';
				
				//判断是否已读文章
                $db=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%'.$content.'%']])->value('uid');
				if(!$db){
					 $count=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%视频id:%']])->whereTime('time','today')->count();
					 if($yaoqing['jinbi_views_time1']){
						 //判断今天奖励的次数
						 if($count>=$yaoqing['jinbi_views_time1']){
							 echo json_encode(['error'=>"已达观看奖励上限"]);
							 die(); 
						 }
					 }
					 $t = $count;
					 $ret = array();
					 $ret['extend'] = 0;
					 $ret['count'] = $t;
					 $tips_jinbi = $jinbi/1;
					 $ret['tips'] = '加'.$tips_jinbi.'金币';
					 $ret['title'] = '视频观看奖励';
					  if($t == $yaoqing['jinbi_video_view_extend_time']){
						  
						 $c = '完成'.$ret['count'].'次视频观看,额外加';
						 $cc=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%'.$c.'%']])->whereTime('time','today')->count();
						 if(!$cc){
						 $jinbi_extend=$yaoqing['jinbi_video_view_extend'];
						 if($jinbi_extend){
			             $jinbi = _get_jinbi($jinbi_extend);
						 $tips_jinbi = $jinbi/1;
						 $ret['extend'] = 1;
						 $ret['tips'] = '完成'.$ret['count'].'次视频观看,额外加'.$tips_jinbi.'金币';
						 $content='完成'.$ret['count'].'次视频观看,额外加'.$tips_jinbi.'金币';
						 $ret['title'] = '额外奖励';
						 }
						 }
						 
					 } 
					 
					 $db=_moneyDb([
                        'uid'=>$uid,
                        'jinbi'=>[
                            'money'=>$jinbi,
                            'content'=>$content
                        ]
                    ]);
					if($db){
						
						/*师傅 师公奖励*/
						if($ret['extend']){
							$jinbi_s1 = _get_jinbi($yaoqing['jinbi_video_view_extend_s1']);
							$tips_jinbi_s1 = $jinbi_s1/1;
							$content_s1='完成'.$ret['count'].'次视频观看,额外加'.$tips_jinbi_s1.'金币';
							$jinbi_s0 = _get_jinbi($yaoqing['jinbi_video_view_extend_s0']);
							$tips_jinbi_s0 = $jinbi_s0/1;
							$content_s0='完成'.$ret['count'].'次视频观看,额外加'.$tips_jinbi_s0.'金币';
						}else{
							$jinbi_s1 = _get_jinbi($yaoqing['jinbi_video_view_s1']);
							$content_s1='徒弟观看视频 id:'.$id.'奖励金币';
							$jinbi_s0 = _get_jinbi($yaoqing['jinbi_video_view_s0']);
							$content_s0='徒孙观看视频 id:'.$id.'奖励金币';
						}
						if($jinbi_s1 || $jinbi_s0){
							if($s1){
								_moneyDb(['uid'=>$s1,'jinbi'=>['money'=>$jinbi_s1,'content'=>$content_s1]]);
							}
							if($s0){
								_moneyDb(['uid'=>$s0,'jinbi'=>['money'=>$jinbi_s0,'content'=>$content_s0]]);
							}
						}
						/*师傅 师公奖励*/
						
						
                        $ret['status'] = 1;
						$ret['jinbi'] = $jinbi;
                        echo json_encode($ret);
                        die(); 
                    } 
				}
			}
			
		}
		if($type=='smallvideo'){
			$jinbi=$yaoqing['jinbi_smallvideo_view'];
			$jinbi = _get_jinbi($jinbi);
			$time=$yaoqing['smallvideo_view_time'];
			$content='观看小视频奖励金币-浏览小视频';
			$count=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%'.$content.'%']])->whereTime('time','today')->count();
			if($yaoqing['jinbi_views_time2']){
			  if($count>=$yaoqing['jinbi_views_time2']){
				echo json_encode(['error'=>"已达观看奖励上限"]);
				return;
			  }
			}
			$t = $count;
			$ret = array();
			$ret['extend'] = 0;
			$ret['count'] = $t;
			$ret['tips'] = '加'.$jinbi.'金币';
			$ret['title'] = '小视频奖励';
			 if($t == $yaoqing['jinbi_smallvideo_view_extend_time']){
				 
				         $c = '完成'.$ret['count'].'次小视频浏览';
						 $cc=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%'.$c.'%']])->whereTime('time','today')->count();
						 $ret['cc'] = $cc;
						 if(!$cc){
						 $jinbi_extend=$yaoqing['jinbi_smallvideo_view_extend'];
						 if($jinbi_extend){
			             $jinbi = _get_jinbi($jinbi_extend);
						 $ret['extend'] = 1;
						 $ret['tips'] = '完成'.$ret['count'].'次小视频浏览,额外加'.$jinbi.'金币';
						 $content='完成'.$ret['count'].'次小视频浏览,额外加'.$jinbi.'金币';
						 $ret['title'] = '额外奖励';
						 }
			             }
						 
			} 
			$db=_moneyDb([
                        'uid'=>$uid,
                        'jinbi'=>[
                            'money'=>$jinbi,
                            'content'=>$content
                        ]
                    ]);
					if($db){
						
						/*师傅 师公奖励*/
						if($ret['extend']){
							$jinbi_s1 = _get_jinbi($yaoqing['jinbi_smallvideo_view_extend_s1']);
							$tips_jinbi_s1 = $jinbi_s1/1;
							$content_s1='完成'.$ret['count'].'次小视频观看,额外加'.$tips_jinbi_s1.'金币';
							$jinbi_s0 = _get_jinbi($yaoqing['jinbi_smallvideo_view_extend_s0']);
							$tips_jinbi_s0 = $jinbi_s0/1;
							$content_s0='完成'.$ret['count'].'次小视频观看,额外加'.$tips_jinbi_s0.'金币';
						}else{
							$jinbi_s1 = _get_jinbi($yaoqing['jinbi_smallvideo_view_s1']);
							$content_s1='徒弟观看小视频 奖励金币';
							$jinbi_s0 = _get_jinbi($yaoqing['jinbi_smallvideo_view_s0']);
							$content_s0='徒孙观看小视频 奖励金币';
						}
						if($jinbi_s1 || $jinbi_s0){
							if($s1){
								_moneyDb(['uid'=>$s1,'jinbi'=>['money'=>$jinbi_s1,'content'=>$content_s1]]);
							}
							if($s0){
								_moneyDb(['uid'=>$s0,'jinbi'=>['money'=>$jinbi_s0,'content'=>$content_s0]]);
							}
						}
						/*师傅 师公奖励*/
						
						
                        $ret['status'] = 1;
						$ret['jinbi'] = $jinbi;
                        echo json_encode($ret);
                        die(); 
                    } 
			
		}
		
		 echo json_encode(['jinbi'=>'无数据类型','uid'=>'',]);
        die(); 
		
    }
	
	//每分享一篇文章奖励
	
	function  share_post(){
		$request = Request::instance();
        $ip = $request->ip();
		$shareuid=input('shareuid');   // 我的id
		$uid = $shareuid;
		if($shareuid){
			echo json_encode(['status'=>0]);
            die(); 
		}
		$id=input('id');  // 文章id
		$yaoqing=config()['yaoqing'];
		$jinbi = _get_jinbi($yaoqing['jinbi_article_share']);
		
		$ct = '分享奖励金币';
		$count=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%'.$content.'%']])->whereTime('time','today')->count();
		$limit = $yaoqing['article_share_time'];
		if($count>=$limit){
			echo json_encode(['status'=>0]);
             die(); 
		}
		//金币奖励每次分享
		if($jinbi){
			$content='IP:'.$ip.' 内容id:'.$id.'分享奖励金币';
			$count=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%'.$content.'%']])->whereTime('time','today')->count();	
            if(!$count){
				    $db=_moneyDb([
                        'uid'=>$uid,
                        'jinbi'=>[
                            'money'=>$jinbi,
                            'content'=>$content
                        ]
                    ]);
					if($db){
						
						
						
                        echo json_encode(['status'=>1]);
                        die(); 
                    } 
			}			
		}
		
		 echo json_encode(['error'=>1]);
         die();
	
	}
	
    // 每日奖励 / 师徒师徒奖励
    public function daily(){
    	// 检测是否手机系统
    	
        $type=input('type');
        $yaoqing=config()['yaoqing'];
        $uid=$this->member['id'];   // 我的id
        $s1=$this->member['yaoqing']['s1']; // 师傅id
		$s0=$this->member['yaoqing']['s0']; // 师公id
    	
        $time=time();
        if($type=='money_login'){
            // 每日登录奖励零钱
            // 徒弟奖励
            if($yaoqing['money_login']){
                // 判断当日是否已奖励
                $db=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>'零钱每日登录'])->whereTime('time','today')->value('uid');
                if(!$db){
                    $money_login_money=$yaoqing['money_login'];
                    // 给自己奖励
                    
                    $db=_moneyDb([
                        'uid'=>$uid,
                        'money'=>[
                            'money'=>$money_login_money*100,
                            'content'=>'零钱每日登录'
                        ]
                    ]);
                    if($db){
                        $ret=1;
                        echo json_encode(['ret'=>['h1'=>$money_login_money.'元','span'=>'恭喜今天上APP获得￥'.$money_login_money."零钱<br>已放入您的零钱<br>"."明天上APP再领￥".$money_login_money."零钱"]]);
                    } 
                }
            }

            // 师傅奖励
            if($s1 && $yaoqing['money_login_s1']){
                // 判断当日是否已奖励
                $content='id:'.$uid.'徒弟每日登录奖励零钱';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s1,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    // 给师傅奖励
                    _moneyDb([
                        'uid'=>$s1,
                        'money'=>[
                            'money'=>$yaoqing['money_login_s1']*100,
                            'content'=>$content
                        ]
                    ]);
                }
            }
			
			
			 // 师公奖励
            if($s0 && $yaoqing['money_login_s0']){
                // 判断当日是否已奖励
                $content='id:'.$uid.'徒孙每日登录奖励零钱';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s0,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    // 给师公奖励
                    _moneyDb([
                        'uid'=>$s0,
                        'money'=>[
                            'money'=>$yaoqing['money_login_s0']*100,
                            'content'=>$content
                        ]
                    ]);
                }
            }

            // 每日登录奖励金币
            // 徒弟奖励
            if($yaoqing['jinbi_login']){
                // 判断当日是否已奖励
                $db=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>'每日登录奖励金币'])->whereTime('time','today')->value('uid');
                if(!$db){
                    $jinbi_login_money=$yaoqing['jinbi_login'];
                    // 给自己奖励
                    $db=_moneyDb([
                        'uid'=>$uid,
                        'jinbi'=>[
                            'money'=>$jinbi_login_money,
                            'content'=>'每日登录奖励金币'
                        ]
                    ]);
                    if($db){
                        if(empty($ret)){
                            echo json_encode(['ret'=>['h1'=>$jinbi_login_money.'金币','span'=>'恭喜今天上APP获得'.$jinbi_login_money."金币<br>已放入您的账户<br>"."明天上APP再领".$money_login_money."金币"]]);
                        }
                         
                    } 
                }
            }
            // 师傅奖励
            if($s1 && $yaoqing['jinbi_login_s1']){
                // 判断当日是否已奖励
                $content='id:'.$uid.'徒弟每日登录奖励金币';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s1,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    // 给师傅奖励
                    _moneyDb([
                        'uid'=>$s1,
                        'jinbi'=>[
                            'money'=>$yaoqing['jinbi_login_s1'],
                            'content'=>$content
                        ]
                    ]);
                }
            }
			
			
			// 师公奖励
            if($s0 && $yaoqing['jinbi_login_s0']){
                // 判断当日是否已奖励
                $content='id:'.$uid.'徒孙每日登录奖励金币';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s0,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    // 给师傅奖励
                    _moneyDb([
                        'uid'=>$s0,
                        'jinbi'=>[
                            'money'=>$yaoqing['jinbi_login_s0'],
                            'content'=>$content
                        ]
                    ]);
                }
            }
             
            
        }else if($type=='money_news'){
        	// 阅读奖励
            // 徒弟奖励
            if($yaoqing['money_news'] && $yaoqing['money_news_num']){
                // 查询今日是否已奖励
                $content='阅读文章奖励零钱';
                $db=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%篇文章奖励零钱%']])->whereTime('time','today')->value('uid');
                if(!$db){
                    // 查询阅读次数是否超过
                    if($this->member['yaoqing']['news_num'] < $yaoqing['money_news_num']){
                        // 若没有超过阅读次数，递增+1 记录
                        Db::name('yaoqing')->where(['uid'=>$uid])->setInc('news_num');
                        return;
                    }
                    // 设置阅读文章次数设置0 明日重新递增+1 记录 
                    Db::name('yaoqing')->where(['uid'=>$uid])->setField('news_num',0);
                    //  增加奖励
                    $money=$yaoqing['money_news'];
                    $moneyDb=_moneyDb([
                        'uid'   =>  $uid,
                        'money' =>  [
                            'money'     =>  $money*100,
                            'content'   =>  $content
                        ]
                    ]);
                    if($moneyDb){
                        $ret=1;
                        echo json_encode(['ret'=>['h1'=>'￥'.$money.'','span'=>'今日阅读文章<br>￥'.$money.'零钱已放入你的零钱<br>明日再阅读文章还可以获得￥'.$money.'零钱']]);
                    }
                }

            }
			
			$viewnm = 0;
            // 师傅奖励
            if($yaoqing['money_news_s1'] && $yaoqing['money_news_num']){
                // 查询今日是否已奖励
                $content='id:'.$uid.'徒弟阅读文章奖励零钱';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s1,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    // 查询阅读次数是否超过
                    if($this->member['yaoqing']['news_num'] < $yaoqing['money_news_num']){
                        // 若没有超过阅读次数，递增+1 记录
                        Db::name('yaoqing')->where(['uid'=>$uid])->setInc('news_num');
						$viewnm = 1;
                        return;
                    }
                    // 设置阅读文章次数设置0 明日重新递增+1 记录 
                    Db::name('yaoqing')->where(['uid'=>$uid])->setField('news_num',0);
                    //  增加奖励
                    $money=$yaoqing['money_news_s1'];
                    _moneyDb([
                        'uid'   =>  $s1,
                        'money' =>  [
                            'money'     =>  $money*100,
                            'content'   =>  $content
                        ]
                    ]);
                }

            }
			
			
			 // 师公奖励
            if($yaoqing['money_news_s0'] && $yaoqing['money_news_num']){
                // 查询今日是否已奖励
                $content='id:'.$uid.'徒孙阅读文章奖励零钱';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s0,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    // 查询阅读次数是否超过
                    if($this->member['yaoqing']['news_num'] < $yaoqing['money_news_num']){
                        // 若没有超过阅读次数，递增+1 记录
						if(!viewnm){
                        Db::name('yaoqing')->where(['uid'=>$uid])->setInc('news_num');
						}
						return;
                    }
                    // 设置阅读文章次数设置0 明日重新递增+1 记录 
                    Db::name('yaoqing')->where(['uid'=>$uid])->setField('news_num',0);
                    //  增加奖励
                    $money=$yaoqing['money_news_s0'];
                    _moneyDb([
                        'uid'   =>  $s0,
                        'money' =>  [
                            'money'     =>  $money*100,
                            'content'   =>  $content
                        ]
                    ]);
                }

            }


            // 阅读奖励金币
            // 徒弟奖励
            if($yaoqing['jinbi_news'] && $yaoqing['money_news_num']){
                // 查询今日是否已奖励
                $content='阅读文章奖励金币';
                $db=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%篇文章奖励金币%']])->whereTime('time','today')->value('uid');
                if(!$db){
                    // 查询阅读次数是否超过
                    if($this->member['yaoqing']['news_num'] < $yaoqing['money_news_num']){
                        // 若没有超过阅读次数，递增+1 记录
                        Db::name('yaoqing')->where(['uid'=>$uid])->setInc('news_num');
                        return;
                    }
                    // 设置阅读文章次数设置0 明日重新递增+1 记录 
                    Db::name('yaoqing')->where(['uid'=>$uid])->setField('news_num',0);
                    //  增加奖励
                    $money=$yaoqing['jinbi_news'];
                    $moneyDb=_moneyDb([
                        'uid'   =>  $uid,
                        'jinbi' =>  [
                            'money'     =>  $money,
                            'content'   =>  $content
                        ]
                    ]);
                    if($moneyDb){
                        if(empty($ret)){
                            echo json_encode(['ret'=>['h1'=>''.$money.'金币','span'=>'今日已阅读文章<br>'.$money.'金币已放入你的账户<br>明日再阅读文章还可以获得'.$money.'金币']]);
                        }
                    }
                }

            }
            // 师傅奖励
            if($yaoqing['jinbi_news_s1'] && $yaoqing['money_news_num']){
                // 查询今日是否已奖励
                $content='id:'.$uid.'徒弟阅读文章奖励金币';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s1,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    // 查询阅读次数是否超过
                    if($this->member['yaoqing']['news_num'] < $yaoqing['money_news_num']){
                        // 若没有超过阅读次数，递增+1 记录
                        Db::name('yaoqing')->where(['uid'=>$uid])->setInc('news_num');
                        return;
                    }
                    // 设置阅读文章次数设置0 明日重新递增+1 记录 
                    Db::name('yaoqing')->where(['uid'=>$uid])->setField('news_num',0);
                    //  增加奖励
                    $money=$yaoqing['jinbi_news_s1'];
                    _moneyDb([
                        'uid'   =>  $s1,
                        'jinbi' =>  [
                            'money'     =>  $money,
                            'content'   =>  $content
                        ]
                    ]);
                }

            }
			
			// 师公奖励
            if($yaoqing['jinbi_news_s0'] && $yaoqing['money_news_num']){
                // 查询今日是否已奖励
                $content='id:'.$uid.'徒弟阅读文章奖励金币';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s0,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    // 查询阅读次数是否超过
                    if($this->member['yaoqing']['news_num'] < $yaoqing['money_news_num']){
                        // 若没有超过阅读次数，递增+1 记录
                        //Db::name('yaoqing')->where(['uid'=>$uid])->setInc('news_num');
                        return;
                    }
                    // 设置阅读文章次数设置0 明日重新递增+1 记录 
                    Db::name('yaoqing')->where(['uid'=>$uid])->setField('news_num',0);
                    //  增加奖励
                    $money=$yaoqing['jinbi_news_s1'];
                    _moneyDb([
                        'uid'   =>  $s0,
                        'jinbi' =>  [
                            'money'     =>  $money,
                            'content'   =>  $content
                        ]
                    ]);
                }

            }
             
        }else if($type=='money_weitoutiao'){
            // 发布微头条奖励零钱
            // 徒弟奖励
            if($yaoqing['money_weitoutiao']){
            	// 查询今日是否已奖励
                $content='发布微头条零钱';
                $db=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                	// 判断是否发布微头条
                	$db=Db::name('article')->where(['uid'=>$uid,'weitoutiao'=>1,'hide'=>1])->whereTime('create_time','today')->value('id');
                	if(!$db){
                		return;
                	}
                	//  增加奖励
                    $money=$yaoqing['money_weitoutiao'];
                    $moneyDb=_moneyDb([
                        'uid'   =>  $uid,
                        'money' =>  [
                            'money'     =>  $money*100,
                            'content'   =>  $content
                        ]
                    ]);
                    if($moneyDb){
                        $ret=1;
                        echo json_encode(['ret'=>['h1'=>'￥'.$money.'','span'=>'发布微头条奖励￥'.$money.'零钱<br>已放入你的零钱<br>明天再发布微头条可获得￥'.$money.'零钱']]);
                    }
                }
            }
            if($yaoqing['money_weitoutiao_s1']){
            	// 师傅奖励
                $content='id:'.$uid.'徒弟发布微头条零钱';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s1,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                	// 判断是否发布微头条
                	$db=Db::name('article')->where(['uid'=>$uid,'weitoutiao'=>1,'hide'=>1])->whereTime('create_time','today')->value('id');
                	if(!$db){
                		return;
                	}
                	//  增加奖励
                    $money=$yaoqing['money_weitoutiao_s1'];
                    _moneyDb([
                        'uid'   =>  $s1,
                        'money' =>  [
                            'money'     =>  $money*100,
                            'content'   =>  $content
                        ]
                    ]);
                    
                }
            }
			if($yaoqing['money_weitoutiao_s0']){
            	// 师公奖励
                $content='id:'.$uid.'徒孙发布微头条零钱';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s0,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                	// 判断是否发布微头条
                	$db=Db::name('article')->where(['uid'=>$uid,'weitoutiao'=>1,'hide'=>1])->whereTime('create_time','today')->value('id');
                	if(!$db){
                		return;
                	}
                	//  增加奖励
                    $money=$yaoqing['money_weitoutiao_s0'];
                    _moneyDb([
                        'uid'   =>  $s0,
                        'money' =>  [
                            'money'     =>  $money*100,
                            'content'   =>  $content
                        ]
                    ]);
                    
                }
            }

            // 发布微头条奖励金币
            // 徒弟奖励
            if($yaoqing['jinbi_weitoutiao']){
                // 查询今日是否已奖励
                $content='发布微头条奖励金币';
                $db=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    // 判断是否发布微头条
                    $db=Db::name('article')->where(['uid'=>$uid,'weitoutiao'=>1,'hide'=>1])->whereTime('create_time','today')->value('id');
                    if(!$db){
                        return;
                    }
                    //  增加奖励
                    $money=$yaoqing['jinbi_weitoutiao'];
                    $moneyDb=_moneyDb([
                        'uid'   =>  $uid,
                        'jinbi' =>  [
                            'money'     =>  $money,
                            'content'   =>  $content
                        ]
                    ]);
                    if($moneyDb){
                        if(empty($ret)){
                            echo json_encode(['ret'=>['h1'=>''.$money.'金币','span'=>'发布微头条奖励'.$money.'金币<br>已放入你的账户<br>明天再发布微头条可获得'.$money.'金币']]);
                        }
                    }
                }
            }
            if($yaoqing['jinbi_weitoutiao_s1']){
                // 师傅奖励
                $content='id:'.$uid.'徒弟发布微头条金币';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s1,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    // 判断是否发布微头条
                    $db=Db::name('article')->where(['uid'=>$uid,'weitoutiao'=>1,'hide'=>1])->whereTime('create_time','today')->value('id');
                    if(!$db){
                        return;
                    }
                    //  增加奖励
                    $money=$yaoqing['jinbi_weitoutiao_s1'];
                    _moneyDb([
                        'uid'   =>  $s1,
                        'jinbi' =>  [
                            'money'     =>  $money,
                            'content'   =>  $content
                        ]
                    ]);
                    
                }
            }
			
			if($yaoqing['jinbi_weitoutiao_s0']){
                // 师公奖励
                $content='id:'.$uid.'徒孙发布微头条金币';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s0,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    // 判断是否发布微头条
                    $db=Db::name('article')->where(['uid'=>$uid,'weitoutiao'=>1,'hide'=>1])->whereTime('create_time','today')->value('id');
                    if(!$db){
                        return;
                    }
                    //  增加奖励
                    $money=$yaoqing['jinbi_weitoutiao_s0'];
                    _moneyDb([
                        'uid'   =>  $s0,
                        'jinbi' =>  [
                            'money'     =>  $money,
                            'content'   =>  $content
                        ]
                    ]);
                    
                }
            }
			
			
        }else if($type == 'money_fenxiang_1'){
        	// 徒弟邀请师徒页面分享奖励零钱
        	// 徒弟 
        	if($yaoqing['money_fenxiang_1']){
        		// 查询今日是否已奖励
                $content='师徒分享第三方平台奖励零钱';
                $db=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                	//  增加奖励
                    $money=$yaoqing['money_fenxiang_1'];
                    $moneyDb=_moneyDb([
                        'uid'   =>  $uid,
                        'money' =>  [
                            'money'     =>  $money*100,
                            'content'   =>  $content
                        ]
                    ]);
                    if($moneyDb){
                        $ret=1;
                        echo json_encode(['ret'=>['h1'=>'￥'.$money.'','span'=>'分享平台获得￥'.$money.'零钱<br>已放入你的零钱<br>明天再分享可获得￥'.$money.'零钱']]);
                    }
                }
        	}
        	// 师傅
        	if($yaoqing['money_fenxiang_1_s1']){
        		// 查询今日是否已奖励
                $content='id:'.$uid.'师徒分享第三方平台奖励零钱';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s1,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                	//  增加奖励
                    $money=$yaoqing['money_fenxiang_1_s1'];
                    _moneyDb([
                        'uid'   =>  $s1,
                        'money' =>  [
                            'money'     =>  $money*100,
                            'content'   =>  $content
                        ]
                    ]);
                }
        	}
			
			// 师公
        	if($yaoqing['money_fenxiang_1_s0']){
        		// 查询今日是否已奖励
                $content='id:'.$uid.'师孙分享第三方平台奖励零钱';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s0,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                	//  增加奖励
                    $money=$yaoqing['money_fenxiang_1_s0'];
                    _moneyDb([
                        'uid'   =>  $s0,
                        'money' =>  [
                            'money'     =>  $money*100,
                            'content'   =>  $content
                        ]
                    ]);
                }
        	}

            // 徒弟邀请师徒页面分享金币
            // 徒弟 
            if($yaoqing['jinbi_fenxiang_1']){
                // 查询今日是否已奖励
                $content='师徒分享第三方平台奖励金币';
                $db=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    //  增加奖励
                    $money=$yaoqing['jinbi_fenxiang_1'];
                    $moneyDb=_moneyDb([
                        'uid'   =>  $uid,
                        'jinbi' =>  [
                            'money'     =>  $money,
                            'content'   =>  $content
                        ]
                    ]);
                    if($moneyDb){
                        if(empty($ret)){
                            echo json_encode(['ret'=>['h1'=>''.$money.'金币','span'=>'分享平台获得'.$money.'金币<br>已放入你的账户<br>明天再分享可获得'.$money.'金币']]);
                        }
                    }
                }
            }
            // 师傅
            if($yaoqing['jinbi_fenxiang_1_s1']){
                // 查询今日是否已奖励
                $content='id:'.$uid.'师徒分享第三方平台奖励金币';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s1,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    //  增加奖励
                    $money=$yaoqing['jinbi_fenxiang_1_s1'];
                    _moneyDb([
                        'uid'   =>  $s1,
                        'jinbi' =>  [
                            'money'     =>  $money,
                            'content'   =>  $content
                        ]
                    ]);
                }
            }
			// 师公
            if($yaoqing['jinbi_fenxiang_1_s0']){
                // 查询今日是否已奖励
                $content='id:'.$uid.'师徒孙分享第三方平台奖励金币';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s0,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    //  增加奖励
                    $money=$yaoqing['jinbi_fenxiang_1_s0'];
                    _moneyDb([
                        'uid'   =>  $s0,
                        'jinbi' =>  [
                            'money'     =>  $money,
                            'content'   =>  $content
                        ]
                    ]);
                }
            }
        }else if($type == 'money_fenxiang_2'){
        	// 徒弟邀请师徒页面分享奖励零钱
        	// 徒弟
        	if($yaoqing['money_fenxiang_2']){
        		// 查询今日是否已奖励
                $content='文章分享第三方平台奖励零钱';
                $db=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                	//  增加奖励
                    $money=$yaoqing['money_fenxiang_2'];
                    $moneyDb=_moneyDb([
                        'uid'   =>  $uid,
                        'money' =>  [
                            'money'     =>  $money*100,
                            'content'   =>  $content
                        ]
                    ]);
                    if($moneyDb){
                        $ret=1;
                        echo json_encode(['ret'=>['h1'=>'￥'.$money.'','span'=>'文章分享获得￥'.$money.'零钱<br>已放入你的零钱<br>明天再分享可获得￥'.$money.'零钱']]);
                    }
                }
        	}
		
			
			
        	// 师傅
        	if($yaoqing['money_fenxiang_2_s1']){
        		// 查询今日是否已奖励
                $content='id:'.$uid.'文章分享第三方平台奖励零钱';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s1,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                	//  增加奖励
                    $money=$yaoqing['money_fenxiang_2_s1'];
                    _moneyDb([
                        'uid'   =>  $s1,
                        'money' =>  [
                            'money'     =>  $money*100,
                            'content'   =>  $content
                        ]
                    ]);
                }
        	}
			// 师公
        	if($yaoqing['money_fenxiang_2_s0']){
        		// 查询今日是否已奖励
                $content='id:'.$uid.'徒孙文章分享第三方平台奖励零钱';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s0,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                	//  增加奖励
                    $money=$yaoqing['money_fenxiang_2_s0'];
                    _moneyDb([
                        'uid'   =>  $s0,
                        'money' =>  [
                            'money'     =>  $money*100,
                            'content'   =>  $content
                        ]
                    ]);
                }
        	}


            // 徒弟邀请师徒页面分享奖励金币
            // 徒弟
            if($yaoqing['jinbi_fenxiang_2']){
                // 查询今日是否已奖励
                $content='文章分享第三方平台奖励金币';
                $db=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    //  增加奖励
                    $money=$yaoqing['jinbi_fenxiang_2'];
                    $moneyDb=_moneyDb([
                        'uid'   =>  $uid,
                        'jinbi' =>  [
                            'money'     =>  $money,
                            'content'   =>  $content
                        ]
                    ]);
                    if($moneyDb){
                        if(empty($ret)){
                            echo json_encode(['ret'=>['h1'=>''.$money.'金币','span'=>'文章分享获得'.$money.'金币<br>已放入你的账户<br>明天再分享可获得'.$money.'金币']]);
                        }
                    }
                }
            }
            // 师傅
            if($yaoqing['jinbi_fenxiang_2_s1']){
                // 查询今日是否已奖励
                $content='id:'.$uid.'文章分享第三方平台奖励金币';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s1,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    //  增加奖励
                    $money=$yaoqing['jinbi_fenxiang_2_s1'];
                    _moneyDb([
                        'uid'   =>  $s1,
                        'jinbi' =>  [
                            'money'     =>  $money,
                            'content'   =>  $content
                        ]
                    ]);
                }
            }
			
			 // 师公
            if($yaoqing['jinbi_fenxiang_2_s0']){
                // 查询今日是否已奖励
                $content='id:'.$uid.'徒孙文章分享第三方平台奖励金币';
                $db=Db::name('yaoqing_records')->where(['uid'=>$s0,'content'=>$content])->whereTime('time','today')->value('uid');
                if(!$db){
                    //  增加奖励
                    $money=$yaoqing['jinbi_fenxiang_2_s0'];
                    _moneyDb([
                        'uid'   =>  $s0,
                        'jinbi' =>  [
                            'money'     =>  $money,
                            'content'   =>  $content
                        ]
                    ]);
                }
            }
			
			
        }else{

        }
    }
 
    //  收入排行榜
    public function paihang(){
        $type=input('type/d');
        if($type){
            $where['a.type']=0;
            $where['a.data']=0;
            $join=[
                ['__MEMBER__ b','a.uid = b.id'],
                ['__YAOQING__ c','c.uid = b.id']
            ];
            $data=Db::name('yaoqing_records')->alias('a')->join($join)->where($where)->whereTime('time','week')->field('sum(a.money) as money_num,b.id,b.nickname,b.mobile,c.tudi_num')->group('a.uid')->order('money_num desc')->limit(100)->select();
        }else{
            $join=[
                ['__MEMBER__ b','a.uid = b.id'],
            ];
            $data=Db::name('yaoqing')->alias('a')->join($join)->field('b.id,b.nickname,b.mobile,a.tudi_num,a.money_num')->order('a.money_num desc')->limit(100)->select();
        }
         
        foreach ($data as $k => $v) {
            if(!$v['nickname']){
                $data[$k]['nickname']=_username($v);
            }
            $data[$k]['money']=_money($v['money_num']);
        }
        echo json_encode($data);
    }
    // 昨日收入
    public function yesterday(){
        $where['uid']=$this->member['id'];
        $where['type']=0;
        $where['data']=0;
        $a=Db::name('yaoqing_records')->where($where)->whereTime('time','yesterday')->sum('money');
        $where['type']=1;
        $b=Db::name('yaoqing_records')->where($where)->whereTime('time','yesterday')->sum('money');
        echo json_encode(['a'=>_money($a),'b'=>$b]);
    }
    
    // 金币商城
    public function mall(){
        $data=Db::name('shoplist_types')->field('id,title')->where(['hide'=>1])->order('des desc,id asc')->select();
        foreach ($data as $k => $v) {
            $shoplist=Db::name('shoplists')->where(['typeid'=>$v['id'],'hide'=>1])->order('des desc,id desc')->field('id,title,image,jinbi,money')->limit(6)->select();
            foreach ($shoplist as $ks => $vs) {
                $shoplist[$ks]['jinbi']=$vs['jinbi'].'金币';
                $shoplist[$ks]['money']=($vs['money']/100).'元';
                $shoplist[$ks]['image']=_imgUrl().$vs['image'];
            }
            $data[$k]['data']=$shoplist;
        }
        echo json_encode($data);
    }
    // 金币商城列表
    public function mallList(){
        // $where['hide']=1;
        if(input('typeid/d')){
            $where['typeid']=input('typeid/d');
            $data=Db::name('shoplists')->field('id,title,image,jinbi,money')->where($where)->order('des desc,id desc')->paginate()->toarray();
        }
        else
        {
 // $where['typeid']=input('typeid/d');
            $data=Db::name('shoplists')->field('id,title,image,jinbi,money')->paginate()->toarray();

        }
        
        foreach ($data['data'] as $k => $v) {
            $data['data'][$k]['jinbi']=$v['jinbi'].'金币';
            $data['data'][$k]['money']=($v['money']/100).'元';
            $data['data'][$k]['image']=_imgUrl().$v['image'];
        }
        echo json_encode($data);
    }
    // 项目详细
    public function mallView(){
        $id=input('id/d');
        $data=Db::name('shoplists')->where(['hide'=>1,'id'=>$id])->find();
        $data['images']=json_decode($data['images'],true);
        foreach($data['images'] as $v){
            $images[]=_imgUrl().$v;
        }
        $data['images']=$images;
        $data['money']=_money($data['money']);
        $data['image']=_imgUrl().$data['image'];
        Db::name('shoplists')->where('id',$id)->setInc('click');
        $data['click']=$data['click']+1;
        echo json_encode($data);
    }
    // 兑换支付
    public function mallPay(){

        $shopid=input('shopid/d');
        $type=input('type/d');
        $xingming=input('xingming');
        $mobile=input('mobile');
        $dizhi=input('dizhi');
        $alipay=input('alipay');
        // 开始验证
        $validate = new Validate([
            'xingming|姓名'              =>       'require',
            'mobile|手机号码'         =>      'require|number',
            'dizhi|详细地址'         =>      'require',
            'type|兑换方式'         =>      'require|number|in:1,2',
        ]);
        $validata=[
            'xingming'             =>      $xingming,
            'mobile'             =>      $mobile,
            'dizhi'             =>      $dizhi,
            'type'              =>       $type
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));
        }
        // 结束验证
        if(!_isMobile($mobile)){
            exit(json_encode(['err'=>'手机不正确']));
        }
        $pattern="/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i";
        // if(!preg_match($pattern,$alipay)){
        //     if(!_isMobile($alipay)){
        //         exit(json_encode(['err'=>'支付宝号码不正确']));
        //     }
        // }
        // // 获取商品信息
        $shop=Db::name('shoplists')->where(['id'=>$shopid,'hide'=>1])->find();
        if(!$shop){
            exit(json_encode(['err'=>'商品不存在或已下架']));
        }
        // 商品存库是否充足
        if(!intval($shop['num'])){
            exit(json_encode(['err'=>'商品存库不足']));
        }
        // 检测用户金币或者余额
        if($type==1){
            if(!$this->member['yaoqing']['jinbi'] || $shop['jinbi'] > $this->member['yaoqing']['jinbi']){
                exit(json_encode(['err'=>'金币不足']));
            }
        }
        if($type==2){
           if(!$this->member['yaoqing']['money'] || $shop['money'] > $this->member['yaoqing']['money']){
                exit(json_encode(['err'=>'零钱不足']));
            } 
        }
        // 开始下单支付
        $time=time();
        $ip=_ip();
        $code=($type==1 ? 'A' : 'B').rand(1000000,9999999);
        // 添加订单数据
        Db::name('shoplist_records')->insert([
            'shopid'    =>  $shop['id'],
            'num'       =>  1,
            'type'      =>  $type,
            'uid'       =>  $this->member['id'],
            'time'      =>  $time,
            'code'      =>  $code,
            'ip'        =>  $ip,
            'money'     =>  $shop['money'],
            'xingming'  =>  $xingming,
            'dizhi'     =>  $dizhi,
            'mobile'    =>  $mobile
        ]);
         
        $typeJInbiMoney=$type==1 ? 'jinbi' : 'money';
        // 更新用户信息
        $content='id:'.$shop['id'].($type==1 ? ' 金币' : ' 零钱').'商品兑换';
        _moneyDb([
            'uid'   =>  $this->member['id'],
            $typeJInbiMoney =>  [
                'money'     =>  $shop[$typeJInbiMoney],
                'content'   =>  $content,
                'type'      =>  1,
            ]
        ]);
        // 更新商品存款
        Db::name('shoplists')->where(['id'=>$shopid])->setDec('num');
        echo json_encode(['ret'=>'兑换成功']);
         
    }
    // 兑换记录
    public function mallOrder(){
        $where['a.uid']=$this->member['id'];
        $join=[
            ['shoplists b','a.shopid = b.id'],
        ];
        $data=Db::name('shoplist_records')->alias('a')->join($join)->where($where)->field('a.shopid,a.data,a.code,a.time,a.money,a.kuaidi,a.danhao,a.data,a.type,a.num,b.title,b.image')->order('a.time desc')->paginate()->toarray();
        foreach($data['data'] as $k => $v){
            $data['data'][$k]['image']=_imgUrl().$v['image'];
            if($v['type']==2){
                $data['data'][$k]['money']=_money($v['money']);
            }
            $data['data'][$k]['time']=date('Y-m-d H:i:s');
            $f=[0=>'等待平台发货',1=>'已发货',2=>'已完成'];
            $data['data'][$k]['f']=$f[$v['data']];
        }
        echo json_encode($data);
    }
    // 任务列表
    public function renwu(){
        $uid=$this->member['id'];
        $data=Db::name('renwu_types')->where(['hide'=>1])->order('des desc,id asc')->cache(_cache('db'))->select();
        foreach ($data as $k => $v) {
            $data[$k]['data']=Db::name('renwu')->where(['typeid'=>$v['id'],'hide'=>1])->cache(_cache('db'))->order('des desc,id asc')->select();
            $data[$k]['img']=_imgUrl().$v['img'];
            foreach ($data[$k]['data'] as $ks => $vs) {
                $data[$k]['data'][$ks]['money']='+'.$vs['money'];
                if($vs['url']=='video_win' || $vs['url']=='weitoutiao_win' || $vs['url']=='xiaoshipin_win' || $vs['url']=='member_win'){
                    $data[$k]['data'][$ks]['url']='_index_win(\''.$vs['url'].'\')';
                }else if($vs['url']=='index'){
                    $data[$k]['data'][$ks]['url']='_hone()';
                }else{
                    $data[$k]['data'][$ks]['url']='_url({url:\''.$vs['url'].'\',title:\''.$vs['name'].'\'})';
                }
                // 新手问卷
                if($vs['id'] == 1){
                    $ret=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>'新手问卷奖励金币'])->value('uid');
                    if($ret){
                        $data[$k]['data'][$ks]['btn']='已完成';
                        $data[$k]['data'][$ks]['url']='';
                    }
                }
                // 分享邀请徒弟
                if($vs['id'] == 3){
                    $ret=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>'师徒分享第三方平台奖励金币'])->whereTime('time','today')->value('uid');
                    if($ret){
                        $data[$k]['data'][$ks]['btn']='已完成';
                        $data[$k]['data'][$ks]['url']='';
                    }
                }
                // 分享阅读文章
                if($vs['id'] == 4){
                    $ret=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>'文章分享第三方平台奖励金币'])->whereTime('time','today')->value('uid');
                    if($ret){
                        $data[$k]['data'][$ks]['btn']='已完成';
                        $data[$k]['data'][$ks]['url']='';
                    }
                }
                // 阅读资讯
                if($vs['id'] == 5){
                    $ret=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>['like','%篇文章奖励金币%']])->whereTime('time','today')->value('uid');
                    if($ret){
                        $data[$k]['data'][$ks]['btn']='已完成';
                        $data[$k]['data'][$ks]['url']='';
                    }
                }
                // 发布微头条
                if($vs['id']==6){
                    $ret=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>'发布微头条奖励金币'])->whereTime('time','today')->value('uid');
                    if($ret){
                        $data[$k]['data'][$ks]['btn']='已完成';
                        $data[$k]['data'][$ks]['url']='';
                    }
                }
                // 问卷调查
                if($vs['id']==7){
                    $ret=Db::name('diaocha_user')->where(['uid'=>$uid])->value('id');
                    if($ret){
                        $data[$k]['data'][$ks]['btn']='已完成';
                        $data[$k]['data'][$ks]['url']='';
                    }
                }
            }
        }
        // 宝箱时间
        $html['baoxiang']=$this->baoxiangTime();
        $html['data']=$data;
        $config=config()['renwu'];
        $html['config']=$config;
        $html['config']['qiandao']=['qiandao_1','qiandao_2','qiandao_3','qiandao_4','qiandao_5','qiandao_6','qiandao_7'];
        $timeText=$html['config']['baoxiang'];
        if($timeText < 60){
            $timeText=$timeText.'分钟';
        }else{
            $timeText=($timeText/60).'小时';
        }
        $html['timeText']=$timeText;
        // 签到
        $html['qiandao']=$this->qiandaoTianshu();
        if(!$html['qiandao']){
            $qiandao=Db::name('qiandao')->where(['uid'=>$uid])->whereTime('time','today')->find();
            $qiandao['code']=1;
            if($qiandao['tianshu']>=7){
                $qiandao['money']=$config['qiandao_7'];
                $qiandao['lingqu']=$qiandao['money'];
            }else{
                $qiandao['money']=$config['qiandao_'.$qiandao['tianshu']];
                $qiandao['lingqu']=$config['qiandao_'.($qiandao['tianshu']+1)];
            }
            $qiandao['lingqu']='明日签到可领+'.$qiandao['lingqu'].'金币';
            $html['qiandao']=$qiandao;
        }else{
            $html['qiandao']['tianshu']=$html['qiandao']['tianshu']-1;
        }
        echo json_encode($html);
    }
    // 新手问卷奖励金币
    public function xinshouwenjuan(){

    }
    // 宝箱时间信息
    private function baoxiangTime(){
        $uid=$this->member['id'];
        $config=config()['renwu'];
        $memberTime=Db::name('yaoqing_records')->where(['uid'=>$uid,'content'=>'宝箱奖励','type'=>1,'data'=>0])->order('time desc')->value('time');
        if(!$memberTime){
            $memberTime=$this->member['create_time'];
        }
        $memberTime=$memberTime+($config['baoxiang']*60);
        $time=time();
        if($memberTime>=$time){
            $data=$memberTime-$time;
        }else{
            $data=0;
        }
        return $data;
    }
    // 打开宝箱
    public function baoxiangAjax(){
        $uid=$this->member['id'];
        $memberTime=$this->baoxiangTime();
        if($memberTime){
            $data=['err'=>'打开宝箱时间还没到哦！'];
        }else{
            $config=config()['renwu'];
            $money=$this->baoxiangConfigJinbi();
            $moneyDb=_moneyDb([
                'uid'   =>  $uid,
                'jinbi' =>  [
                    'money'     =>  $money,
                    'content'   =>  '宝箱奖励'
                ]
            ]);
            $data=['ret'=>'+'.$money.'金币'];
        }
        echo json_encode($data);
    }
    // 获取奖励配置范围
    private function baoxiangConfigJinbi(){
        $config=config()['renwu'];
        $a=$this->member['yaoqing']['tudi_num'];
        switch ($a) {
            case $a >= $config['baoxiang_tudi_5']:
                $jinbi = 0;
                break;
            case $a >= $config['baoxiang_tudi_4']:
                $jinbi = 4;
                break;
            case $a >= $config['baoxiang_tudi_3']:
                $jinbi = 3;
                break;
            case $a >= $config['baoxiang_tudi_2']:
                $jinbi = 2;
                break;
            case $a >= $config['baoxiang_tudi_1']:
                $jinbi = 1;
                break;
            default:
                $jinbi = 5;
                # code...
                break;
        }
        $jinbi=$jinbi ? $config['baoxiang_tudi_'.$jinbi.'_money'] : $config['baoxiang_r'];
        $rand = rand($config['baoxiang_l'],$jinbi);
        return $rand;
    }
    // 每日签到

    public function qiandaoAjax(){
        $uid=$this->member['id'];
        $data=$this->qiandaoTianshu();
        // echo json_encode($data);
        // exit();
        $moneyDb=_moneyDb([
            'uid'   =>  $uid,
            'jinbi' =>  [
                'money'     =>  $data['money'],
                'content'   =>  '每日签到'
            ]
        ]);
        if($moneyDb){
            Db::name('qiandao')->insert(['uid'=>$uid,'tianshu'=>$data['tianshu'],'time'=>time(),'ip'=>_ip()]);
            echo json_encode(['ret'=>'明日签到可领+'.$data['lingqu'].'金币']);
        }else{
            echo json_encode(['err'=>'签到失败，请联系客服']);
        }
    }
    // 根据签到的天数奖励
    private function qiandaoTianshu($a=1){
        $uid=$this->member['id'];
        $config=config()['renwu'];
        $data=Db::name('qiandao')->where(['uid'=>$uid])->whereTime('time','today')->value('id');
        if($data){
            return false;
        }
        $data=Db::name('qiandao')->where(['uid'=>$uid])->whereTime('time','yesterday')->find();
        if($data){
            // 连续签到
            $tianshu=$data['tianshu']+1;
            if($tianshu>=7){
                $html['money']=$config['qiandao_7'];
                $html['lingqu']=$html['money'];
            }else{
                $html['money']=$config['qiandao_'.$tianshu];
                $html['lingqu']=$config['qiandao_'.($tianshu+1)];
            }
            $html['tianshu']=$tianshu;
        }else{
            $html['tianshu']=1;
            $html['money']=$config['qiandao_1'];
            $html['lingqu']=$config['qiandao_2'];
        }
        $html['lingqu']='+'.$html['lingqu'].'金币';
        $html['code']=0;
        return $html;
    }
    // 调查
    public function diaochaInfo(){
        $data=Db::name('diaocha')->order("des desc,id asc")->select();
        foreach ($data as $k => $v) {
            $data[$k]['data']=json_decode($v['data']);
        }
        echo json_encode($data);
    }
    // 添加调查数据
    public function diaochaAdd(){
        $uid=$this->member['id'];
        // 判断是否已调查
        $data=Db::name('diaocha_user')->where(['uid'=>$uid])->value('id');
        if($data){
            exit(json_encode(['err'=>'您已经提交过了']));
        }
        $data=input('post.data');
        if(!$data){
            exit(json_encode(['err'=>'非法操作']));
        }
        $data=explode(",",$data);
        $count=Db::name('diaocha')->count();
        if($count!=count($data)){
            exit(json_encode(['err'=>'非法操作']));
        }
        $d=Db::name('diaocha')->order('des desc,id asc')->select();
        $config=config()['renwu'];
        // 奖励
        $moneyDb=_moneyDb([
            'uid'   =>  $uid,
            'jinbi' =>  [
                'jinbi'     =>  $config['diaocha'],
                'content'   =>  '问卷调查'
            ]
        ]);

        // if(!$moneyDb){
        //     exit(json_encode(['err'=>'奖励失败，请联系管理员！']));
        // }
        $a=[];
        foreach ($d as $k => $v) {
            $a[$k]['id'] = $v['id'];
            $a[$k]['title'] = $v['title'];
            $a[$k]['name'] = $data[$k];
        }
        // 添加数据
        $db=Db::name("diaocha_user")->insert(['uid'=>$uid,'time'=>time(),'ip'=>_ip(),'data'=>json_encode($a)]);

        $moneyDb=_moneyDb([
                        'uid'   =>  $uid,
                        'jinbi' =>  [
                            'money'     =>  $config['diaocha'],
                            'content'   =>  "调查获得金币"
                        ]
                    ]);


        if($db){
            $ret=['ret'=>'提交成功'];
        }else{
            $ret=['err'=>'提交失败'];
        }
        echo json_encode($ret);
    }
    // 新手答题
    public function datiInfo(){
        $data=Db::name('dati')->order("des desc,id asc")->select();
        foreach ($data as $k => $v) {
            $data[$k]['data']=json_decode($v['data']);
        }
        echo json_encode($data);
    }
}
