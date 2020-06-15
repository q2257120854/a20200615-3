<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
 
class Collection extends Common
{
 
    public function index(){
        $data=Db::name('collection_type')->order('id asc')->select();
    	$this->assign('data',$data);
        return $this->fetch();
    }
    // 添加分组
    public function typeadd(){
        $id=input("id");
        if(request()->isAjax()){
     
            $post=input('post.');
            $time=time();
            if(!$id){   // 添加数据
                $titledb=Db::name('collection_type')->where('title',$post['title'])->find();
                if($titledb){
                    return ['err'=>'分组标题已存在'];
                }
                $db=Db::name('collection_type')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('collection_type')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
            
        }else{
            if($id){
                $name=Db::name('collection_type')->where('id',$id)->find();
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
    public function typeDel(){
        if(request()->isAjax()){
           
            $id=input('id');
            if($id){
                
             
                    $db=Db::name('collection_type')->delete($id);
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
    // 东方头条采集数据


    public function rule(){
        if(request()->isAjax()){
          
            $post=input('post.');
            if($post){
                $type=$post['type'];
                $html=file_get_contents('http://v.juhe.cn/toutiao/index?type='.$type.'&key=896638573e76480b06cdd394b6e1b19d');
                if($html){
                    $data=json_decode($html);
                }else{
                    $data=['err'=>'采集失败'];
                }
            }else{
                $data=['err'=>'type参数错误'];
            }
        }else{
            return $this->fetch();
        }
        return $data;
    }
    // 东方头条 选择栏目准备导入
    public function ruledata(){
        if(request()->isAjax()){
       
            $post=input('post.');
            if($post){
                if(!$post['mychannel']){return ['err'=>'请先点击你要采集目标分类'];}
                if($post['urls']=='urls'){  // 提交返回url地址给JS
                    // $des=$post['des'];
                    // $des=explode('delAll%5B%5D=',$des);
                    // $desarray=[];
                    // foreach ($des as $k => $v) {
                    //    if($v){
                    //         $desarray[]=str_replace('&','',$v);
                    //    }
                    // }
                    // $des=json_encode($desarray);
                    $data=[url('collection/ruledata',['mychannel'=>$post['mychannel']])];
                }else{
                   $data=['url'=>url('collection')]; 
                }
            }else{
                $data=['err'=>'type参数错误'];
            }
        }else{
            $typeiddb=Db::name('typeid')->order('des desc,id asc')->cache(_cache('db'))->select();
            $this->assign('typeid',get_tree_option($typeiddb,0));
             
            return $this->fetch();
        }
        return $data;
    }
    // 东方头条开始 采集内容数据
    public function ruledataview(){
         if(request()->isAjax()){
     
            $post=input('post.');
      
            if($post){
                $html=file_get_contents('http://mini.eastday.com/mobile/'.$post['id'].'.html');
                preg_match("/<article id=\"J_article\" class=\"J-article article\">([\s\S]*?)<\/article>
/",$html,$article);
                $article=$article['1'];
                preg_match("/<h1 class=\"title\">(.*?)<\/h1>/", $article, $title);
                preg_match('/<span class="src">(.*?)&nbsp;&nbsp;&nbsp;&nbsp;来源：(.*?)<\/span>/', $article, $text);
                preg_match('/<div id="content" class="J-article-content article-content">([\s\S]*?)<\/div>/', $article, $content);
                $content=preg_replace("/<(p.*?)>/si","<p>",$content['1']); //过滤P标签
                $content=preg_replace("/<(\/?figure.*?)>/si","",$content); //过滤figure标签
                $content=preg_replace("/<(\/?a.*?)>/si","",$content); //过滤a标签
                $content=preg_replace("/(data.*?)\"(.*?)\"/si","",$content); //过滤data属性
                $content=preg_replace("/(width.*?)\"(.*?)\"/si","",$content); //过滤width属性
                $content=preg_replace("/(alt.*?)\"(.*?)\"/si","",$content); //过滤alt属性
                $content=preg_replace("/(style.*?)\"(.*?)\"/si","",$content); //过滤style属性
                preg_match_all("/src=\"(.*?)\"/",$content,$img);
                $image='';
                if($img){
                    foreach ($img[1] as $k  =>  $v) {
                        $img_1=$v;
                        $img_2=$this->upload($img_1);
                        if($img_1 && $img_2){
                            $content=str_replace($img_1,$img_2,$content);
                            if($k==0){
                                $image=$img_2;
                            }
                        }
                    }
                }
                $content=str_replace("\r\n","",$content);   // 删除换行
                if($title['1'] && $content){
                    $titledb=Db::name('article')->where('title',$title['1'])->find();
                    if($titledb){
                        return ['err'=>'<font color="#f00">文章存在</font>'];
                    }
                }else{
                    return ['ret'=>'<font color="#f00">采集失败</font>'];
                }

                $content = preg_replace("/\\\\u([0-9a-f]{3,4})/i", "&#x\\1;", $content);
                $content = html_entity_decode($content, null, 'UTF-8');
                $content = str_replace('\\', '', $content);

                $data=[
                    'title'         =>      $title['1'],
                    'image'         =>      $image,
                    'content'       =>      $content,
                    'typeid'        =>      $post['typeid'],
                    'create_time'   =>      strtotime($text['1'].":00"),
                    'update_time'   =>      strtotime($text['1'].":00"),
                    'source'        =>      $text['2'],
                    'hide'          =>      1,
                    'template'      =>      '',  
                    'des'           =>      50,
                    'keywords'      =>      '',
                    'description'   =>      '',
                    'flags'         =>      0,
                    'click'         =>      '',
                    'tags'          =>      '',
                    'url'           =>      '',
                    'mychannel'     =>      1,

                ];
                // 开始添加数据SQL
                $db=Db::name('article')->insert($data);
                if($db){
                    $data=['ret'=>'<font color="#1ab394">发布成功</font>'];
                }else{
                    $data=['err'=>'<font color="#f00">发布失败</font>'];
                }
                 
            }else{
                $data=['err'=>'参数值错误'];
            }
        }else{
            $data=['err'=>'提交错误'];
        }
        return $data;
    }
    //上传图片
    private function upload($img){
      
        //判断文件夹是否存在
        $d=ROOT_PATH . 'public/uploads';
        $date=date('Ymd');
        $d=$d.'/'.$date.'/';
        if(!file_exists($d)){ 
            mkdir($d);
        }
        // 获取图片格式
        $geshi=explode('.', $img);
        $geshi=array_pop($geshi);

        //开始下载图片
        $img=file_get_contents($img);
        if(!$img){
            return ''; 
        }
        $geshis=md5($img).'.'.$geshi;
        $geshisa=$date.'/'.md5($img).'.'.$geshi;
        $d=$d.'/'.$geshis;
        file_put_contents($d,$img);
        return "/public/uploads/".$geshisa;  
    }
    public function toutiao(){
       return $this->fetch();
    }
    public function weitoutiao(){
        return $this->fetch();
    }
    // 增加小视频
    public function svideo(){
        return $this->fetch();
    }
     
    
}
