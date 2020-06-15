<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Typeid extends Common
{
    public function index(){
        $tmap['id'] = array('neq',get_tieba_rootid());
		$tmap['tid'] = array('neq',get_tieba_rootid());		
        $typedb=Db::name('typeid')->where($tmap)->order('des desc,id asc')->select();
        $typedb=get_tree_option($typedb,0);
        $this->assign('data',$typedb);
        return $this->fetch();
    }
  //   public function add(){
		// if(request()->isAjax()){
		// 	$typeid           = model('Typeid');
		// 	$data=input('post.');
		// 	if ($typeid->allowField(true)->validate(true)->save($data)) {
		// 		$data=array("ret"=>'新增成功');
		// 	} else {
		// 		$data=array('err'=>$typeid->getError());
		// 	}
		// 	return json($data);
		// }else{
		// 	return $this->fetch();
		// }
  //   }
  
   public function tieba_index(){
	   $rootid = get_tieba_rootid();	
        $tmap = "tid = $rootid";
        $typedb=Db::name('typeid')->where($tmap)->order('des desc,id desc')->paginate('',false,['query'=>request()->param()]);
        //print_r($rootid);
		$page = $typedb->render();
        $this->assign('page', $page);
		$typedb=get_tree_option($typedb,$rootid);
        $this->assign('data',$typedb);
		//print_r($typedb);
		
        return $this->fetch();
	   
   }
   
    public function tieba_faved(){
	    $id=input('id');
		$faved = array();
		$faved_ob = Db::name('member_favorite')->where(['aid'=>$id,'type'=>2])->select();
		if($faved_ob && count($faved_ob)>0){
			foreach ($faved_ob as  $v) {
				$faved[] = $v['uid'];
			}
		}
		$map['id'] = array('in',$faved);
		
        $data=Db::name('member')->order('id desc,update_time desc')->where($map)->paginate('',false,['query'=>request()->param()]);
        $this->assign('data',$data);
        $page = $data->render();
        $this->assign('page', $page);
        return $this->fetch();
	   
   }
   
   function tieba_bazhu(){
	    $id=input('id');
		$tieba = Db::name('typeid')->where(['id'=>$id])->find();
		$this->assign('tieba',$tieba);
	    $where['aid']=$id;
		$where['type']=3;
	    $data=Db::name('member_favorite')->order('id desc')->where($where)->paginate('',false,['query'=>request()->param()]);
        $this->assign('data',$data);
        $page = $data->render();
        $this->assign('page', $page);
        return $this->fetch();
   }
   
    public function add(){
        // $hostdir=dirname(__FILE__);
        // $filesnames = scandir($hostdir);
        // var_dump($filesnames);
        // exit();
      //  $mychannelId=input('mychannel');
        $typedb=Db::name('typeid')->order('des desc,id asc')->select();
        $typedb=get_tree_option($typedb,0);
        $this->assign('typeid',$typedb);
      //  $mychannel=Db::name('mychannel')->order('id asc')->select();
       // $this->assign('mychannel',$mychannel);
		$id=input("id");
        if(request()->isAjax()){
        
            $post=input('post.');;
            $validate=validate('Typeid');
            if($validate->check($post)){
                $time=time();
                $post['update_time']=$time; //更新时间
                if(!$id){   // 添加数据
                    // 开始判断模型是否存在
                    // if(!$mychannelId){
                    //     return ['err'=>'频道模型参数错误'];
                    // }
                    // $mychannelDb=Db::name('mychannel')->where('id',$mychannelId)->find();
                    // if(!$mychannelDb){
                    //     return ['err'=>'频道模型参数错误'];
                    // }
                    // $post['mychannel']=$mychannelId;
                    // 模型判断结束
                    if($post['tid']==0){
                        $typename=Db::name('typeid')->where(['title'=>$post['title'],'tid'=>0])->find();
                        if($typename){
                            return ['err'=>'栏目名称已存在'];
                        }
                    }
                     
                    $post['create_time']=$time; // 添加时间
                    $db=Db::name('typeid')->insert($post);
                    if($db){
                        $data=['ret'=>'添加成功'];
                    }else{
                        $data=['err'=>'添加失败'];
                    } 
                }else{      //修改数据
                    $db=Db::name('typeid')->where('id',$id)->update($post);
                    if($db){
                       // Db::name('typeid')->update($post);
                        $data=['ret'=>'修改成功'];
                    }else{
                        $data=['err'=>'修改失败'];
                    }
                }
            }else{
                $data=["err"=>$validate->getError()];
            }
        }else{
            if($id){
                $name=Db::name('typeid')->where('id',$id)->find();
                //var_dump($name);die();
                if($name){
                     $this->assign('name',$name);
                }else{
                    $data=['err'=>'id参数错误'];
                }
            }else{
                // if($mychannelId){
                //     $mychannelId=_mychannelName($mychannelId,'templest');
                // }
                // $this->assign('mychannelId',$mychannelId);
            }
            $data=$this->fetch();
        }
        return $data;
    }
	
	public function add_tieba(){
        // $hostdir=dirname(__FILE__);
        // $filesnames = scandir($hostdir);
        // var_dump($filesnames);
        // exit();
      //  $mychannelId=input('mychannel');
        $typedb=Db::name('typeid')->order('des desc,id asc')->select();
        $typedb=get_tree_option($typedb,0);
        $this->assign('typeid',$typedb);
      //  $mychannel=Db::name('mychannel')->order('id asc')->select();
       // $this->assign('mychannel',$mychannel);
		$id=input("id");
        if(request()->isAjax() || input('post.')){
        
            $post=input('post.');
            $validate=validate('Typeid');
            if($validate->check($post)){
                $time=time();
                $post['update_time']=$time; //更新时间
                if(!$id){   // 添加数据
                    // 开始判断模型是否存在
                    // if(!$mychannelId){
                    //     return ['err'=>'频道模型参数错误'];
                    // }
                    // $mychannelDb=Db::name('mychannel')->where('id',$mychannelId)->find();
                    // if(!$mychannelDb){
                    //     return ['err'=>'频道模型参数错误'];
                    // }
                    // $post['mychannel']=$mychannelId;
                    // 模型判断结束
                    if($post['tid']==0){
                        $typename=Db::name('typeid')->where(['title'=>$post['title'],'tid'=>0])->find();
                        if($typename){
                            return ['err'=>'栏目名称已存在'];
                        }
                    }
					$hide = $post['hide'];
                     
                    $post['create_time']=$time; // 添加时间
                    $db=Db::name('typeid')->insert($post);
                    if($db){
						
                        $data=['ret'=>'添加成功'];
                    }else{
                        $data=['err'=>'添加失败'];
                    } 
                }else{      //修改数据
                    $db=Db::name('typeid')->where('id',$id)->update($post);
                    if($db){
						if($post['hide'] == 1){
						  $content='创建贴吧 id:'.$id.' 奖励金币';
						  $count=Db::name('yaoqing_records')->where(['content'=>['like','%'.$content.'%']])->count();
						  if(!$count){
							$name=Db::name('typeid')->where('id',$id)->find();
							$uid = $name['uid'];
							$member=_user($uid);
							$ret = _tieba_jiangli($member,$id);
						  }
						}
						
                       // Db::name('typeid')->update($post);
                        $data=['ret'=>'修改成功'];
                    }else{
                        $data=['err'=>'修改失败'];
                    }
                }
            }else{
                $data=["err"=>$validate->getError()];
            }
        }else{
            if($id){
                $name=Db::name('typeid')->where('id',$id)->find();
                //var_dump($name);die();
                if($name){
                     $this->assign('name',$name);
                }else{
                    $data=['err'=>'id参数错误'];
                }
            }else{
                // if($mychannelId){
                //     $mychannelId=_mychannelName($mychannelId,'templest');
                // }
                // $this->assign('mychannelId',$mychannelId);
            }
            $data=$this->fetch();
        }
        return $data;
    }
    // 显示 隐藏栏目
    public function hide(){
        $id=input('id');
        if(request()->isAjax()){
         
            if($id){
                $arra=['0'=>'隐藏','1'=>'显示'];
                $type='hide';
                $db=Db::name('typeid')->where('id',$id)->value('hide');
                if($db==1){
                    $hide=0;
                }else{
                    $hide=1;
                }
                $db=Db::name('typeid')->where('id',$id)->setField($type,$hide);
                if($db){
                    $data=['ret'=>$arra[$hide].'成功','id'=>$hide,'text'=>$arra[$hide]];
                }else{
                    $data=['err'=>$arra[$hide].'失败'];
                }
            }else{
                $data=['err'=>'ID参数错误'];
            }
        }else{
            $data=['err'=>'AJAX参数错误'];
        }
        return $data;
    }
	
	public function be_bazhu(){
		//echo 1;
		//die();
		$data=['err'=>'提交参数错误'];
		$id=input('aid');
		$uid=input('uid');
		
		
		if(request()->isAjax()){
          
            $id=input('aid');
			$uid=input('uid');
            if($id){
                $update['bazhu_id'] = $uid;
		        $db=Db::name('typeid')->where('id',$id)->update(['bazhu_id'=>$uid]);
                 $data=['ret'=>'修改成功'];
            }else{
                $data=['err'=>'id参数错误'];
            }
        }else{
            $data=['err'=>'提交参数错误'];
        }
        return $data;
		
		
	}
	public function un_bazhu(){
		if(request()->isAjax()){
          
            $id=input('id');
			$uid=input('uid');
            if($id){
                $update['bazhu_id'] = 0;
		        $db=Db::name('typeid')->where('id',$id)->update($update);
                 $data=['ret'=>'修改成功'];
            }else{
                $data=['err'=>'id参数错误'];
            }
        }else{
            $data=['err'=>'提交参数错误'];
        }
        return $data;
		
		
	}
	
	public function bazhusq_del(){
		$data = [];
		if(request()->isAjax() || $_GET){
          
            $id=input('id');
            if($id){
                //$typeid=Db::name('member_favorite')->where(['id'=>$id])->find();
                //if(!$typeid){
                    $db=Db::name('member_favorite')->where(['id'=>$id])->delete();
                    if($db){
                        $data=['ret'=>'删除成功'];
                    }else{
                        $data=['err'=>'删除失败'];
                    }
                
                 
            }else{
                $data=['err'=>'id参数错误'];
            }
        }else{
            $data=['err'=>'提交参数错误'];
        }
        return $data;
	}
    //删除栏目
    public function typedel(){
        // return ['err'=>'使用采集文章不建议删除分类，否则会影响到采集文章关联分类'];
        if(request()->isAjax()){
          
            $id=input('id');
            if($id){
                $typeid=Db::name('article')->where('typeid',$id)->find();
                if(!$typeid){
                    $db=Db::name('typeid')->delete($id);
                    if($db){
                        $data=['ret'=>'删除成功'];
                    }else{
                        $data=['err'=>'删除失败'];
                    }
                }else{
                    $data=['err'=>'栏目下有文章，请先删除文章对应栏目'];
                }
                 
            }else{
                $data=['err'=>'id参数错误'];
            }
        }else{
            $data=['err'=>'提交参数错误'];
        }
        return $data;
    }
    // 下面跳转链接
    public function add1(){
        $url=url('typeid/add',['mychannel'=>'1','url'=>'-1']);
        $this->redirect($url);
    }
    public function add2(){
        $url=url('typeid/add',['mychannel'=>'2','url'=>'-1']);
        $this->redirect($url);
    }
    public function add3(){
        $url=url('typeid/add',['mychannel'=>'3','url'=>'-1']);
        $this->redirect($url);
    }
    
}
