<?php
namespace app\index\controller;
use app\index\controller\Common;
use think\Db;
use think\Request;
class Article extends Common
{
     // 公共
    public function __construct($tokenaaa=''){
        parent::__construct();
        if(_isMobileApp()){
            $this->redirect("m/index");
            exit();
        }
    }
    // 模拟浏览器
    private function get($url){
        $url = $url;//以百度为例
        $data = array();
        $curl = curl_init();//初始化一个curl会话；
        curl_setopt($curl,CURLOPT_URL,$url);//指定访问的url
        curl_setopt($curl,CURLOPT_POST,$data);//post请求的参数，
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);//获取的信息以文件流的方式返回
        $data = curl_exec($curl);//执行curl;
        curl_close($curl); // 关闭CURL会话
        return $data;
    }	 
    public function index(){
        $where['hide']=1;
        // $articleList=Db::name('article')->where($where)->field('id,title,mychannel,image,images,create_time,source,uid,weitoutiao,videodate,video')->limit(10)->order('rand()')->select();
        // foreach ($articleList as $k => $v) {
        //     if($v['uid']){
        //         $user=_user($v['uid']);
        //         $articleList[$k]['user']['id']=$user['id'];
        //         $articleList[$k]['user']['img']=$user['img'];
        //         $articleList[$k]['user']['username']=$user['username'];
        //     }
        // }
        // $this->assign('articleList',$articleList);
        // 分类导航
        $typeid=Db::name('typeid')->where(['hide'=>1,'tid'=>0])->order('hide desc,des desc')->limit(100)->field('id,title')->select();
        $this->assign('typeid',$typeid);
        $tid=db('slide_type')->where(['title'=>'首页轮播图'])->value('id');
        $slide=Db::name('slides')->where(['tid'=>$tid])->select();
        $this->assign('slide',$slide);
        // var_dump($slide);
        $this->assign('imgUrl',_imgUrl());
        return $this->fetch('ffxiang');
    }
    // 频道与列表
    public function typeid(){
        if(!input('?id')){
            $this->error("参数错误");
        }
        $id=input('id/d');
        $this->assign('typeidActive',$id);
        $this->assign('id',$id);
        $where['hide']=1;
        $where['id']=$id;
        $name=Db::name('typeid')->where($where)->cache(_cache('db'))->find();
        $this->assign('name',$name);
        // 分类导航
        $typeid=Db::name('typeid')->where(['hide'=>1,'tid'=>0])->order('hide desc,des desc')->limit(100)->cache(_cache('db'))->field('id,title')->select();
        $this->assign('typeid',$typeid);
        return $this->fetch('list');
    } 
    // 内容内页
    public function view(){
		
        if(!input('?id')){
            $this->error("参数错误");
        }
        $id=input('id/d');
        $name=Db::name('article')->where(['id'=>$id])->cache(true)->find();
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
        if(_session()){
            $member=_member();
        }
        // 增加点击次数 开始
        Db::name('article')->where(['id'=>$id,'hide'=>1])->setInc('click');
        // 增加点击次数 结束
        
        if($name['content']){
            // $name['content'] = stripslashes($name['content']);
            // $name['content']=str_replace('src="','src="'._imgUrl().'',$name['content']);
            // $name['content']=str_replace('<div>','',$name['content']);
            // $name['content']=str_replace('</div>','',$name['content']);
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
            if($name['weitoutiao']==0){
                $content='';
                foreach (json_decode($name['images'],true) as $k => $v) {
                    $content.='<p class="a-image"><img src="'._imgUrl().$v['img'].'"></p>';
                    $content.='<p class="a-image">'.$v['img_text'].'</p>';
                }
                $name['content']="<p>".$name['description']."</p>".$content;
            }
        }
        // 读取会员信息
        $user=Db::name('member')->where('id',$name['uid'])->find();
        // 分类导航
        $typeid=Db::name('typeid')->where(['hide'=>1,'tid'=>0])->order('hide desc,des desc')->limit(100)->cache(_cache('db'))->field('id,title')->select();
        $this->assign('typeid',$typeid);
        $this->assign('user',$user);
        // 是否已收藏
        if(_session()){
            $shoucang=DB::name('member_favorite')->where(['aid'=>$id,'uid'=>$name['uid'],'type'=>0])->value('id');
            if(!$shoucang){$shoucang=0;}
            // 关注
            $name['guanzhu']=db('member_guanzhu')->where(['uid'=>$member['id'],'gz_uid'=>$name['uid']])->value('id');
        }else{
            $shoucang=0;
            $name['guanzhu']=0;
        }
        $name['shoucang']=$shoucang;
        // 评论列表
        $ping=Db::name('article_ping')->where('aid',$id)->order('time desc')->limit(20)->select();
        foreach ($ping as $k => $v) {
            $user=_user($v['uid']);
            $ping[$k]['img']=_imgUrl().$user['img']."?imageView2/1/w/100/h/100";
            $ping[$k]['username']=$user['username'];
        }
        $name['content']=str_replace('<div>','',$name['content']);
       $content=preg_split('/<div class="y-box article-actions">/', $name['content'],-1);
       // file_put_contents('./2.txt', $content[0]);
        $name['content']=$content[0];
        $content=preg_split('/<ul class="label-list list-paddingleft-2">/', $name['content'],-1);
         $name['content']=$content[0];
         $content=preg_split('/<p><strong>延伸阅读/', $name['content'],-1);
         $name['content']=$content[0];



//        $name['content'] = preg_replace("/\\\\u([0-9a-f]{3,4})/i", "&#x\\1;", $name['content']);
//        $name['content'] = html_entity_decode($name['content'], null, 'UTF-8');
//        $name['content'] = str_replace('\\', '', $name['content']);
//        print_r($name);
        // var_dump($content);exit();
        $this->assign('ping',$ping);
        $this->assign('name',$name);
        return $this->fetch('view');
    }
    // 单页
    public function page(){
        $id=input('id/d');
        if(!$id){
            return;
        }
        $typeid=Db::name('typeid')->where(['hide'=>1,'tid'=>0])->order('hide desc,des desc')->limit(100)->cache(_cache('db'))->field('id,title')->select();
        $typeidJosn=[];
        foreach ($typeid as $k => $v) {
            $typeidJosn[$k]['name']=$v['title'];
            $typeidJosn[$k]['channelid']=$v['id'];
            $typeidJosn[$k]['url']=url('typeid',['id'=>$v['id']]);
        }
        $this->assign('typeidJosn',$typeidJosn);
        $this->assign('typeid',$typeid);
        $name=Db::name('page')->where('id',$id)->cache(_cache('db'))->find();
        $this->assign('name',$name);
        return $this->fetch();
    }
    // 搜索
    public function search(){
        $search=input('search');
        if(!$search){
            $this->error('请输入搜索关键词');
        }
        // 分类导航
        $typeid=Db::name('typeid')->where(['hide'=>1,'tid'=>0])->order('hide desc,des desc')->limit(100)->cache(_cache('db'))->field('id,title')->select();
        $this->assign('typeid',$typeid);
        $this->assign('search',$search);
        return $this->fetch();
    }
}
