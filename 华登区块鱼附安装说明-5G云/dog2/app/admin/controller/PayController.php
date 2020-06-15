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
namespace app\admin\controller;
use vae\controller\AdminCheckAuth;
use think\Config;
use app\common\model\member\PaymentType;
use app\common\model\member\PaymentMethod;
use app\common\model\pay\RechargeCode;
class PayController extends AdminCheckAuth
{
    //交易设置
    public function trade($value='')
    {
        $conf = Config::get('payconfig');
        $payConfig = [
            'nickname' => empty($conf['nickname']) ? '' : $conf['nickname'],
            'mobile' => empty($conf['mobile']) ? '' : $conf['mobile'],
            'activation_integral' => empty($conf['activation_integral']) ? '' : $conf['activation_integral'],
            'purchase_quantity' => empty($conf['purchase_quantity']) ? '' : $conf['purchase_quantity'],
            'income_transferred' => empty($conf['income_transferred']) ? '15000' : $conf['income_transferred'],
            'loadingtime' => empty($conf['loadingtime']) ? '100' : $conf['loadingtime'],
            'payment_limit_time' => empty($conf['payment_limit_time']) ? '' : $conf['payment_limit_time'],
            'auto_blockwrite' => empty($conf['auto_blockwrite']) ? '' : $conf['auto_blockwrite'],
            'recharge_amount' => empty($conf['recharge_amount']) ? '' : $conf['recharge_amount'],
            'recharge_audit' => empty($conf['recharge_audit']) ? '0' : $conf['recharge_audit'],
            'recharge_time' => empty($conf['recharge_time']) ? '' : $conf['recharge_time'],
            'cataudio' => empty($conf['cataudio']) ? '' : $conf['cataudio'],
            'is_idverifly' => empty($conf['is_idverifly']) ? '0' : $conf['is_idverifly'],
            'is_promoter' => empty($conf['is_promoter']) ? '0' : $conf['is_promoter'],
            'is_activation' => empty($conf['is_activation']) ? '0' : $conf['is_activation'],
            'commission1' => empty($conf['commission1']) ? '' : $conf['commission1'],
            'commission2' => empty($conf['commission2']) ? '' : $conf['commission2'],
            'commission3' => empty($conf['commission3']) ? '' : $conf['commission3'],
            'effective_level' => empty($conf['effective_level']) ? '0' : $conf['effective_level'],
            'reg_give' => empty($conf['reg_give']) ? '' : $conf['reg_give'],
            'min_recharge' => empty($conf['min_recharge']) ? '' : $conf['min_recharge'],
            'max_give' => empty($conf['max_give']) ? '' : $conf['max_give'],
            'min_reservation' => empty($conf['min_reservation']) ? '' : $conf['min_reservation'],
            'recommendIncome_limit' => empty($conf['recommendIncome_limit']) ? '0' : $conf['recommendIncome_limit'],
            'teamIncome_limit' => empty($conf['teamIncome_limit']) ? '0' : $conf['teamIncome_limit'],
            'incomeTransferred_limit' => empty($conf['incomeTransferred_limit']) ? '0' : $conf['incomeTransferred_limit'],

            'minrecommendIncome' => empty($conf['minrecommendIncome']) ? '0' : $conf['minrecommendIncome'],
            'maxrecommendIncome' => empty($conf['maxrecommendIncome']) ? '0' : $conf['maxrecommendIncome'],
            'minteamIncome' => empty($conf['minteamIncome']) ? '0' : $conf['minteamIncome'],
            'maxteamIncome' => empty($conf['maxteamIncome']) ? '0' : $conf['maxteamIncome'],
            'minincomeTransferred' => empty($conf['minincomeTransferred']) ? '0' : $conf['minincomeTransferred'],
            'maxincomeTransferred' => empty($conf['maxincomeTransferred']) ? '0' : $conf['maxincomeTransferred'],

        ];
        return view('',['payConfig'=>$payConfig]);
    }

    public function tradeConfSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $conf = "<?php return [
                'nickname' => '{$param["nickname"]}',
                'mobile' => '{$param["mobile"]}',
                'activation_integral' => '{$param["activation_integral"]}',
                'purchase_quantity' => '{$param["purchase_quantity"]}',
                'income_transferred' => '{$param["income_transferred"]}',
                'loadingtime' => '{$param["loadingtime"]}',
                'payment_limit_time' => '{$param["payment_limit_time"]}',
                'auto_blockwrite' => '{$param["auto_blockwrite"]}',
                'recharge_amount' => '{$param["recharge_amount"]}',
                'recharge_audit' => '{$param["recharge_audit"]}',
                'recharge_time' => '{$param["recharge_time"]}',
                'cataudio' => '{$param["cataudio"]}',
                'is_idverifly' => '{$param["is_idverifly"]}',
                'is_promoter' => '{$param["is_promoter"]}',
                'is_activation' => '{$param["is_activation"]}',
                'commission1' => '{$param["commission1"]}',
                'commission2' => '{$param["commission2"]}',
                'commission3' => '{$param["commission3"]}',
                'effective_level' => '{$param["effective_level"]}',
                'reg_give' => '{$param["reg_give"]}',
                'min_recharge' => '{$param["min_recharge"]}',
                'max_give' => '{$param["max_give"]}',
                'recommendIncome_limit' => '{$param["recommendIncome_limit"]}',
                'min_reservation' => '{$param["min_reservation"]}',
                'teamIncome_limit' => '{$param["teamIncome_limit"]}',
                'incomeTransferred_limit' => '{$param["incomeTransferred_limit"]}',

