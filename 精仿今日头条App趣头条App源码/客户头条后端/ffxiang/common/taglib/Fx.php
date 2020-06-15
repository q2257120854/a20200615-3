<?php
namespace app\common\taglib;
use think\template\TagLib;
use think\Db;
class Fx extends TagLib{
    /**
     * 定义标签列表
     */
    protected $tags   =  [
        // 标签定义： attr 属性列表 close 是否闭合（0 或者1 默认1） alias 标签别名 level 嵌套层次
        'close'     => ['attr' => 'time,format', 'close' => 0], //闭合标签，默认为不闭合
        // 频道模型
        'mychannel'      => ['attr' => 'id,limit,order', 'close' => 1],
        // 栏目分类
        'typeid'      => ['attr' => 'id,tid,limit,order,pagesize,field,image', 'close' => 1],
        // 文章内容
        'article'     => ['attr' => 'field,order,limit,pagesize,flags,typeid,image,id', 'close' => 1],
        // 轮播图
        'slide'     => ['attr' => 'field,order,limit,pagesize,id,tid', 'close' => 1],
        // 友情链接
        'link'     => ['attr' => 'order,limit,pagesize,id,img', 'close' => 1],

    ];
    /**
     * 获取栏目分类
     */
    public function tagMychannel($tag, $content)
    {
        $id = isset($tag['id']) ? $tag['id'] : '';
        $order = isset($tag['order']) ? $tag['order'] : '';
        $limit = isset($tag['limit']) ? $tag['limit'] : 0;
        $parse = <<<EOF
        <?php 
        unset(\$where); /*unset销毁代码，处理怪异问题，待研究*/
        \$where=[];
        /*指定ID栏目3*/
        if("$id" != ''){
            \$where['id'] =   ['in','$id'];
        }
        \$list = think\Db::name('mychannel')->where(\$where);
        /*排序*/
        if("$order" != ''){
            \$list=\$list->order("$order");
        }else{
            \$list=\$list->order("id asc");
        }
        /*数量*/
        if($limit != 0){
            \$list=\$list->limit($limit);
        }
        \$list=\$list->select();
        /*开始赋值*/
        \$__LIST__ = \$list;
        foreach(\$__LIST__ as \$k => \$fx):
        ?>
EOF;

        $parse .= $content;
        $parse .= '<?php endforeach;?>';
        return $parse;
   
    }

