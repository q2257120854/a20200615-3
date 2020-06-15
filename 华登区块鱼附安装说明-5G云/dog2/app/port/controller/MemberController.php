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
use think\Session;
use think\Config;
use app\common\model\member\Member;
use app\common\model\member\MemberIntegrallog;
use app\common\model\member\MemberRechargelog;
use app\common\model\member\MemberIncomelog;
use app\common\model\member\MemberAssetsalelog;
use app\common\model\member\PaymentMethod;
use app\common\model\member\PaymentType;
use app\common\model\notice\Notice;
use app\common\model\order\Order;
use app\common\model\product\ProductAppointment;
use app\common\model\product\Product;
use app\common\model\pay\RechargeCode;

class MemberController extends AuthController {
    /**
     * 初始化
     */
    public function __construct() {
        parent::__construct();
        if($this->userinfo['status'] == 0){
            return $this->port(0, '您的账户被禁用了，工单联系客服解除');
        }

    }

    /**
     * 会员信息
     */
    public function info() {
        $data = array(
            'member' => $this->userinfo,
            'token'  => $this->_token
        );
        return $this->port(1, '会员信息', $data);
    }

    /**
     * 我的资产
     */
    public function myAssets() {
        $assetslist = Product::systemPage(['p.owner_mid' => $this->userinfo['mid']]);
        return $this->port(1, '我的资产', ['assetslist' => $assetslist]);
    }

    /**
     * 我的银行卡
     */
    public function myPaymentMethod() {
        $methodlist = PaymentMethod::getList(['mid' => $this->userinfo['mid']]);
        return $this->port(1, '我的银行卡', ['methodlist' => $methodlist]);
    }

    /**
     * 银行类型
     */
    public function getPaymentType() {
        $typelist = PaymentType::getList(['status' => 1]);
        return $this->port(1, '银行类型', ['typelist' => $typelist]);
    }

    /**
     * 添加银行卡
     */
    public function submitMethod() {
        $param = $this->param();

        $key = '__blockcat_member_verifycodesession_' . $this->userinfo['account'];
        $verifycode1 = Session::pull($key);
        $verifycodesendtime = Session::pull('verifycodesendtime');

        if (!isset($verifycode1) || $verifycode1 != $param['verifycode'] || !isset($verifycodesendtime) || $verifycodesendtime + 600 < time()) {
            return $this->port(0, '验证码错误或已过期');
        }

        $result = $this->validate($param, 'app\admin\validate\member\PaymentMethod.add');
        if ($result !== true) {
            return $this->port(0, $result);
        } else {
            $id = $this->param('id');
            if (!isset($id)) {
                $paymentcode = '';
                if ($param['ispaymentcode']) {
                    $module = 'port';
                    $use = 'payment_method';
                    $imgres = vae_upload($module, $use);
                    if ($imgres['code'] != 1) {
                        return $this->port(0, '上传收款二维码失败');
                    }
                    $paymentcode = $imgres['data'];
                }
                $data = array(
                    'mid'            => $this->userinfo['mid'],
                    'type'           => $param['type'],
                    'titleofaccount' => $param['titleofaccount'],
                    'account'        => $param['account'],
                    'paymentcode'    => $paymentcode,
                    'add_time'       => time()
                );
                $res = PaymentMethod::insertMethod($data);
                if ($res) {
                    return $this->port(1, '添加银行卡成功!');
                }
                return $this->port(0, '添加银行卡失败!');
            } else {
                $paymentcode = '';
                if ($param['ispaymentcode']) {
                    $module = 'port';
                    $use = 'payment_method';
                    $imgres = vae_upload($module, $use);
                    if ($imgres['code'] != 1) {
                        $paymentcode = $param['payment_method'];
                    } else {
                        $paymentcode = $imgres['data'];
                    }
                }
                $data = array(
                    'id'             => $id,
                    'mid'            => $this->userinfo['mid'],
                    'type'           => $param['type'],
                    'titleofaccount' => $param['titleofaccount'],
                    'account'        => $param['account'],
                    'paymentcode'    => $paymentcode,
                );
                $res = PaymentMethod::updateMethod($data);
                if ($res) {
                    return $this->port(1, '修改银行卡成功!');
                }
                return $this->port(0, '修改银行卡失败!');
            }

        }
    }