                'minrecommendIncome' => '{$param["minrecommendIncome"]}',
                'maxrecommendIncome' => '{$param["maxrecommendIncome"]}',
                'minteamIncome' => '{$param["minteamIncome"]}',
                'maxteamIncome' => '{$param["maxteamIncome"]}',
                'minincomeTransferred' => '{$param["minincomeTransferred"]}',
                'maxincomeTransferred' => '{$param["maxincomeTransferred"]}',
            ];";
            file_put_contents(VAE_ROOT . "data/conf/extra/payconfig.php",$conf);
            return vae_assign();

        }
    }

    //支付方式
    public function payment($value='')
    {
        return view();
    }

    // 获取支付方式的数据
    public function getPaymentList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['id|name'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $list = PaymentType::systemPage($where);
        return vae_assign_table(0,'',$list);
    }

    //添加支付方式
    public function addpayment()
    {
        return view();
    }

    //保存添加的支付方式
    public function addpaymentSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = PaymentType::insertType($param);
            if (!$result) {
                return vae_assign(0, '添加支付方式数据失败');
            } else {
                return vae_assign(1, '添加支付方式数据成功');
            }
        }
    }

    //编辑支付方式
    public function editpayment()
    {
        $data['detail'] = PaymentType::getType(['id' =>vae_get_param('id')]);
        return view('', $data);
    }

    //保存编辑的支付方式
    public function editpaymentSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = $this->validate($param, 'app\admin\validate\member\PaymentType.edit');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                PaymentType::updateType($param);
                return vae_assign(1, '修改支付方式数据成功');
            }
        }
    }

    public function deletePayment()
    {
        $id  = vae_get_param("id");
        if (PaymentType::deleteType($id) !== false) {
            return vae_assign(1,"成功放入回收站！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }

    //收款账户
    public function collectionAccount()
    {
        return view();
    }

    // 获取收款账户的数据
    public function getAccountList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['pm.id|pm.titleofaccount|pm.account'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $where['mid'] = 0;
        $list = PaymentMethod::systemPage($where);
        return vae_assign_table(0,'',$list);
    }

    //添加收款账户
    public function addaccount()
    {
        $data['typelist'] = PaymentType::getList(['status' => 1]);
        return view('', $data);
    }

    //保存添加的收款账户
    public function addaccountSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $param['mid'] = 0;
            $result = PaymentMethod::insertMethod($param);
            if (!$result) {
                return vae_assign(0, '添加收款账户数据失败');
            } else {
                return vae_assign(1, '添加收款账户数据成功');
            }
        }
    }

    //编辑收款账户
    public function editaccount()
    {
        $data['typelist'] = PaymentType::getList(['status' => 1]);
        $data['detail'] = PaymentMethod::getMethod(['pm.id' =>vae_get_param('id')]);

        return view('', $data);
    }

    //保存编辑的收款账户
    public function editaccountSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = PaymentMethod::updateMethod($param);
            if ($result) {
                return vae_assign(1, '修改收款账户数据成功');
            } else {
                return vae_assign(0, '修改收款账户数据失败');
            }
        }
    }
    
    //删除收款账户
    public function deleteaccount()
    {
        $id  = vae_get_param("id");
        if (PaymentMethod::deleteMethod($id) !== false) {
            return vae_assign(1,"成功放入回收站！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }
    
    //充值二维码
    public function rechargecode()
    {
        return view();
    }

    public function getCodeList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['id|name'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $list = RechargeCode::systemPage($where);
        return vae_assign_table(0,'',$list);
    }
    
    //添加充值二维码
    public function addrechargecode()
    {
        return view();
    }

    public function addCodeSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $param['mid'] = 0;
            $result = RechargeCode::insertCode($param);
            if (!$result) {
                return vae_assign(0, '添加二维码失败');
            } else {
                return vae_assign(1, '添加二维码成功');
            }
        }
    }
    
    //删除二维码
    public function deteleCode()
    {
        $id  = vae_get_param("id");
        if (RechargeCode::deleteCode($id) !== false) {
            return vae_assign(1,"成功放入回收站！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }

}
