<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Renwu extends Common
{
    public function config(){
        $config=config();
        $this->assign('cfg',$config['renwu']);
        if(request()->isAjax()){
            $post=input('post.');
            if($post){
              $data=$post;
              if($data){
                $data=var_export($data, true);
                $data=str_replace("array", "return", $data);
                $data=str_replace("(", "[", $data);
                $data=str_replace(")", "];", $data);
                $data="<?php\r\n".$data;
                file_put_contents(APP_PATH.'extra/renwu.php', print_r($data, true));
                $data=['ret'=>'保存成功'];
              }else{
                $data=['err'=>'保存失败'];
              }
            }else{
              $data=['err'=>'提交参数错误'];
            }
        }else{
            $data=$this->fetch();
        }
        return $data;
    }
    // 任务
    public function lists(){
        $data=Db::name('renwu')->alias('a')->field('a.id,a.name,a.money,a.text,a.url,b.title,a.time,a.des,a.hide,a.typeid')->join('__RENWU_TYPES__ b','a.typeid=b.id')->order('des desc,id asc')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    // 添加任务
    public function add(){
        $id=input("id");
        $typedata=Db::name('renwu_types')->where(['hide'=>1])->select();
        $this->assign('typedata',$typedata);
        if(request()->isAjax()){
            $post=input('post.');
            $time=time();
            $post['time']=$time;
            if(!$post['typeid']){
                return ['err'=>'请选择分组'];
            }
            if(!$id){   // 添加数据
                $titledb=Db::name('renwu')->where('name',$post['name'])->find();
                if($titledb){
                    return ['err'=>'标题已存在'];
                }
                $db=Db::name('renwu')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('renwu')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
            
        }else{
            $typeid=input("typeid/d");
            $this->assign('typeid',$typeid);
            if($id){
                $name=Db::name('renwu')->where('id',$id)->find();
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
    //删除
    public function del(){
        if(request()->isAjax()){
            $id=input('id');
            if($id){
                if($id <= 6){
                    return ['err'=>'不可删除'];;
                }
                $db=Db::name('renwu')->delete($id);
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
    // 分组
    public function typeid(){
        $data=Db::name('renwu_types')->order('des desc,id asc')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    // 添加分组
    public function typeidadd(){
        $id=input("id");
        if(request()->isAjax()){
            $post=input('post.');
            $time=time();
            if(!$id){   // 添加数据
                $titledb=Db::name('renwu_types')->where('title',$post['title'])->find();
                if($titledb){
                    return ['err'=>'分组名称已存在'];
                }
                $db=Db::name('renwu_types')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('renwu_types')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
            
        }else{
            if($id){
                $name=Db::name('renwu_types')->where('id',$id)->find();
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
    //删除分组
    public function typeiddel(){
        if(request()->isAjax()){
            $id=input('id');
            if($id){
                if($id <= 2){
                    return ['err'=>'新手任务和日常任务不可删除'];;
                }
                $db=Db::name('renwu_types')->delete($id);
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
    // 调查
    public function diaochalist(){
        $data=Db::name('diaocha')->order('des desc,id asc')->select();
        foreach ($data as $k => $v) {
            $data[$k]['num']=count(json_decode($v['data']));
        }
        $this->assign('data',$data);
        return $this->fetch();
    }


        // 调查
    public function ydiaochalis(){
        $data=Db::name('diaocha_user')->select();
        // var_dump($data);
        foreach ($data as $k => $v) {
                 $d=$v['data'];
                 // $d=new $d;
                $shuzu=json_decode($d);
              
                 // var_dump($shuzu);
                $title="回答";
                 foreach ($shuzu as $ks => $vs) {
                     if(is_object($vs)) {  
                         $vs = (array)$vs; 
                     }
                      $title.="{".$vs['title'].":".$vs['name']."}---";

                       // var_dump($vs);
                    // $a=$vs;
                    // $a=new $a;
                     // $t=json_decode($a);
                   // var_dump($t);
                 }
             // echo $title;
            $data[$k]['title']=$title;
        }

        // var_dump($data);
        $this->assign('data',$data);
        return $this->fetch();
    }



    // 添加调查内容
    public function diaochaadd(){
        $id=input("id");
        if(request()->isAjax()){
            $post=input('post.');
            $post['data']=array_filter($post['data']);
            $post['data']=json_encode($post['data']);
            $time=time();
            if(!$id){   // 添加数据
                $titledb=Db::name('diaocha')->where('title',$post['title'])->find();
                if($titledb){
                    return ['err'=>'标题已存在'];
                }
                $db=Db::name('diaocha')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('diaocha')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
            
        }else{
            if($id){
                $name=Db::name('diaocha')->where('id',$id)->find();
                $name['data']=json_decode($name['data']);
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
    // 删除调查内容
    public function diaochadel(){
        if(request()->isAjax()){
            $id=input('id');
            if($id){
                $db=Db::name('diaocha')->delete($id);
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
    // 调查用户
    public function diaochauser(){
        $data=Db::name('diaocha_user')->order('id desc')->paginate('',false,['query'=>request()->param()]);
        $this->assign('data',$data);
        return $this->fetch();
    }
    // 详细
    public function diaochainfo(){
        $id=input("id/d");
        $data=Db::name("diaocha_user")->find($id);
        $data['data']=json_decode($data['data'],true);
 
        $this->assign('data',$data);
 
        return $this->fetch();
    }
    // 删除调查内容
    public function diaochauserdel(){
        if(request()->isAjax()){
            $id=input('id');
            if($id){
                $db=Db::name('diaocha_user')->delete($id);
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
    // 新手答题
    public function datilist(){
        $data=Db::name('dati')->order('des desc,id asc')->select();
        foreach ($data as $k => $v) {
            $data[$k]['num']=count(json_decode($v['data']));
        }
        $this->assign('data',$data);
        return $this->fetch();
    }
    // 添加调查内容
    public function datiadd(){
        $id=input("id");
        if(request()->isAjax()){
            $post=input('post.');
            $post['data']=array_filter($post['data']);
            $post['data']=json_encode($post['data']);
            $time=time();
            if(!$id){   // 添加数据
                $titledb=Db::name('dati')->where('title',$post['title'])->find();
                if($titledb){
                    return ['err'=>'标题已存在'];
                }
                $db=Db::name('dati')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('dati')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
            
        }else{
            if($id){
                $name=Db::name('dati')->where('id',$id)->find();
                $name['data']=json_decode($name['data']);
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
    // 删除调查内容
    public function datidel(){
        if(request()->isAjax()){
            $id=input('id');
            if($id){
                $db=Db::name('dati')->delete($id);
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
