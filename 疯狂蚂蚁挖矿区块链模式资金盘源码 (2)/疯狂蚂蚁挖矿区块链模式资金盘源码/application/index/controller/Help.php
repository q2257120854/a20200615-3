<?php

namespace app\index\controller;

use think\Db;

class Help extends Base
{
    public function index()
    {
    	// 查询文章
        $article = Db::table('article')->where('type', '=', 8)->find();
        // 还没有内容
        if (empty($article)) {
            $article = [
                'id'        =>  '',
                'title'     =>  '',
                'content'     =>  '',
                'date'     =>  '',
            ];
        }
        // 显示页面
        $this->assign('article', $article);
        return $this->fetch();
    }
}
