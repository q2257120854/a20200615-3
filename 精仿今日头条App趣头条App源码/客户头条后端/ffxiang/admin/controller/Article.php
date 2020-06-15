<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
use think\Session;
class Article extends Common
{
    public function index(){
        $mychannel=input('mychannel');
		//print_r(config());
		
        if($mychannel){
            $map['mychannel']=$mychannel;
        }
        $this->assign('mychannel',$mychannel);
		
		
		
        $search_name=input('param.search_name');
        $search_typeid=input('param.search_typeid');
        $typeid=input('param.typeid');
        $flags=input('param.flags');
        $weitoutiao=input('param.weitoutiao');
        $this->assign('weitoutiao',$weitoutiao);
        $zhiding=input('param.zhiding');
        $this->assign('zhiding',$zhiding);
         $tuijian=input('param.tuijian');
         $this->assign('tuijian',$tuijian);
           $stuijian=input('param.stuijian');
           $this->assign('stuijian',$stuijian);
		if($weitoutiao == 3){   
		$rootid = get_tieba_rootid();	
		$tmap['tid'] = array('eq',get_tieba_rootid());
		}else{
			$rootid = 0;	
		$tmap['id'] = array('neq',get_tieba_rootid());
		$tmap['tid'] = array('neq',get_tieba_rootid());	
		}
        $typeiddb=Db::name('typeid')->where($tmap)->order('des desc,id asc')->cache(_cache('db'))->select();
        $this->assign('typeid',get_tree_option($typeiddb,$rootid));
        if($search_name){
          //  $map['title']  = ['like','%'.$search_name.'%'];
            $map['title|tags|description']=['like','%'.$search_name.'%'];
        }
        if($search_typeid && $typeid){
            $map['typeid']  = $search_typeid;
        }else{
            if($search_typeid){
                $map['typeid']  = $search_typeid;
            }
            if($typeid){
                $map['typeid']  = $typeid;
            }
        }
        if($flags){
            $map['flags']=$flags;
        }
        if($weitoutiao){
            $map['weitoutiao']=$weitoutiao;
        }

         if($zhiding){
            $map['zhiding']=$zhiding;
        }
       
        if($tuijian){
            $map['tuijian']=$tuijian;
        }
        
         if($stuijian){
            $map['stuijian']=$stuijian;
        }
		
		if(isset($map['mychannel']) && ($map['mychannel'] == 1 || $map['mychannel'] == 2 || $map['mychannel'] == 3 )){
			$map['weitoutiao'] = ['not in','1,3,4'];
		}

        $map['hide']=['in','0,1,2'];
		//print_r($map);
        $data=Db::name('article')->order('des desc,id desc')->where($map)->paginate('',false,['query'=>request()->param()]);
        $page = $data->render();
        $this->assign('data',$data);
        $this->assign('page', $page);
		if($weitoutiao == 3){
			return $this->fetch('tiezi_list');
		}else{
			return $this->fetch();
		}
        
    }
    // 添加文章
    public function add(){
        $mychannel=input('mychannel');
        $mychannel=Db::name('mychannel')->where('id',$mychannel)->find();
        if(!$mychannel){
            $this->error('模型ID错误');
        }
		$svideo_ad=input('svideo_ad')?input('svideo_ad'):0;
		$this->assign('svideo_ad',$svideo_ad);
        $this->assign('mychannel',$mychannel);
        $flags=Db::name('flags')->select();
        $this->assign('flags',$flags);
        $typeiddb=Db::name('typeid')->order('des desc,id asc')->cache(_cache('db'))->select();
        $this->assign('typeid',get_tree_option($typeiddb,0));
        $id=input("id");
        if(request()->isAjax() || input('post.')){
            $post=input('post.');
            if(!$post['uid'] || $post['uid']==0){
                $post['uid']=1;
            }
			
            if($post['weitoutiao']=='1' && input('mychannel')==2){
                $image=$post['images'];
                if(!$image){
                    return ['err'=>'请上传图片'];
                }
                $image=json_decode($image,true);
                $img=[];
                foreach ($image as $k => $v) {
                    $img[]=$v['img'];
                }
                $post['images']=htmlspecialchars(json_encode($img));
                // dump($post['images']);
                // exit();
            }
                // dump($post['images']);
                // exit();
            if($post['typeid']<=0){
                //return ['err'=>'请选择栏目'];
            }
            if($post['update_time']){
                $time=strtotime($post['update_time']);
            }else{
                $time=time();
            }
            $post['update_time']=$time; //更新时间
            if($mychannel['id']==2){
                // if(!$post['images']){
                //     return ['err'=>'请先上传图片集'];
                // }
            }else if($mychannel['id']==3){
                if(!$post['video']){
                    return ['err'=>'视频地址必须填写'];
                }
            }else if($mychannel['id']==1){
                // if($post['video'] || $post['images']){
                //     return ['err'=>'文章模式不允许上传其他模型字段'];
                // }
            }else if($mychannel['id']==4){

            }else{
                return ['err'=>'模型ID不存在'];
            }
            if(!$id){   // 添加数据
                $post['mychannel']=$mychannel['id'];
                if($post['title']){
                    $titledb=Db::name('article')->where('title',$post['title'])->find();
                    if($titledb){
                        return ['err'=>'文章标题已存在'];
                    }
                }

                $post['fangshi']='1';
                $post['create_time']=$time; // 添加时间
                $db=Db::name('article')->insert($post);
                if($db){
                   // $tongji=Db::name('typeid')->setInc('tongji');
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                // dump($post);
                // exit();
                $db=Db::name('article')->where('id',$id)->update($post);
                if($db){
					//贴吧奖励
					$name=Db::name('article')->where('id',$id)->find();
					if($name['weitoutiao'] == 3 && $name['hide'] == 1){
						$content='发布帖子 id:'.$id.' 奖励金币';
						$count=Db::name('yaoqing_records')->where(['content'=>['like','%'.$content.'%']])->count();
						if(!$count ){
							$name=Db::name('typeid')->where('id',$id)->find();
							$uid = $name['bazhu_id'];
							$member=_user($uid);
							//$ret = _tiezi_jiangli($member,$id);
						}
					}
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
        }else{
            if($id){
                $name=Db::name('article')->where('id',$id)->find();
                if($name){
                     $this->assign('name',$name);
                }else{
                    $data=['err'=>'id参数错误'];
                }
            }
            $data=$this->fetch();
        }
        return $data;
    }
     // 下面跳转链接
    public function add1(){
        $url=url('article/add',['mychannel'=>'1','url'=>'-1']);
        $this->redirect($url);
    }
    public function add2(){
        $url=url('article/add',['mychannel'=>'2','url'=>'-1']);
        $this->redirect($url);
    }
    public function add3(){
        $url=url('article/add',['mychannel'=>'3','url'=>'-1']);
        $this->redirect($url);
    }
	public function add4(){
        $url=url('article/add',['mychannel'=>'4','svideo_ad'=>'1','url'=>'-1']);
        $this->redirect($url);
    }
    //删除文章
    public function del(){
        if(request()->isAjax()){
            $id=input('id');
            if($id){
                $db=Db::name('article')->delete($id);
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
    // 批量更新排序
    public function desAll(){
        if(request()->isAjax()){
            $post=input('post.');
            foreach($_POST['des'] as $k => $v){
                $id = intval($k);
                $name = intval($v);
                Db::name('article')->where('id',$id)->setField('des',$name);
            }
            $data=['ret'=>'更新排序成功'];
        }else{
            $data=['err'=>'提交类型错误'];
        }
        return $data;
    }
    // 批量删除
    public function delAll(){
        if(request()->isAjax()){
            $post=input('post.');
            if(input('?post.delAll')){
                $post=$post['delAll'];
                $db=Db::name('article')->delete($post);
                if($db){
                    $data=['ret'=>'删除成功'];
                }else{
                    $data=['err'=>'删除失败'];
                }
            }else{
                $data=['err'=>'删除失败，未选中数据'];
            }
        }else{
            $data=['err'=>'提交类型错误'];
        }
        return $data;
    }
    // 批量设置hide
    public function all(){
        if(request()->isAjax()){
            $post=input('post.');
            $type=input('type');
            if(input('?post.delAll')){
                $post=$post['delAll'];
                $db=Db::name('article');
                foreach ($post as $k => $v) {
                    if($type=='del'){
                     //   echo "删除成功";
                        $db->delete($v);
                    }else{
                        $db->where('id',$v)->setField('hide',$type);
                    }
                }
                if($db){
                    $data=['ret'=>'删除成功'];
                }else{
                    $data=['err'=>'删除失败'];
                }
            }else{
                $data=['err'=>'删除失败，未选中数据'];
            }
        }else{
            $data=['err'=>'提交类型错误'];
        }
        return $data;
    }
    // 自定义属性
    public function flags(){
        $data=Db::name('flags')->order('id asc')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function flagsAdd(){
        $id=input("id");
        if(request()->isAjax()){
            $post=input('post.');;
            if($post){
                $time=time();
                $post['update_time']=$time; //更新时间
                if(!$id){   // 添加数据
                    $titledb=Db::name('flags')->where('title',$post['title'])->find();
                    if($titledb){
                        return ['err'=>'标题已存在'];
                    }
                    $post['create_time']=$time; // 添加时间
                    $db=Db::name('flags')->insert($post);
                    if($db){
                        $data=['ret'=>'添加成功'];
                    }else{
                        $data=['err'=>'添加失败'];
                    } 
                }else{      //修改数据
                    $db=Db::name('flags')->where('id',$id)->update($post);
                    if($db){
                        $data=['ret'=>'修改成功'];
                    }else{
                        $data=['err'=>'修改失败'];
                    }
                }
            }else{
                $data=["err"=>'post错误'];
            }
        }else{
            if($id){
                $name=Db::name('flags')->where('id',$id)->find();
                //var_dump($name);die();
                if($name){
                     $this->assign('name',$name);
                }else{
                    $data=['err'=>'id参数错误'];
                }
            }
            $data=$this->fetch();
        }
        return $data;
    }
    //删除自定义属性
    public function flagsDel(){
        if(request()->isAjax()){
            $id=input('id');
            if($id){
                $admin=Db::name('article')->where('flags',$id)->find();
                if(!$admin){
                    $db=Db::name('flags')->delete($id);
                    if($db){
                        $data=['ret'=>'删除成功'];
                    }else{
                        $data=['err'=>'删除失败'];
                    }
                }else{
                    $data=['err'=>'属性下有文章，请先删除文章对应属性'];
                }
            }else{
                $data=['err'=>'id参数错误'];
            }
        }else{
            $data=['err'=>'提交参数错误'];
        }
        return $data;
    }
    // 显示 隐藏文章
    // public function hide(){
    //     $id=input('id');
    //     if(request()->isAjax()){
    //         if($id){
    //             $arra=['0'=>'隐藏','1'=>'显示'];
    //             $type='hide';
    //             $db=Db::name('article')->where('id',$id)->value('hide');
    //             if($db==1){
    //                 $hide=0;
    //             }else{
    //                 $hide=1;
    //             }
    //             $db=Db::name('article')->where('id',$id)->setField($type,$hide);
    //             if($db){
    //                 $data=['ret'=>$arra[$hide].'成功','id'=>$hide,'text'=>$arra[$hide]];
    //             }else{
    //                 $data=['err'=>$arra[$hide].'失败'];
    //             }
    //         }else{
    //             $data=['err'=>'ID参数错误'];
    //         }
    //     }else{
    //         $data=['err'=>'AJAX参数错误'];
    //     }
    //     return $data;
    // }
    //拒绝 审核 禁止 通过
    public function hide(){
        if(request()->isAjax()){
            $id=input('id') ? input('id'): '0';
            $type=input('type') ? input('type') : '0';
            $text=['0'=>'<font color="#f00">禁止</font>','1'=>'<font color="#1ab394">通过</font>','2'=>'审核','3'=>'<font color="#f00">拒绝</font>'];
            if($id){
                // 投稿奖励用户
                $aritlce=Db::name('article')->where('id',$id)->find();
                if($aritlce['uid']){
                    if($type==0){
                        _records($aritlce['uid'],'投稿文章ID：'.$aritlce['id'].'管理员设置隐藏状态');
                    }else if($type==3){
                        _records($aritlce['uid'],'投稿文章ID：'.$aritlce['id'].'拒绝通过');
                    }else if($type==3){
                        _records($aritlce['uid'],'投稿文章ID：'.$aritlce['id'].'管理员设置审核状态');
                    }
                }
                if($aritlce['uid'] && $type==1){
                    // 检测是否开启投稿
                    $data=DB::name('member_config')->where("name='articleAdd' or name='articleHide' or name='articleScore' or name='articleNum' or name='articleCode' or name='articleJingyan' or name='articleMoney'")->fetchSql(false)->select();
                    $articleAdd=$data['0']['text'];     //文章投稿
                    $articleHide=$data['1']['text'];    //投稿审核
                    $articleScore=$data['2']['text'];   //投稿奖励积分
                    $articleNum=$data['3']['text'];     //每天投稿限制
                    $articleCode=$data['4']['text'];    //投稿文章开启验证码
                    $articleJingyan=$data['5']['text'];   //投稿奖励积分
                    $articleMoney=$data['6']['text'];   //投稿奖励积分
                    unset($data);   // 销毁变量
                    // 读取会员配置 - 结束
                    // 检测金额奖励
                    if($articleMoney){
                        // 检测是否已奖励，防止重复奖励
                        $aritlcejiance=Db::name('member_records')->where(['type'=>'money','text'=>'投稿奖励ID：'.$aritlce['id'],'data'=>'+'])->value('id');
                        if(!$aritlcejiance){
                            _records($aritlce['uid'],'投稿奖励ID：'.$aritlce['id'],$articleMoney,'money','+');
                            Db::name('member')->where('id',$aritlce['uid'])->setInc('money',$articleMoney);
                        }
                    }
                    // 检测积分奖励
                    if($articleScore){
                        // 检测是否已奖励，防止重复奖励
                        $aritlcejiance=Db::name('member_records')->where(['type'=>'score','text'=>'投稿奖励ID：'.$aritlce['id'],'data'=>'+'])->value('id');
                        if(!$aritlcejiance){
                            _records($aritlce['uid'],'投稿奖励ID：'.$aritlce['id'],$articleScore,'score','+');
                            Db::name('member')->where('id',$aritlce['id'])->setInc('score',$articleScore);
                        }
                    }
                    // 检测经验值奖励
                    if($articleJingyan){
                        $aritlcejiance=Db::name('member_records')->where(['type'=>'jingyan','text'=>'投稿奖励ID：'.$aritlce['id'],'data'=>'+'])->value('id');
                        if(!$articleJingyan){
                            _records($aritlce['uid'],'投稿奖励ID：'.$aritlce['id'],$articleJingyan,'jingyan','+');
                            Db::name('member')->where('id',$this->member['id'])->setInc('jingyan',$articleJingyan);
                        }
                    }
                    _records($aritlce['uid'],'投稿文章ID：'.$aritlce['id'].'审核通过');
                } 
                $db=Db::name('article')->where('id',$aritlce['id'])->setField('hide',$type);
                if($db){
                    $data=[$text[$type]];
                }else{
                    $data=['删除失败'];
                } 
            }else{
                $data=['GET值错误'];
            }
        }else{
            $data=['提交错误'];
        }
        return $data;
    }
    // 审核投稿文章
    public function review(){
        $map['hide']=['in','2,3'];
        $data=Db::name('article')->where($map)->order('des desc,id desc')->paginate('',false,['query'=>request()->param()]);
        $this->assign('data',$data);
        $page = $data->render();
        $this->assign('page',$page);
        return $this->fetch();
    }  
    // 评论管理
    public function ping(){
        $data=Db::name('article_ping')->order('id desc')->paginate('',false,['query'=>request()->param()]);
        $page = $data->render();
        $this->assign('data',$data);
        $this->assign('page', $page);
        return $this->fetch();
    }
    // 修改/查看被评论
    public function pingAdd(){
        $id=input("id/d");
        if(request()->isAjax()){
            if($id){   // 添加数据
                $db=Db::name('article')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
        }else{
            if($id){
                $name=Db::name('article_ping')->where('id',$id)->find();
                $article=Db::name('article')->where('id',$name['aid'])->find();
                $pingList=Db::name('article_ping_xia')->where('ping_id',$id)->order('id desc')->paginate('',false,['query'=>request()->param()]);
                $page = $pingList->render();
                $this->assign('page', $page);
                if($name){
                    $this->assign('article',$article);
                    $this->assign('name',$name);
                    $this->assign('pingList',$pingList);
                }else{
                    $data=['err'=>'id参数错误'];
                }
            }
            $data=$this->fetch();
        }
        return $data;
    }
    // 评论删除
    public function pingDel(){
        if(request()->isAjax()){
            $id=input('id');
            if($id){
                $db=Db::name('article_ping')->delete($id);
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
    // 评论删除 下
    public function pingXaiDel(){
        if(request()->isAjax()){
            $id=input('id');
            if($id){
                $db=Db::name('article_ping_xia')->delete($id);
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
    // 举报管理
    public function jubao(){
        $data=Db::name('jubao')->order('id desc')->paginate('',false,['query'=>request()->param()]);
        $page = $data->render();
        $this->assign('data',$data);
        $this->assign('page', $page);
        return $this->fetch();
    }
    // 举报回复
    public function jubaoHuifu(){
        if(request()->isAjax()){
            $id=input('id');
            $content=input('content');
            if($id){
                $db=Db::name('jubao')->where('id',$id)->find();
                if($db){
                    $adminId=Session::get('admin','ffxiangAdmin');
                    $where['uid']=$db['uid'];
                    $where['aid']=$db['aid'];
                    $where['content']=$content;
                    $where['time']=time();
                    $where['admin_id']=$adminId['id'];
                    $db=Db::name('jubao')->insert($where);
                    if($db){
                       $data=['ret'=>'回复成功']; 
                    }else{
                        $data=['err'=>'回复失败'];
                    }
                }
            }else{
                $data=['err'=>'id参数错误'];
            }
        }else{
            $data=['err'=>'提交参数错误'];
        }
        return $data;
    }
    // 单页广利
    public function page(){
        $data=Db::name('page')->order('id asc,des desc')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    // 添加单页
    public function pageAdd(){
        $id=input("id");
        if(request()->isAjax()){
            $post=input('post.');
            if(!$id){   // 添加数据
                if($post['title']){
                    $titledb=Db::name('page')->where('title',$post['title'])->find();
                    if($titledb){
                        return ['err'=>'文章标题已存在'];
                    }
                }
                $db=Db::name('page')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('page')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
        }else{
            if($id){
                $name=Db::name('page')->where('id',$id)->find();
                if($name){
                     $this->assign('name',$name);
                }else{
                    $data=['err'=>'id参数错误'];
                }
            }
            $data=$this->fetch();
        }
        return $data;
    }
}