    /**
     * 修改银行卡状态
     */
    public function changeMethodStatus() {
        $id = $this->param('id');
        $status = $this->param('status');
        $status_text = $status ? '启用' : '关闭';
        $methodlist = PaymentMethod::getList(['pm.mid' => $this->userinfo['mid'], 'pm.status' => 1]);

        if (count($methodlist) <= 2) {
            if (!$status) {
                return $this->port(0, '必须启用两个!');
            }
        }
        $res = PaymentMethod::updateMethod(['id' => $id, 'mid' => $this->userinfo['mid'], 'status' => $status]);
        if ($res) {
            return $this->port(1, $status_text . '成功');
        }
        return $this->port(0, $status_text . '失败');
    }

    /**
     * 实名认证
     */
    public function realname() {
        $methodlist = PaymentMethod::getList(['pm.mid' => $this->userinfo['mid'], 'pm.status' => 1]);
        if (count($methodlist) < 2) {
            return $this->port(0, '最少绑定两种收款方式才能提交实名');
        }
        $param = $this->param();
        $result = $this->validate($param, 'app\admin\validate\member\Member.realname');
        if ($result !== true) {
            return $this->port(0, $result);
        } else {
            $data = array(
                'mid'          => $this->userinfo['mid'],
                'realname'     => $param['realname'],
                'idnum'        => $param['idnum'],
                'is_idverifly' => 2
            );
            $res = Member::updateMember($data);
            if ($res) {
                return $this->port(1, '实名提交成功!');
            }
            return $this->port(0, '实名提交失败!');
        }
    }

    /**
     * 修改密码
     */
    public function changePwd() {
        $param = $this->param();
        $result = $this->validate($param, 'app\admin\validate\member\Member.changepwd');
        if ($result !== true) {
            return $this->port(0, $result);
        } else {
            $key = '__blockcat_member_verifycodesession_' . $this->userinfo['account'];
            $verifycode1 = Session::pull($key);
            $verifycodesendtime = Session::pull('verifycodesendtime');

            if (!isset($verifycode1) || $verifycode1 != $param['verifycode'] || !isset($verifycodesendtime) || $verifycodesendtime + 600 < time()) {
                return $this->port(0, '验证码错误或已过期');
            }

            $member = Member::getMember(['account' => $this->userinfo['account'], 'status' => ['<>', -1]]);
            if (empty($member)) {
                return $this->port(0, '此手机号未注册!');
            }
            $pwd = password_hash(md5($param['pwd'] . $member['salt']), PASSWORD_DEFAULT);
            $data = array(
                'mid' => $this->userinfo['mid'],
                'pwd' => $pwd
            );
            $res = Member::updateMember($data);
            if ($res) {
                return $this->port(1, '修改密码成功!');
            }
            return $this->port(0, '修改密码失败!');
        }
    }

    /**
     * 修改二级密码
     */
    public function changePwd2() {
        $param = $this->param();
        $result = $this->validate($param, 'app\admin\validate\member\Member.changepwd2');
        if ($result !== true) {
            return $this->port(0, $result);
        } else {
            $key = '__blockcat_member_verifycodesession_' . $this->userinfo['account'];
            $verifycode1 = Session::pull($key);
            $verifycodesendtime = Session::pull('verifycodesendtime');

            if (!isset($verifycode1) || $verifycode1 != $param['verifycode'] || !isset($verifycodesendtime) || $verifycodesendtime + 600 < time()) {
                return $this->port(0, '验证码错误或已过期');
            }

            $member = Member::getMember(['account' => $this->userinfo['account'], 'status' => ['<>', -1]]);
            if (empty($member)) {
                return $this->port(0, '此手机号未注册!');
            }
            $pwd2 = password_hash(md5($param['pwd2'] . $member['salt']), PASSWORD_DEFAULT);
            $data = array(
                'mid'  => $this->userinfo['mid'],
                'pwd2' => $pwd2
            );

            $res = Member::updateMember($data);
            if ($res) {
                return $this->port(1, '修改二级密码成功!');
            }
            return $this->port(0, '修改二级密码失败!');
        }
    }

    /**
     * 获取验证码
     */
    public function verifycode() {
        $mobile = $this->userinfo['account'];

        $verifycodesendtime = Session::get('verifycodesendtime');
        if (!empty($verifycodesendtime) && $verifycodesendtime + 60 > time()) {
            return $this->port(0, '请求频繁请稍后重试!');
        }

        $key = '__blockcat_member_verifycodesession_' . $mobile;
        $code = mt_rand(111111, 999999);
        // $code = 201314;
        $content = '您的验证码是' . $code;;
        $res = sendSms($mobile, $content);
        // $res = 1;
        if ($res) {
            Session::set($key, $code);
            Session::set('verifycodesendtime', time());
            return $this->port(1, '短信发送成功');
        } else {
            return $this->port(0, '短信发送失败');
        }

    }

