<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Member extends Common
{
    //会员配置
    public function config(){
        $name=Db::name('member_config')->where('type','member')->select();
        $config=[];
        foreach ($name as $k => $v) {
            $config[$v['name']]['name']=$v['name'];
            $config[$v['name']]['title']=$v['title'];
            $config[$v['name']]['content']=$v['content'];
            $config[$v['name']]['text']=$v['text'];
        }
        $this->assign('cfg',$config);
        // 获取会员分组
        $member_groups=Db::name('member_groups')->order('jingyan asc,id asc')->cache(_cache('db'))->select();
        $member_groups2=Db::name('member_groups')->order('jingyan desc,id desc')->cache(_cache('db'))->select();
        $this->assign('member_groups',$member_groups);
        $this->assign('member_groups2',$member_groups2);
        if(request()->isAjax()){
            $post=input('post.');
            if(!$post['regmobile'] && !$post['regemail'] && !$post['reguser']){
                return ['err'=>'用户名、手机、邮箱，至少要开放一个'];
            }
            if($post){
                foreach ($name as $k => $v) {
                    Db::name('member_config')->where('name',$v['name'])->setField('text',$post[$v['name']]);
                }
                $data=['ret'=>'保存成功'];
            }else{
                $data=['err'=>'提交参数错误'];
            }
        }else{
            $data=$this->fetch();
        }

        return $data;
    }
    //会员管理
    public function index(){
        $map=[];
        $search_name=input('param.name');
        $search_type=input('param.type');
        if($search_name && $search_type){
            $map[$search_type]  = ['like','%'.$search_name.'%'];
        }else{
            $map='';
        }
        $map['hide']=['not in',0,1];
        $data=Db::name('member')->order('id desc,update_time desc')->where($map)->paginate('',false,['query'=>request()->param()]);
        $this->assign('data',$data);
        $page = $data->render();
        $this->assign('page', $page);
        return $this->fetch();
    }
    // 添加会员
    public function add(){
        $id=input('id');
        if(request()->isAjax()){
        
            $post=input('post.');
            if(!$post['user'] && !$post['email'] && !$post['mobile']){
                return ['err'=>'账户、手机、邮箱最少填写1个'];
            }
            $validate=validate('Member');
            if($validate->check($post)){
                if(!$id){   // 添加数据
                    $post['password']=md5($post['password']);
                    $post['update_time']=time(); //更新时间
                    if($post['user']){
                        $userdb=Db::name('member')->where('user',$post['user'])->find();
                        if($userdb){
                            return ['err'=>'账户已存在'];
                        }
                    }
                    if(!$post['password']){
                        return ['err'=>'请填写密码'];
                    }
                    $post['create_time']=time(); // 添加时间

                    $db=Db::name('member')->insert($post);
                    if($db){
                       // $tongji=Db::name('typeid')->setInc('tongji');
                        $data=['ret'=>'添加成功'];
                    }else{
                        $data=['err'=>'添加失败'];
                    } 
                }else{      //修改数据
                    $member=Db::name('member')->where('id',$id)->value('password');
                    if(!$post['password']){
                        $post['password']=$member;
                    }else{
                        $post['password']=md5($post['password']);
                    }
                    $db=Db::name('member')->where('id',$id)->update($post);
                    if($db){
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
                $name=Db::name('member')->where('id',$id)->find();
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
    // 会员分组
    public function groups(){
        $data=Db::name('member_groups')->order('id asc')->select();
        $this->assign('data',$data);
        return $this->fetch('groups');
    }
    //删除会员
    public function del(){
        if(request()->isAjax()){
             
            $id=input('id');
            if($id){
                $db=Db::name('member')->delete($id);
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
    // 添加会员分组
    public function groupsAdd(){
        $id=input('id');
        if(request()->isAjax()){
         
            $post=input('post.');;
            if(!$id){   // 添加数据
                $titledb=Db::name('member_groups')->where('title',$post['title'])->find();
                if($titledb){
                    return ['err'=>'分组名已存在'];
                }
                if($post['jingyan']=='' || $post['jingyan']==0){
                    return ['err'=>'经验值必须填写'];
                }
                $db=Db::name('member_groups')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('member_groups')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
        }else{
            if($id){
                $name=Db::name('member_groups')->where('id',$id)->find();
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
    //删除会员分组
    public function groupsDel(){
        if(request()->isAjax()){
           
            $id=input('id');
            if($id){
                $db=Db::name('member_groups')->delete($id);
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
    // 审核会员
    public function audit(){
        $data=Db::name('member')->order('id desc,update_time desc')->where(['hide'=>2])->whereOr('hide',3)->paginate('',false,['query'=>request()->param()]);
        $this->assign('data',$data);
        $page = $data->render();
        $this->assign('page', $page);
        return $this->fetch();
    }
    // 快速设置 拒绝 审核 禁止 通过
    public function hide(){
        if(request()->isAjax()){
       
            $id=input('id') ? input('id'): '0';
            $type=input('type') ? input('type') : '0';
            $text=['0'=>'<font color="#f00">禁止</font>','1'=>'<font color="#1ab394">通过</font>','2'=>'审核','3'=>'<font color="#f00">拒绝</font>'];
            if($id){
                $db=Db::name('member')->where('id',$id)->setField('hide',$type);
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
    // 用户中心导航分类
    public function category(){
        $data=Db::name('member_category')->order('des desc,id asc')->select();
        $data=get_tree_option($data,0);
        $this->assign('data',$data);
        return $this->fetch();
    }
    // 用户中心导航分类 - 添加和修改
    public function categoryAdd(){
        $id=input('id');
        $category=Db::name('member_category')->where('tid','0')->select();
        $this->assign('category',$category);
        if(request()->isAjax()){
         
            $post=input('post.');;
            if(!$id){   // 添加数据
                $titledb=Db::name('member_category')->where('title',$post['title'])->find();
                if($titledb){
                    return ['err'=>'标题已存在'];
                }
                $db=Db::name('member_category')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('member_category')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
        }else{
            $typeid=input('typeid');
            $this->assign('typeid',$typeid);
            if($id){
                $name=Db::name('member_category')->where('id',$id)->find();
                if($name){
                     $this->assign('name',$name);
                }else{
                    $this->error('id参数错误');
                }
            }
            $data=$this->fetch();
        }
        return $data;
    }
    //删除会员分组
    public function categoryDel(){
        if(request()->isAjax()){
          
            $id=input('id');
            if($id){
                $db=Db::name('member_category')->delete($id);
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
    // 用户记录
    public function records(){
        $money=input('money') ? input('money') : '';
        $type=input('type') ? input('type') : '';
        $data=input('data') ? input('data') : '';
        $where=[];
        if($type){
            if($type=='-1'){
                $where['money']=0;
            }else{
                $where['type']=$type;
            } 
        }
        $db=Db::name('member_records')->order('id desc,time desc')->where($where)->paginate('',false,['query'=>request()->param()]);
        $data=$db->toarray()['data'];
        $type=['money'=>'元','score'=>'积分','jingyan'=>'经验值'];
        foreach ($data as $k => $v) {
            if($v['money']){
                $data[$k]['text']=$v['text'].' <b id="data1">'.$v['data'].'</b><b id="data2">'.$v['money'].'</b> '.$type[$v['type']];
            }
        }
        $this->assign('data',$data);
        $page = $db->render();
        $this->assign('page', $page);
        $this->assign('type', input('type'));
        return $this->fetch();
    }
    //删除记录  禁用
    public function recordsDel(){
        return false;
        if(request()->isAjax()){
      
            $id=input('id');
            if($id){
                $db=Db::name('member_records')->delete($id);
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
}
