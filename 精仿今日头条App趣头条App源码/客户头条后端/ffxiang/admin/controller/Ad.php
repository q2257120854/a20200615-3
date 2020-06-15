<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Ad extends Common
{
 
    public function index(){
        $data=Db::name('ad')->order('id desc')->select();
    	$this->assign('data',$data);
        return $this->fetch();
    }
    // 添加分组
    public function add(){
        $id=input("id");
        if(request()->isAjax()){
            $post=input('post.');
            $time=time();
            if(!$id){   // 添加数据
                $titledb=Db::name('ad')->where('title',$post['title'])->find();
                if($titledb){
                    return ['err'=>'分组标题已存在'];
                }
                $db=Db::name('ad')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('ad')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
            
        }else{
            if($id){
                $name=Db::name('ad')->where('id',$id)->find();
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

    public function ceshi()
    {
$shijian=date('Y-m-d H:i:s');
                $wandian=date('Y-m-d H:i:s',strtotime("+5 hour"));
               $timecuo=strtotime($shijian);
               $timecuos=strtotime($wandian);
               $zhenshis=rand($timecuos,$timecuo);
             echo $zhenshis;
    }
    public function del(){
        if(request()->isAjax()){
            $id=input('id');
            if($id){
                $db=Db::name('ad')->delete($id);
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
    //删除分组
    public function appDel(){
        if(request()->isAjax()){
            $id=input('id');
            if($id){
                $db=Db::name('adapp')->delete($id);
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

    public function app(){
        $data=Db::name('adapp')->order('id desc')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    // 添加分组
    public function appAdd(){
        $id=input("id");
        if(request()->isAjax()){
            $post=input('post.');
            if(!$id){   // 添加数据
                $db=Db::name('adapp')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('adapp')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
            
        }else{
            if($id){
                $name=Db::name('adapp')->where('id',$id)->find();
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
    function appconfig(){
        $config=config();
        $this->assign('cfg',$config['ad']);
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
                    file_put_contents(APP_PATH.'extra/ad.php', print_r($data, true));
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

   
    // 2018年2月6日 16:17:04 增加APP启动图广告
    public function appad(){
        $data=Db::name('appad')->order('id desc')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function appadd_q(){
        $id=input("id");
        if(request()->isAjax()){
            $post=input('post.');
            $time=time();
            if(!$id){   // 添加数据
                $titledb=Db::name('appad')->where('title',$post['title'])->find();
                if($titledb){
                    return ['err'=>'分组标题已存在'];
                }
                $db=Db::name('appad')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('appad')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
        }else{
            if($id){
                $name=Db::name('appad')->where('id',$id)->find();
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
