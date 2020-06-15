<?php 
namespace app\admin\controller;
use app\admin\controller\Common;
class Admin extends Common
{
    public function index(){	
        $data=db('admin')->alias('a')->join('admin_type b','a.type=b.id')->field('a.id,a.name,b.title,a.create_time,a.create_ip,a.update_time,a.update_ip,a.hide')->paginate();
       // var_dump($data);die();
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function add(){
		$id=input("id");
        $admin_type=db('admin_type')->field('id,title')->select();
        $this->assign('admintype',$admin_type);
        if(request()->isAjax()){
            $post=input('post.');;
            $validate=validate('Admin');
            $array=['type'=>$post['type'],'hide'=>$post['hide']];
            if(!$post['name']){
                return ['err'=>'请输入账户'];
            }
            if($validate->check($post)){
                if($post['password']!=$post['password2']){
                    return ['err'=>'密码和确认密码不一致'];
                }
                $time=time();
                $ip=_ip();
                if($id){
                    if(!$post['password']){
                        $password=db('admin')->where('id',$id)->value('password');
                    }else{
                        $password=md5($post['password']);
                    }
                }else{
                    $password=md5($post['password']);
                }
                $dbdata=['name'=>$post['name'],'password'=>$password,'update_time'=>$time,'update_ip'=>$ip];
                $dbdata = array_merge($array, $dbdata);
                if(!$id){   // 添加数据
                    $namebd=db('admin')->where('name',$post['name'])->find();
                    if($namebd){
                        return ['err'=>'账户已存在'];
                    }
                    if(!$post['password']){
                        return ['err'=>'密码不可为空'];
                    }
                    $dbdatas=['create_time'=>$time,'create_ip'=>$ip];
                    $dbdata = array_merge($dbdatas, $dbdata);
                    $db=db('admin')->insert($dbdata);
                    if($db){
                        $data=['ret'=>'添加成功'];
                    }else{
                        $data=['err'=>'添加失败'];
                    } 
                }else{      //修改数据
                    if($id==1){
                        $dbdata=['name'=>$post['name'],'password'=>$password];
                    }
                    $db=db('admin')->where('id',$id)->update($dbdata);
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
                $name=db('admin')->where('id',$id)->find();
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
    //删除管理员账户
    public function del(){
        if(request()->isAjax()){
         
            $id=input('id');
            if($id==1){
                $data=['err'=>'账户禁止删除'];
            }else{
                if(input('?id')){
                    $db=db('admin')->delete($id);
                    if($db){
                        $data=['ret'=>'删除成功'];
                    }else{
                        $data=['err'=>'删除失败'.$db];
                    }
                }else{
                    $data=['err'=>'id参数错误'];
                }
            }
             
        }else{
            $data=['err'=>'提交参数错误'];
        }
        return $data;
    }

    //权限与类型
    public function type(){
    	$data=db('admin_type')->select();
    	$this->assign('data',$data);
    	return $this->fetch();
    }
    // 添加权限类型
    public function typeAdd(){
        $id=input("id");
        $t=db('category')->where('tid',0)->order('des desc,id asc')->select();
        $html='';
        foreach ($t as $k=>$v) {
            $html.='<h5>'.$v['title'].'</h5>';
            $t2=db('category')->where('tid',$v['id'])->order('des desc,id asc')->select();
            if($t2){
                foreach ($t2 as $v2) {
                    $html.='<div class="form-group">';
                    $html.='<label class="col-sm-2 control-label">'.$v2['title'].'：</label>';
                    $html.='<div class="col-sm-10">';
                    $html.='<div class="radio i-checks">';
                    if($v2['controller'] && $v2['function']){   
                        $checked='';
                        if($id){
                            $checkeddb=db('admin_type')->where('id',$id)->value('data');
                            if($checkeddb){
                                foreach(json_decode($checkeddb) as $cv){
                                    if($cv==$v2['id']){
                                        $checked='checked';
                                        break;
                                    }
                                }
                            }else{
                                return ['err'=>'id参数对应权限数据不存在'];
                            }
                        }    
                        $html.='<label class="col-md-3"><input type="checkbox" '.$checked.' value="'.$v2['id'].'" name="data[]">'.$v2['title'].'</label>';
                        $t3=db('category')->where('tid',$v2['id'])->order('des desc,id asc')->select();
                        if($t3){
                            foreach($t3 as $v3){
                                $checked='';
                                if($id){
                                    $checkeddb=db('admin_type')->where('id',$id)->value('data');
                                    if($checkeddb){
                                        foreach(json_decode($checkeddb) as $cv){
                                            if($cv==$v3['id']){
                                                $checked='checked';
                                                break;
                                            }
                                        }
                                    }else{
                                        return ['err'=>'id参数对应权限数据不存在'];
                                    }
                                }
                                $html.='<label class="col-md-3"><input type="checkbox" '.$checked.' value="'.$v3['id'].'" name="data[]">'.$v3['title'].'</label>';
                            }
                        }
                    }else{
                        $t3=db('category')->where('tid',$v2['id'])->order('des desc,id asc')->select();
                        if($t3){
                            foreach($t3 as $v3){
                                $checked='';
                                if($id){
                                    $checkeddb=db('admin_type')->where('id',$id)->value('data');
                                    if($checkeddb){
                                        foreach(json_decode($checkeddb) as $cv){
                                            if($cv==$v3['id']){
                                                $checked='checked';
                                                break;
                                            }
                                        }
                                    }else{
                                        return ['err'=>'id参数对应权限数据不存在'];
                                    }
                                }
                                $html.='<label class="col-md-3"><input type="checkbox" '.$checked.' value="'.$v3['id'].'" name="data[]">'.$v3['title'].'</label>';
                            }
                        }
                    }
                     
                    $html.='</div></div></div>';
                }
            }
        }
        $this->assign('category',$html);
    	if(request()->isAjax()){
       
            $post=input('post.');;
            $title=$post['title'];
            if(!input('?post.data')){
                $dataname=false;
            }else{
                $dataname=$post['data'];
            }
            if($title){
                if($dataname){
                    $array=['title'=>$title,'data'=>json_encode($dataname)];
                    if(!$id){   // 添加数据
                        $titledb=db('admin_type')->where('title',$title)->find();
                        if($titledb){
                            $data=['err'=>'名称已存在'];
                        }else{
                            $db=db('admin_type')->insert($array);
                            if($db){
                                $data=['ret'=>'添加成功'];
                            }else{
                                $data=['err'=>'添加失败'];
                            }
                        } 
                    }else{      //修改数据
                        if($id==1){
                            $array=['title'=>$title];
                            $db=db('admin_type')->where('id',$id)->update($array); 
                        }else{
                            $db=db('admin_type')->where('id',$id)->update($array);
                        }
                        if($db){
                            $data=['ret'=>'修改成功'];
                        }else{
                            $data=['err'=>'修改失败'];
                        }
                    }
                }else{
                    $data=['err'=>'最少选一个权限'];
                }  
            }else{
                $data=['err'=>'类型名称不可为空'];
            }
    	}else{
            if($id){
                $name=db('admin_type')->where('id',$id)->find();
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
    //删除权限与类型
    public function typeDel(){
        if(request()->isAjax()){
        
            $id=input('id');
            if($id==1){
                $data=['err'=>'超级管理员禁止删除'];
            }else{
                if(input('?id')){
                    $admin=db('admin')->where('type',$id)->find();
                    if(!$admin){
                        $db=db('admin_type')->delete($id);
                        if($db){
                            $data=['ret'=>'删除成功'];
                        }else{
                            $data=['err'=>'删除失败'];
                        }
                    }else{
                        $data=['err'=>'请先删除管理员列表对应类型账户'];
                    }
                     
                }else{
                    $data=['err'=>'id参数错误'];
                }
            }
        }else{
            $data=['err'=>'提交参数错误'];
        }
        return $data;
    }
     
    
}