    /**
     * 系统消息
     */
    public function systemMessage() {
        $type = $this->param('type');
        $where = array();
        if ($type) {
            $where['type'] = $type;
        }
        $list = Notice::systemPage($where);
        return $this->port(1, '消息列表', ['list' => $list]);
    }

    /**
     * 获取鱼饵记录
     */
    public function integralLog() {
        $loglist = MemberIntegrallog::systemPage(['mid' => $this->userinfo['mid']]);
        return $this->port(1, '鱼饵记录', ['loglist' => $loglist]);
    }

    /**
     * 鱼饵转增
     */
    public function givingIntegral() {
        if(!$this->userinfo['is_idverifly']){
            return $this->port(0, '您还未实名认证！');
        }
        if(!$this->userinfo['is_activation']){
            return $this->port(0, '您还未激活账户！');
        }

        $integral = $this->param('integral');
        $mobile = $this->param('mobile');
        if (empty($integral)) return $this->port(0, '数量不能为空');
        if ($integral <= 0) return $this->port(0, '数量不能小于等于0');
        if (empty($mobile)) return $this->port(0, '对方手机不能为空');

        if ($integral > $this->userinfo['integral']) $this->port(0, '鱼饵数量不足');
        $conf = Config::get('payconfig');
        if ($integral > $conf['max_give']) $this->port(0, '最高转增' . $conf['max_give'] . '鱼饵');
        if (($this->userinfo['integral'] - $integral) < $conf['min_reservation']) $this->port(0, '账户最低保留' . $conf['min_reservation'] . '鱼饵');

        $member = Member::getMember(['account' => $mobile, 'status' => ['<>', -1]]);
        if (empty($member)) return $this->port(0, '对方账户不存在');
        //鱼饵记录
        Member::changeIntegral(3, $integral, $this->userinfo['mid'], $member['mid']);
        return $this->port(1, '转增M分成功');
    }

    /**
     * 我的团队
     */
    public function myTeam() {
        $teamlist = Member::getTeam(['mid' => $this->userinfo['mid']]);
        return $this->port(1, '我的团队', ['teamlist' => $teamlist]);
    }

    /**
     * 预约记录
     */
    public function appointment() {
        $appolist = ProductAppointment::systemPage(['pa.mid' => $this->userinfo['mid']]);
        return $this->port(1, '预约记录', ['appolist' => $appolist]);
    }

    /**
     * 收益记录
     */
    public function incomeLog() {
        $where = array();
        $where['m.mid'] = $this->userinfo['mid'];
        $type = $this->param('type');
        if (!empty($type)) $where['mi.type'] = intval($type);
        $loglist = MemberIncomelog::systemPage($where);
        return $this->port(1, '收益记录', ['loglist' => $loglist]);

    }

    /**
     * 资产出售
     */
    public function assetSale() {
        $conf = Config::get('payconfig');
        $userinfo = $this->userinfo;
        $type = intval($this->param('type'));//1-推荐收益,2-团队收益,3-收益转存
        $asset = floatval($this->param('asset'));
        $pwd2 = $this->param('pwd2');

        if (!$type || $type > 3) return $this->port(0, '请选择出售类型');
        if (!$asset || $asset <= 0) return $this->port(0, '请输入正确资产数字');

        $logcount = MemberAssetsalelog::getLogCount(['mid' => $userinfo['mid'], 'type' => $type]);
        if($type == 1){
            if ($conf['recommendIncome_limit'] && $conf['recommendIncome_limit'] <= $logcount) {
                return $this->port(0, '推荐收益每天只能出售'.$conf['recommendIncome_limit'].'次');
            }
            if ($conf['minrecommendIncome'] && $conf['maxrecommendIncome'] && ($asset < $conf['minrecommendIncome'] || $asset > $conf['maxrecommendIncome'])) {
                return $this->port(0, '推荐收益出售区间'.$conf['minrecommendIncome'].'~'.$conf['maxrecommendIncome']);
            }
            if ($userinfo['recommend_income'] < $asset) return $this->port(0, '推荐收益不足');

        }elseif($type == 2){
            if ($conf['teamIncome_limit'] && $conf['teamIncome_limit'] <= $logcount) {
                return $this->port(0, '团队收益每天只能出售'.$conf['teamIncome_limit'].'次');
            }
            if ($conf['minteamIncome'] && $conf['maxteamIncome'] && ($asset < $conf['minteamIncome'] || $asset > $conf['maxteamIncome'])) {
                return $this->port(0, '团队收益出售区间'.$conf['minteamIncome'].'~'.$conf['maxteamIncome']);
            }
            if ($userinfo['team_income'] < $asset) return $this->port(0, '团队收益不足');

        }else{
            if ($conf['incomeTransferred_limit'] && $conf['incomeTransferred_limit'] <= $logcount) {
                return $this->port(0, '收益转存每天只能出售'.$conf['incomeTransferred_limit'].'次');
            }
            if ($conf['minincomeTransferred'] && $conf['maxincomeTransferred'] && ($asset < $conf['minincomeTransferred'] || $asset > $conf['maxincomeTransferred'])) {
                return $this->port(0, '收益转存出售区间'.$conf['minincomeTransferred'].'~'.$conf['maxincomeTransferred']);
            }
            if ($userinfo['income_transferred'] < $asset) return $this->port(0, '收益转存不足');
        }

        if (!$pwd2) return $this->port(0, '二级密码不能为空');
        $password = md5($pwd2 . $userinfo['salt']);
        if (!password_verify($password, $userinfo['pwd2'])) {
            return $this->port(0, '二级密码输入错误!');
        }
        $res = Member::assetSale($type, $asset, $userinfo['mid']);
        if ($res) {
            return $this->port(1, '资产出售成功，区块鱼生成中...');
        }
        return $this->port(0, '资产出售失败!');
    }

