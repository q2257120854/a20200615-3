<?php
namespace app\index\controller;
use app\index\controller\Common;
use think\Db;
use think\Request; //获取请求类型
class M extends Common
{
    public function index(){
        return $this->fetch();
    }
    
    public function view(){
		//echo rand(0,100);
    	if(!input('?id')){
            $this->redirect(_webfig('url'));
        }
        $id=input('id/d');
        if(!$id){
            $this->redirect(_webfig('url'));
        }
		$shareuid=input('shareuid/d');
		$shareuid=$shareuid?$shareuid:0;
		$this->assign('shareuid',$shareuid);
        $name=Db::name('article')->where(['id'=>$id])->find();

        if(!$name){
            $this->error("内容不存在");
        }
        if($name['hide']==0){
            $this->error("内容不存在");
        }
        if($name['hide']==2){
            $this->error("文章正在审核，无法查看");
        }
        if($name['hide']==3){
            $this->error("文章未通过，无法查看");
        }
        // 增加点击次数 开始
        Db::name('article')->where(['id'=>$id,'hide'=>1])->setInc('click');
        
		$yaoqing=config()['yaoqing'];
		$this->assign('yaoqing',$yaoqing);
		$this->assign('readtime',$yaoqing['share_view_time']);
        // 增加点击次数 结束 
        if($name['content']){
            preg_match_all("/img(.*?)src=\"(.*?)\"/", stripslashes($name['content']),$content);
            foreach ($content[2] as $k => $v) {
                if(strstr($v,'http')){
                  //  $db['content']=str_replace($v,$v,$db['content']);
        
                }else if(strpos($v,'/public/uploads/us/') !== false){
                    // $db['content']=str_replace($v,'../image/loadingImage.png" Tapmode onclick="img('.$k.');" ffxiang-src="'.$config['url'].$v.'" id="ffxiangImgCache',$db['content']);
                 
                }else{
                    $name['content']=str_replace($v,_imgUrl().$v,stripslashes($name['content']));
                  
                }   
            }
        }
        if($name['mychannel']==2){
			$this->assign('readtime',$yaoqing['share_view_time']);
            $content='';
            if($name['weitoutiao']==0){
                foreach (json_decode($name['images'],true) as $k => $v) {
                    $content.='<p class="a-image"><img src="'._imgUrl().$v['img'].'"></p>';
                    $content.='<p class="a-image">'.$v['img_text'].'</p>';
                }
            }else{
                $name['images']=htmlspecialchars_decode($name['images']);
                $name['images']=json_decode($name['images']);
               // dump($name['images']);exit();
                foreach ($name['images'] as $k => $v) {
                    $content.='<p class="a-image"><img src="'._imgUrl().$v.'"></p>';
                }
            }
            $name['content']="<p>".$name['description']."</p>".$content;
        }
		if($name['mychannel']==3){
			$this->assign('readtime',$yaoqing['share_watch_time']);
		}
		if($name['mychannel']==4){
			$this->assign('readtime',$yaoqing['share_smallwatch_time']);
		}
        // 读取会员信息
        $user=Db::name('member')->where('id',$name['uid'])->find();
        $this->assign('user',$user);
        // 评论列表
        $ping=Db::name('article_ping')->where('aid',$id)->order('time desc')->limit(20)->select();
        foreach ($ping as $k => $v) {
            $user=_user($v['uid']);
            $ping[$k]['img']=_imgUrl().$user['img']."?imageView2/1/w/100/h/100";
            $ping[$k]['username']=$user['username'];
        }
        $content=preg_split('/<div class="y-box article-actions">/', $name['content'],-1);
        
       // file_put_contents('./2.txt', $content[0]);
        $name['content']=$content[0];
         $content=preg_split('/<ul class="label-list list-paddingleft-2">/', $name['content'],-1);
         $name['content']=$content[0];
         $content=preg_split('/<p><strong>延伸阅读/', $name['content'],-1);
         $name['content']=$content[0];
		 
		//推荐
		$twhere['hide'] = 1;
		$twhere['id'] = ['<>',$id];
		if($name['typeid']){
			$twhere['typeid'] = $name['typeid'];
		}
		if($name['weitoutiao']){
			$twhere['weitoutiao'] = $name['weitoutiao'];
		}
		$tujian = Db::name('article')->where($twhere)->order('rand()')->limit(5)->select();
		$this->assign('imgUrl',_imgUrl());
        $this->assign('tujian',$tujian); 
        $this->assign('ping',$ping);
        $this->assign('name',$name);
        return $this->fetch();
    }
    // 用户主页
    public function user(){
        if(!input('?id')){
            $this->redirect(_webfig('url'));
        }
        $id=input('id/d');
        if(!$id){
            $this->redirect(_webfig('url'));
        }
        if(_session()){
            $member=_member();
        }
        $user=_user($id);
        if($user['hide']==0){
            $this->error('该账户已被禁止');
        }else if($user['hide']==3){
            $this->error('该账户正在审核');
        }else if($user['hide']==2){
            $this->error('该账户正在审核');
        }
        $user['guanzhu']=Db::name('member_guanzhu')->where(['uid'=>$user['id']])->count();
        $user['fensi']=Db::name('member_guanzhu')->where(['gz_uid'=>$user['id']])->count();
        $this->assign('user',$user); 
        return $this->fetch();
    }
    // 邀请注册页
    public function yaoqing(){
      
        $uid=input('uid/d');
        $this->assign('uid',$uid); 
        if(cookie('?code')){
            $code=cookie('code')-time();
            $this->assign('code',$code); 
        }
        return $this->fetch();
    }
    // 面对面二维码
    public function erweima(){
        $uid=input('uid/d');
        $url=url('index/m/yaoqing',['uid'=>$uid],'',true);
        $url='http://qr.liantu.com/api.php?text='.$url;
        $this->assign('url',$url); 
        return $this->fetch();
    }
    // 领取成功页面
    public function hongbaoapp(){
        return $this->fetch();
    }
    
     
}
