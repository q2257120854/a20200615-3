<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://www.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +---------------------------------------------------------------------
namespace app\port\controller;
use app\port\controller\AuthController;
use app\common\model\workorder\Workorder;
use app\common\model\workorder\WorkorderType;

class ServerCenterController extends AuthController {
    /**
     * 初始化
     */
    public function __construct() {
        parent::__construct();

    }

    /**
     * 服务中心
     */
    public function index() {
        return $this->port(1, '服务中心', []);
    }

    /**
     * 工单列表
     */
    public function workorderList() {
        $param = $this->param();
        $type = $param['type'];
        $where = array();
        if($type==0){   //今天
            $time = strtotime(date('Y-m-d',time()));
            $where['w.add_time'] = ['>', $time];
        }elseif ($type==1) {   //昨天
            $time1 = strtotime("-1 day");
            $time2 = strtotime(date('Y-m-d',time()));
            $where['w.add_time'] = ['between', $time1.','.$time2];

        }elseif ($type==7){   //今周
            $time = strtotime("-7 day");
            $where['w.add_time'] = ['>', $time];
        }

        if(!empty($param['keywords'])) {
            $where['w.id|w.title|w.content'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $where['w.mid'] = $this->userinfo['mid'];
        $list = Workorder::systemPage($where);

        return $this->port(1, '工单列表', ['list' => $list]);
    }

    /**
     * 工单提交页面
     */
    public function workorder() {
        $list = WorkorderType::getList();
        return $this->port(1, '工单提交', ['list' => $list]);
    }

    /**
     * 提交工单
     */
    public function submitWorkorder() {
        $param = $this->param();
        $param['mid'] = $this->userinfo['mid'];
        $result = $this->validate($param, 'app\admin\validate\workorder\Workorder.add');
        if ($result !== true) {
            return $this->port(0, $result);
        } else {
            $type = $this->param('type');
            $typedetail = WorkorderType::getType(['id' => $type]);
            if($typedetail['is_uploadpictures']){
                
                $module =  'port';
                $use = 'workorder';
                $imgres = vae_upload($module,$use);
                if($imgres['code'] != 1){
                    return $this->port(0, '上传截圖失败');
                }
                $param['screenshot'] = $imgres['data'];
            }
            
            $res = Workorder::insertWorkorder($param);
            if ($res) {
                return $this->port(1, '工单提交成功!');
            }
            return $this->port(0, '工单提交失败!');
        }
    }



}