    /**
     * 邀请好友
     */
    public function inviteFriends() {
        if(!$this->userinfo['is_promoter']){
            if(!$this->userinfo['is_idverifly']){
                return $this->port(0, '您还未实名认证！');
            }
            if(!$this->userinfo['is_activation']){
                return $this->port(0, '您还未激活账户！');
            }
        }
        $qrcode = createQrcode($this->userinfo['mid']);
        return $this->port(1, '邀请好友', ['qrcode' => $qrcode]);
    }

    /**
     * 线上充值
     */
    public function recharge() {
        $conf = Config::get('payconfig');
        $amountlist = explode(',', $conf['recharge_amount']);
        $rechargecode = RechargeCode::randCode();
        return $this->port(1, '线上充值', ['amountlist' => $amountlist, 'rechargecode' => $rechargecode]);
    }

    /**
     * 提交充值
     */
    public function rechargeSubmit() {

        if(!$this->userinfo['is_idverifly']){
            return $this->port(0, '您还未实名认证！');
        }

        $rechargeTime = isRechargeTime();
        if (!$rechargeTime) return $this->port(0, '不在充值时间内!');

        $integral = $this->param('integral');
        if (!$integral) return $this->port(0, '请选择充值数量!');
        $module = 'port';
        $use = 'recharge_voucher';
        $imgres = vae_upload($module, $use);
        if ($imgres['code'] != 1) {
            return $this->port(0, '上传付款凭证失败');
        }
        $payment_voucher = $imgres['data'];
        //是否开启自动审核
        $recharge_audit = $this->confinfo['recharge_audit'];
        $recharge_audit ? $status = 1 : $status = 0;
        //折扣
        $recharge_discount = $this->confinfo['recharge_discount'];
        $min_recharge = $this->confinfo['min_recharge'];
        $realintegral = $integral;
        if ($recharge_discount && $integral >= $min_recharge) {
            $realintegral = $integral * ($recharge_discount / 10);
        }
        $param = array(
            'mid'             => $this->userinfo['mid'],
            'integral'        => $integral,
            'realintegral'    => $realintegral,
            'discount'        => $recharge_discount,
            'payment_voucher' => $payment_voucher,
            'createtime'      => time(),
            'status'          => $status
        );

        $res = MemberRechargelog::insertlog($param);
        if ($res) {
            //自动审核
            if ($recharge_audit){
                Member::changeIntegral(9, $integral, $this->userinfo['mid']);
                //激活账户
                if (!$this->userinfo['is_activation']) {
                    $member = Member::getMemberInfo(['mid' => $this->userinfo['mid']]);
                    $activation_integral = $this->confinfo['activation_integral'];
                    if ($member['integral'] >= $activation_integral) {
                        Member::updateMember(['mid' => $this->userinfo['mid'], 'is_promoter' => 1, 'is_activation' => 1]);
                    }
                }
                
            }
            return $this->port(1, '充值提交成功');
        } else {
            return $this->port(0, '充值提交失败');
        }
    }

    public function test() {
        //$res = Member::changeIntegral(2, 20, 1);
        $data = array(
            'mid'             => 1,
            'integral'        => 500,
            'realintegral'    => 400,
            'discount'        => 8,
            'payment_voucher' => '/upload/admin/thumb/84/809e5ba4358ee9a16ff406fd92b8fef5e6d702.png',
            'createtime'      => time(),
            'status'          => 0

        );
        $res = MemberRechargelog::insertlog($data);
        print_r($res);
        exit;
    }


}