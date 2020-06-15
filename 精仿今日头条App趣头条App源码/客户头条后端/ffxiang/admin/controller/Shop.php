<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Shop extends Common
{
 
    public function lists(){
        $type=input('type');
        $name=input('name');
        $where=[];
        if($type){
            if($type=='id'){
                $where[$type]=$name;
            }else{
                $where[$type]=['like','%'.$name.'%'];
            }
        }
        $typeid=input('typeid');
        if($typeid){
            $where['typeid']=$typeid;
        }
        $data=Db::name('shoplists')->where($where)->order('des desc,id desc')->paginate('',false,['query'=>request()->param()]);
        $page = $data->render();
        $this->assign('data',$data);
        $this->assign('page', $page);
        return $this->fetch('list');
    }

     public function tixian(){
        $type=input('type');
        $name=input('name');
        $where=[];
        if ($type=='nickname') {
           $where['m.nickname']=['like','%'.$name.'%'];
        }
       if ($type=='name') {
           $where['t.name']=['like','%'.$name.'%'];
        }
        $typeid=input('typeid');
        if($typeid){
            $where['u.state']=$typeid;
        }
        $data=Db::name('tixian')
            ->alias('t')
            ->field('t.*,m.mobile,m.nickname')
            ->join('member m','t.uid = m.id')
            ->where($where)->order('t.id desc')
            ->paginate('',false,['query'=>request()->param()]);
        $page = $data->render();
        $this->assign('data',$data);
        $this->assign('page', $page);
        return $this->fetch('tixian');
    }


    // 添加商品
    public function add(){

        $mychannel['id']=2;
        $this->assign('mychannel',$mychannel);
        $typeiddb=Db::name('shoplist_types')->order('des desc,id asc')->select();
        $this->assign('typeid',$typeiddb);
        $id=input("id/d");
        if(request()->isAjax()){
            $post=input('post.');
            $time=time();
            if(!$post['typeid']){
                return ['err'=>'请选择分类栏目'];
            }
            $post['time']=$time; //更新时间
             
            $post['text']=html_entity_decode($post['text']);
            $post['money']=$post['money']*100;
            // 处理图片集
            if($post['images']){
                $images=[];
                foreach(json_decode($post['images'],true) as $v){
                    $images[]=$v['img'];
                }
                $post['images']=json_encode($images);
               // $post['images']=html_entity_decode($post['images']);
            }
            if(!$id){   // 添加数据
                $titledb=Db::name('shoplists')->where('title',$post['title'])->find();
                if($titledb){
                    return ['err'=>'标题已存在'];
                }
                $db=Db::name('shoplists')->insertGetId($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('shoplists')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
        }else{
            if($id){
                $name=Db::name('shoplists')->where('id',$id)->find();
                $name['weitoutiao']=1;
                $this->assign('name', $name);
            }
            $data=$this->fetch();
        }
        return $data;
    }
    

    // 体现操作
    public function txcao(){
         $post=input('post.');
        $post['state']=1;
      $id=input("id");
           

                 $db=Db::name('tixian')->where('id',$id)->update($post);

                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            
            
       // $data=$this->fetch();
      
       return $data;
    }

    //删除商品 
    public function del(){
        if(request()->isAjax()){
            $id=input('id');
            if($id){
                $db=Db::name('shoplists')->delete($id);
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
    // 分类列表
    public function typeid(){
        $data=Db::name('shoplist_types')->order('des desc,id asc')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    // 添加分类
    public function typeidadd(){
        $id=input("id/d");
        if(request()->isAjax()){
            $post=input('post.');
            if(!$id){   // 添加数据
                $typename=Db::name('typeid')->where(['title'=>$post['title']])->find();
                if($typename){
                    return ['err'=>'栏目标题已存在'];
                }
                $db=Db::name('shoplist_types')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('shoplist_types')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
        }else{
            if($id){
                $name=Db::name('shoplist_types')->where(['id'=>$id])->find();
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

    //提现管理 
    public function tixianadd(){
        $id=input("id/d");
         $state=input("state");
        if(request()->isAjax()){
            $post=input('post.');
            if(!$id){   // 添加数据
               
                $db=Db::name('tixian')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据

                $user=Db::name('tixian')->where('id',$id)->find();
                 $tijin=$user['price']*100;
                 $uid=$user['uid'];
                $db=Db::name('tixian')->where('id',$id)->update($post);
                if($state==2){
                    if (input('yuanyin')!=null) {
                        $str='拒绝提现,原因为'.input('yuanyin');
                    }else{
                        $str='拒绝提现';
                    }
                    $result = Db::execute('update fx_yaoqing set money =money+'.$tijin.' where uid = '.$uid.' ');
                    $data=[
                                'uid'=>$uid,
                                'content'=>$str,
                                'money'=>$tijin,
                                'type'=>'0',
                                'data'=>'0',
                                'time'=>time()
                              ];
                    $cmoney=db('yaoqing_records')->insert($data);
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改成功'];
                }
            }
        }else{
            if($id){
                $name=Db::name('tixian')->where(['id'=>$id])->find();
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

    // 删除分类
    //删除栏目
    public function typeiddel(){
        if(request()->isAjax()){
            $id=input('id');
            if($id){
                    $db=Db::name('shoplist_types')->delete($id);
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
    // 订单管理
    public function dingdan(){
        $type=input('type');
        $name=input('name');
        $where=[];
        if($type){
            if($type=='title'){
                $where['b'.$type]=['like','%'.$name.'%'];
            }else{
                $where['a'.$type]=$name;
            }
        }
        $join=[
            ['shoplists b','a.shopid = b.id'],
        ];
        $data=Db::name('shoplist_records')->alias('a')->join($join)->field('a.id,a.shopid,a.data,a.uid,a.code,a.time,a.money,a.kuaidi,a.danhao,a.data,a.type,a.num,b.title,b.image')->order('a.time desc')->paginate('',false,['query'=>request()->param()]);

        
        $page = $data->render();
 
        $this->assign('data',$data);
        $this->assign('page', $page);
        return $this->fetch();
    }
    // 订单详细或发货
    public function dingdancode(){
        $id=input('id/d');
        $name=Db::name('shoplist_records')->find($id);
        $shop=Db::name('shoplists')->find($name['shopid']);
        $member=_user($name['uid']);
        $this->assign('name', $name);
        $this->assign('shop', $shop);
        $this->assign('member', $member);
        return $this->fetch();
    }
    // 订单发货
    public function dingdanadd(){
        $id=input('id/d');
        $post=input('post.');
        if($id){
            Db::name('shoplist_records')->update(['id'=>$id,'data'=>$post['data'],'kuaidi'=>$post['kuaidi'],'danhao'=>$post['danhao']]);
            echo json_encode(['操作成功']);
        }
    }
    
}
