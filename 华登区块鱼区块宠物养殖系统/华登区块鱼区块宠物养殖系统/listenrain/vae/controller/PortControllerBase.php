<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://www.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +----------------------------------------------------------------------
namespace vae\controller;
use vae\controller\ControllerBase;
use app\common\model\member\Member;
use app\common\model\member\MemberLevel;
use app\common\model\member\MemberIncomelog;
use app\common\model\order\Order;
use app\common\model\product\ProductAppointment;
use app\common\model\product\Product;
use think\Session;
use think\Config;

class PortControllerBase extends ControllerBase
{
    protected $rows;
    protected $page;
    protected $field;
    protected $userinfo;
    protected $_session;
    protected $_token;
    protected $confinfo;

    public function _initialize()
    {
        parent::_initialize();
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
        $this->rows = !empty($this->param('rows')) ? $this->param('rows') : 5;
        $this->page = !empty($this->param('page')) ? $this->param('page') : 1;
        $this->field = !empty($this->param('field')) ? json_decode($this->param('field'),true) : '*';
        $param = $this->param();
        vae_set_hook('port_begin',$param);

    }

    protected static function port($code=1, $msg="OK", $data=[], $url='', $httpCode=200, $header = [], $options = []){
        $port =  vae_assign($code, $msg, $data, $url, $httpCode, $header, $options);
        vae_set_hook('port_return',$port);
        return $port;

    }

    protected static function param($key=""){

        $param = vae_get_param();
        vae_set_hook('port_param',$param);
        if(!empty($key) and isset($param[$key])){
            $param = $param[$key]; 
        } else if(!empty($key) and !isset($param[$key])){
            $param = null;
        } else {
            $param = $param;
        }
        return $param;

    }

    protected static function setThumb($thumb="",$i=false){
        if($i){
            $thumb = explode(',',$thumb);
            foreach ($thumb as $k => $v) {
                $thumb[$k] = config('webconfig.domain').$v;
            }
        } else {
            $thumb = config('webconfig.domain').$thumb;
        }
        return $thumb;
    }

    protected static function getConfinfo($userinfo){
        $level = MemberLevel::getInfoByLevel($userinfo['level']);
        $payconf = Config::get('payconfig');
        $info = array(
            'max_give' => $payconf['max_give'],//最高转增
            'min_reservation' => $payconf['min_reservation'],//最低保留
            'min_recharge' => $payconf['min_recharge'],//最低充值多少才有优惠
            'recharge_discount' => $level ? $level['discount'] : 0,//优惠(折)
            'recharge_audit' => $payconf['recharge_audit'],
            'activation_integral' => $payconf['activation_integral'],
            'loadingtime' => $payconf['loadingtime'], //捕捞加载动画的时间(秒)
            'recharge_time' => $payconf['recharge_time'],
            'cataudio' => url($payconf['cataudio'], '', '', true),
            'customer_service' => config('webconfig.customer_service')
        );
        return $info;
    }

    protected  function _checkLogin($token) {
        if (empty($token)) return false;
        $req = (array)json_decode(base64_decode($token));

        if (empty($req) || empty($req['mid']) || empty($req['token'])) return false;
        $mid = $req['mid'];
        $token = html_entity_decode($req['token']);
        $userinfo = Member::getMember(['mid' => $mid]);
        if (empty($userinfo)) return false;

        $this->userinfo = $userinfo;
        $account =  $this->userinfo['account'];
        Config::set('session.id', md5('uni-app' . $account));
        $uk = Session::get('user_token', 'uni-app');
        if (password_verify($uk[0] . $uk[1] . $account . $uk[2], $token)) {
            
            $userinfo = Member::getMember(['account' => $account, 'status' =>['<>', -1]]);
            if (!$userinfo) return false;
            
            $adoptcount = Order::getCount(['mid' => $userinfo['mid'], 'status' => ['in', [0, 1]]]);
            $appoicount = ProductAppointment::getCount(['mid' => $userinfo['mid'], 'status' => 1]);
            $transfercount = Order::getCount(['seller_mid' => $userinfo['mid'], 'status' => ['in', [0, 1]]]);
            $accumulated_income = MemberIncomelog::getLogSum(['mid' =>$userinfo['mid'], 'status' => 1]);
            $totalassets = Product::getTotalAssets($userinfo['mid']);
            $this->userinfo = [
                'mid' => $userinfo['mid'],
                'account' => $userinfo['account'],
                'pwd' => $userinfo['pwd'],
                'pwd2' => $userinfo['pwd2'],
                'salt' => $userinfo['salt'],
                'nickname' => $userinfo['nickname'],
                'totalassets' => $totalassets,//总资产
                'team_income' => $userinfo['team_income'],
                'recommend_income' => $userinfo['recommend_income'],
                'income_transferred' => $userinfo['income_transferred'],
                'integral' => $userinfo['integral'],
                'bst_currency' => $userinfo['bst_currency'],
                'ocn_currency' => $userinfo['ocn_currency'],
                'level' => $userinfo['level'],
                'levelname' => $userinfo['levelname'],
                'realname' => $userinfo['realname'],
                'idnum' => $userinfo['idnum'],
                'parent_mid' => $userinfo['parent_mid'],
                'is_idverifly' => $userinfo['is_idverifly'],
                'is_promoter' => $userinfo['is_promoter'],
                'is_activation' => $userinfo['is_activation'],
                'adoptcount' => $adoptcount, //捕捞记录
                'appoicount' => $appoicount, //预约记录
                'transfercount' => $transfercount, //转让记录
                'accumulated_income' =>$accumulated_income, //累计收入
                'status' => $userinfo['status']
            ];
            //返回配置信息
            $this->confinfo = $this->getConfinfo($this->userinfo);
            $this->_token = base64_encode(json_encode(['mid' => $userinfo['mid'], 'token' => password_hash($uk[0] . $uk[1] . $account . $uk[2], PASSWORD_DEFAULT)]));

            //设置用户在线
            setMemberOnline($this->userinfo);
            Member::loginUpdateInfo($this->userinfo['mid']);
            return true;
        } else {
            return false;
        }


    }

}