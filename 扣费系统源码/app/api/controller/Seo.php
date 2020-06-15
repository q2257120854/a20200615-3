<?php
// +---------------------------------------------------------------------+
// | OneBase    | [ WE CAN DO IT JUST THINK ]                            |
// +---------------------------------------------------------------------+
// | Licensed   | http://www.apache.org/licenses/LICENSE-2.0 )           |
// +---------------------------------------------------------------------+
// | Author     | Bigotry <3162875@qq.com>                               |
// +---------------------------------------------------------------------+
// | Repository | https://gitee.com/Bigotry/OneBase                      |
// +---------------------------------------------------------------------+

namespace app\api\controller;

/**
 * 文章接口控制器
 */
class Seo extends ApiBase
{

    /**
     * 关键词查询回调接口
     */
    public function getrank()
    {

            return $this->apiReturn($this->logicSeo->getRank($this->param));
    }

    /**
     * 实时推送关键词
     */
    public function runing(){

        $this->logicSeo->runing($this->param);
    }

    /**
     * 定时任务获取批量获取关键词接口
     */

    public function timing(){

        $this->logicSeo->getTiming($this->param);
    }


}