    /**
     * 获取栏目分类
     */
    public function tagTypeid($tag, $content)
    {
        $id = isset($tag['id']) ? $tag['id'] : '';
        $tid = isset($tag['tid']) ? $tag['tid'] : 0;
       // $mychannel = isset($tag['mychannel']) ? $tag['mychannel'] : '';
        $field = isset($tag['field']) ? $tag['field'] : '';
        $order = isset($tag['order']) ? $tag['order'] : '';
        $limit = isset($tag['limit']) ? $tag['limit'] : 0;
        $pagesize = isset($tag['pagesize']) ? $tag['pagesize'] : 0;
        $image = isset($tag['image']) ? $tag['image'] : "";
        $parse = <<<EOF
        <?php 
        unset(\$where); /*unset销毁代码，处理怪异问题，待研究*/
        \$where['hide']=1;
        if($tid !=''){
            \$where['tid']  =   $tid;
        }
        /*模型频道*/
       
        /*判断是否有缩略图*/
        if("$image" != ''){
            if('$image'=='image'){
                \$where['image'] =   ['neq',''];
            }else if('$image'=='imageNo'){
                \$where['image'] =   ['eq',''];
            }else{
            }
        }
        /*指定ID栏目3*/
        if("$id" != ''){
            \$where['id'] =   ['in','$id'];
        }
        \$list = think\Db::name('typeid')->where(\$where);
        /*栏目排序*/
        if("$order" != ''){
            \$list=\$list->order("$order");
        }else{
            \$list=\$list->order("des desc,id asc");
        }
        /*分页与数量*/
        if($pagesize !=''){
            if($pagesize==0){
                \$list=\$list->paginate();
            }else{
                \$list=\$list->paginate($pagesize);
            }
            \$page = \$list->render();
        }else{
            /*数量*/
            if($limit != 0){
                \$list=\$list->limit($limit);
            }
            \$list=\$list->select();
        }
        /*开始赋值*/
        \$__LIST__ = \$list;
        foreach(\$__LIST__ as \$k => \$fx):
        if(!\$fx['url']){
            \$fx['url'] = url("article/typeid",["id"=>\$fx["id"]]);
        }
        ?>
EOF;

        $parse .= $content;
        $parse .= '<?php endforeach;?>';
        return $parse;
   
    }
    /**
     * 获取文章列表  \$url = url("article/article",["id"=>\$v["id"]]);
                \$title = \$v["title"];
                \$id = \$v["id"];
                \$typeid = \$v["typeid"];
                \$typeid = \$v["typeid"];
                \$fields=think\Db::getTableInfo('fx_article','fields');
        extract(\$fields);
        echo \$fields[1];
         // if($pagesize==1){
            //     \$list=\$list->paginate();
            // }else{
            //     \$list=\$list->paginate($pagesize);
            // }
     */
    public function tagArticle($tag, $content)
    { 
        $v = isset($tag['v']) ? $tag['v'] : 'fx';
        $id = isset($tag['id']) ? $tag['id'] : '';
        $typeid = isset($tag['typeid']) ? $tag['typeid'] : 0;
        $order = isset($tag['order']) ? $tag['order'] : '';
        $limit = isset($tag['limit']) ? $tag['limit'] : 0;
        $pagesize = isset($tag['pagesize']) ? $tag['pagesize'] : 0;
        $field = isset($tag['field']) ? $tag['field'] : '';
        $flags = isset($tag['flags']) ? $tag['flags'] : 0;
        $time = isset($tag['time']) ? $tag['time'] : '';
        $keywords = isset($tag['keywords']) ? $tag['keywords'] : '';
        $image = isset($tag['image']) ? $tag['image'] : "";
        $parse = <<<EOF
        <?php 
        unset(\$where); /*unset销毁代码，处理怪异问题，待研究*/
        \$where['flags']=$flags;
        \$where['hide']=1;
        /*调用分类栏目*/
        if($typeid){
            \$condition['cid'] = $typeid;
            \$children_ids = think\Db::name('typeid')->field('id')->where('tid',\$condition['cid'])->cache(_cache('db'))->find();
            /*如果分类有子栏目*/
            if(\$children_ids){
                /*调用全部所有子栏目*/
                \$children_ids = think\Db::name('typeid')->field("id,tid")->order("id asc")->cache(_cache('db'))->select();
                \$children_ids = _typeidTid(\$children_ids,\$condition['cid']);
                \$children_ids_data=[];
                \$children_ids_data[]=$typeid;
                foreach (\$children_ids as \$k => \$v) {
                    \$children_ids_data[]=\$v['id'];
                }
                \$where['typeid']=['in',\$children_ids_data];
            }else{
                /*调用指定分类ID*/
                \$where['typeid']=$typeid;
            }
        }
        /*关键词搜索*/
        if("$keywords" != ''){
            \$where['title'] =   ['like','%$keywords%'];
        }
        /*指定ID文章*/
        if("$id" != ''){
            \$where['id'] =   ['in','$id'];
        }
        /*判断是否有缩略图*/
        if("$image" != ''){
            if('$image'=='image'){
                \$where['image'] =   ['neq',''];
            }else if('$image'=='imageNo'){
                \$where['image'] =   ['eq',''];
            }else{
            }
        }
        \$list = think\Db::name('article')->where(\$where);
         
        /*调用自定义属性*/
        if("$field" != ''){
            \$list=\$list->field("$field");
        }
        /*文章排序*/
        if("$order" != ''){
            if("$order" == 'click'){
                \$list=\$list->order("click desc,des desc,id desc");
            }else{
                \$list=\$list->order("$order");
            }
        }else{
            \$list=\$list->order("des desc,id desc");
        }
        /*时间表达式*/
        if("$time" != ''){
            \$list=\$list->whereTime('create_time','$time');
        }
         
        /*分页与数量*/
        if($pagesize !=''){
            if($pagesize==1){
                \$list=\$list->paginate();
            }else{
                \$list=\$list->paginate($pagesize);
            }
            \$page = \$list->render();
        }else{
            /*数量*/
            if("$limit" != 0){
                \$list=\$list->limit($limit);
            }
          //  \$list=\$list->fetchSql(true);
            \$list=\$list->select();
        }
       // exit(\$list);
        /*开始赋值*/
        \$__LIST__ = \$list;
        foreach(\$__LIST__ as \$k => \${$v}):
        if(!\${$v}['url']){
            \${$v}['url'] = url("article/view",["id"=>\${$v}["id"]]);
        }
        ?>
EOF;

        $parse .= $content;
        $parse .= '<?php endforeach;?>';
        return $parse;
    }
    /**
     * 轮播图
     */
    public function tagSlide($tag, $content)
    {
        $id = isset($tag['id']) ? $tag['id'] : '';
        $tid = isset($tag['tid']) ? $tag['tid'] : '';
        $field = isset($tag['field']) ? $tag['field'] : '';
        $order = isset($tag['order']) ? $tag['order'] : '';
        $limit = isset($tag['limit']) ? $tag['limit'] : 0;
        $pagesize = isset($tag['pagesize']) ? $tag['pagesize'] : 0;
        $parse = <<<EOF
        <?php
        unset(\$where); /*unset销毁代码，处理怪异问题，待研究*/
        \$where['hide']=1;
        /*指定ID 轮播图*/
        if("$id" != ''){
            \$where['id'] =   ['in','$id'];
        }
        /*指定分组ID 多个指定分组填写 , 逗号*/
        if("$tid" != ''){
            \$where['tid'] =   $tid;
        }
        \$list = think\Db::name('slide')->where(\$where);
        /*排序*/
        if("$order" != ''){
            \$list=\$list->order("$order");
        }else{
            \$list=\$list->order("des desc,id desc");
        }
        /*调用自定义属性*/
        if("$field" != ''){
            \$list=\$list->field("$field");
        }
        /*分页与数量*/
        if($pagesize !=''){
            if($pagesize==0){
                \$list=\$list->paginate();
            }else{
                \$list=\$list->paginate($pagesize);
            }
            \$page = \$list->render();
        }else{
            /*数量*/
            if("$limit" != 0){
                \$list=\$list->limit($limit);
            }
            \$list=\$list->select();
        }
        /*开始赋值*/
        \$__LIST__ = \$list;
        foreach(\$__LIST__ as \$k => \$fx):
        ?>

EOF;
        $parse .= $content;
        $parse .= '<?php endforeach;?>';
        return $parse;
   
    }
    /**
     * 友情链接
     */
    public function tagLink($tag, $content)
    {
        $id = isset($tag['id']) ? $tag['id'] : '';
        $order = isset($tag['order']) ? $tag['order'] : '';
        $limit = isset($tag['limit']) ? $tag['limit'] : 0;
        $pagesize = isset($tag['pagesize']) ? $tag['pagesize'] : 0;
        $img = isset($tag['img']) ? $tag['img'] : "";
        $parse = <<<EOF
        <?php
        unset(\$where); /*unset销毁代码，处理怪异问题，待研究*/
        \$where=[];
        /*指定ID*/
        if("$id" != ''){
            \$where['id'] =   ['in','$id'];
        }
        /*判断是否有缩略图*/
        if("$img" != ''){
            if('$img'=='img'){
                \$where['img'] =   ['neq',''];
            }else if('$img'=='imageNo'){
                \$where['img'] =   ['eq',''];
            }
        }
        \$list = think\Db::name('link')->where(\$where);
        /*排序*/
        if("$order" != ''){
            \$list=\$list->order("$order");
        }else{
            \$list=\$list->order("des desc,id desc");
        }
        /*分页与数量*/
        if($pagesize !=''){
            if($pagesize==0){
                \$list=\$list->paginate();
            }else{
                \$list=\$list->paginate($pagesize);
            }
            \$page = \$list->render();
        }else{
            /*数量*/
            if("$limit" != 0){
                \$list=\$list->limit($limit);
            }
            \$list=\$list->select();
        }
        /*开始赋值*/
        \$__LIST__ = \$list;
        foreach(\$__LIST__ as \$k => \$fx):
        ?>

EOF;
        $parse .= $content;
        $parse .= '<?php endforeach;?>';
        return $parse;
   
    }

}