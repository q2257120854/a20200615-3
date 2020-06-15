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
namespace app\common\model\member;
use think\Db;
use think\Model;
use think\Config;
use app\common\model\member\MemberLevel;
use app\common\model\member\MemberIntegrallog;
use app\common\model\member\MemberIncomelog;
use app\common\model\member\MemberAssetsalelog;
use app\common\model\product\Product;
use app\common\model\product\ProductCate;
class Member extends Model
{

    //列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::order('add_time desc')->where($where)->paginate($rows,false,['query'=>$where])->each(function($item){
            $item['levelname'] = MemberLevel::getLevelname($item['level']);
            $item['totalassets'] = Product::getTotalAssets($item['mid']);
            $item["add_time"] = date("Y-m-d H:i:s", $item["add_time"]);
            $item["online"] = isMemberOnline($item['account']);
        })?:[];
        return $list;
    }

    public static function getList($where = array())
    {
        $list = self::where($where)->select()->toArray()?:[];
        return $list;
    }

    public static function getMember($where)
    {   
        //$where['status'] = ['<>', -1];
    	$detail = self::where($where)->find();
        if(!empty($detail)){
            if(is_object($detail)) $detail = $detail->toArray();
            $detail['levelname'] = MemberLevel::getLevelname($detail['level']);
            $detail['totalassets'] = Product::getTotalAssets($detail['mid']);
            $detail["add_time"] = date("Y-m-d H:i:s", $detail["add_time"]);
            $detail["online"] = isMemberOnline($detail['account']);
        }else{
            $detail = [];
        }
    	return $detail;
    }

    public static function getMemberInfo($where)
    {
        return self::where($where)->find();
    }

    public static function updateMember($param)
    {
        return self::where(['mid'=>$param['mid']])->strict(false)->field(true)->update($param);
    }

    public static function insertMember($param)
    {
        $param['salt'] = vae_set_salt(20);
        $param['pwd'] = password_hash(md5($param['pwd'].$param['salt']), PASSWORD_DEFAULT);
        $param['pwd2'] = password_hash(md5($param['pwd2'].$param['salt']), PASSWORD_DEFAULT);

        $param['add_time'] = time();
        $param['add_ip'] = get_client_ip();
        return self::strict(false)->field(true)->insertGetId($param);
    }

    public static function deleteMember($mid)
    {
        self::where('mid',$mid)->delete();
    }
    
    //用户发送通知
    public static function sendNotice($mid, $product_cateid, $type)
    {
        $typelist = array(
            '1' => '预约成功',
            '2' => '捕捞成功',
            '3' => '出售成功',
            '4' => '尊敬的用户，您的订单状态有变化，请尽快登录系统进行处理，否则将自动转入非正常账户。',
            '5' => '转让成功',
            '6' => '尊敬的用户，您有宠物订单被抢购，请尽快登录系统进行处理，否则2小时后将自动交易'
        );
        $member = self::getMemberInfo(['mid' => $mid]);
        $cate = ProductCate::getCate($product_cateid);
        if(!$cate) return false;
        $content = $cate['catename'] . $typelist[$type];
        $res = sendSms($member['account'], $content, 1);
        return $res;

    }
    
    //获取在线人数
    public static function getOnlineCount()
    {
        $count = 0;
        $list = self::where(['status' =>['<>', -1]])->column('account');
        if(empty($list)) return $count;

        foreach ($list as $key => $item) {
            if(isMemberOnline($item)){
                $count += 1;
            }
        }
        return $count;
    }
    
    //登录更新信息
    public static function loginUpdateInfo($mid)
    {
        $data = array('mid' => $mid, 'last_time' => time(), 'last_ip' => get_client_ip());
        return self::updateMember($data);
    }

    public static function getCount($where = array())
    {
        $count = self::where($where)->count();
        return intval($count);
    }

    //获取直推下级数量
    public static function getDownCount($mid, $where = array()) {
        $query = self::where('parent_mid', $mid);
        if (!empty($where)) {
            $query = $query->where($where);
        }
        return intval($query->count());
    }
  
    //三代内下级数
    public static function getThreeDownNum($mid, $where = array()) {
        $agent_1_list = self::where('parent_mid', 'IN', $mid)->where($where)->column('mid');
        $a1 = $a2 = $a3 = 0;
        if (!empty($agent_1_list)) {
            $a1 = sizeof($agent_1_list);

            $agent_2_list = self::where('parent_mid', 'IN', $agent_1_list)->where($where)->column('mid');
            if (!empty($agent_2_list)) {
                $a2 = sizeof($agent_2_list);

                $agent_3_list = self::where('parent_mid', 'IN', $agent_2_list)->where($where)->column('mid');
                if (!empty($agent_2_list)) {
                    $a3 = sizeof($agent_3_list);
                }
            }
        }
        return ['a1' => $a1, 'a2' => $a2, 'a3' => $a3];
    }
    
    //总团队人数
    public static function getAllDownCount($mid, $where = array()) {
        $query = self::where('FIND_IN_SET(:mid,pids)', ['mid' => $mid]);
        if (!empty($where)) {
            $query = $query->where($where);
        }
        return intval($query->count());
    }

    //更新关系链
    public static function updateParent($mid, $parent_mid) {
        $user = self::get($mid);
        if (empty($user)) return;

        if ($mid == $parent_mid) exception('无法移动到你的子级!');

        if (!empty($parent_mid)) {
            $_parent = self::get($parent_mid);
            if (empty($_parent)) {
                exception('无效的上级!');
            }
        
            if (self::where('FIND_IN_SET(:mid,pids)', ['mid' => $mid])->where('mid', $parent_mid)->count()) {
                exception('无法移动到你的子级!');
            }
        }
        //层级
        $user->tier = empty($parent_mid) ? 1 : ($_parent['tier'] + 1);

        $user->parent_mid = $parent_mid;
        if (empty($parent_mid)) {
            $user->pids = '';
        } else {
            $list = [];
            while ($agent = self::where('mid', $parent_mid)->field('mid,parent_mid')->find()) {
                if (empty($agent)) break;
                if (in_array($agent['mid'], $list)) break;
                $list[] = $agent['mid'];
                if (empty($agent['parent_mid'])) break;
                $parent_mid = intval($agent['parent_mid']);
            }
            $user->pids = implode(',', $list);
        }

        if ($user->isUpdate(true)->save()) {
            $down_list = self::where('FIND_IN_SET(:mid,pids)', ['mid' => $mid])->select();
            foreach ($down_list as $down) {
                if ($down->parent_mid) {
                    $list = [];
                    $parent_mid = $down->parent_mid;
                    while ($agent = self::where('mid', $parent_mid)->field('mid,parent_mid')->find()) {
                        if (empty($agent)) break;
                        if (in_array($agent['mid'], $list)) break;
                        $list[] = $agent['mid'];
                        if (empty($agent['parent_mid'])) break;
                        $parent_mid = intval($agent['parent_mid']);
                    }
                    $down->pids = implode(',', $list);
                    $down->isUpdate(true)->save();
                }
            }
        }

    }
    
    //修复层级
    public function repairTier()
    {
        $list = self::getList();
        foreach ($list as &$item) {      
            if(empty($item['parent_mid'])){
                self::updateMember(['mid' => $item['mid'], 'tier' => 1]);
            }else{
                $parent = self::getMemberInfo(['mid' => $item['parent_mid']]);
                $tier = !empty($parent) ? ($parent['tier'] + 1) : 1;
                self::updateMember(['mid' => $item['mid'], 'tier' => $tier]);
            }
        }
        return true;
    }

    //获取团队信息
    public static function getTeam($where)
    {   
        $member_tier = self::where($where)->column('tier');
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $members = self::where('FIND_IN_SET(:mid,pids)', $where)->paginate($rows,false,['query'=>$where])?:[];
        foreach ($members as &$item) {
            $item['tier'] = $item['tier'] - $member_tier[0];
        }
        return $members;
    }

    //更改会员鱼饵
    public static function changeIntegral($type = 0, $integral = 0, $mid = 0, $other_mid = 0)
    {
        if($type == 0 || $type == 2 || $type == 5 || $type == 6 || $type == 7 || $type == 9){ //增加鱼饵
            self::where(['mid' => $mid])->setInc('integral', $integral);
            $data = array('mid' => $mid, 'type' => $type, 'integral' => $integral);
            MemberIntegrallog::insertLog($data);
         }elseif($type== 1 || $type == 8){//j减少鱼饵
            self::where(['mid' => $mid])->setDec('integral', $integral);
            $data = array('mid' => $mid, 'type' => $type, 'integral' => '-'.$integral);
            MemberIntegrallog::insertLog($data);
        }elseif($type== 3){

            self::where(['mid' => $mid])->setDec('integral', $integral);
            $data = array('mid' => $mid, 'other_mid' => $other_mid, 'type' => $type, 'integral' => '-'.$integral);
            MemberIntegrallog::insertLog($data);

            self::where(['mid' => $other_mid])->setInc('integral', $integral);
            $data1 = array('mid' => $other_mid, 'other_mid' => $mid, 'type' => 4, 'integral' => $integral);
            MemberIntegrallog::insertLog($data1);
        }
        return true;
    }
    //更改会员收益
    public static function changeIncome($type, $asset, $mid, $isincrease=0)
    {
        //type (1-推荐收益,2-团队收益,3-收益转存)
        $fileds = array('1' => 'recommend_income', '2' => 'team_income', '3' => 'income_transferred');
        if($isincrease){
            //增加
            self::where(['mid' => $mid])->setInc($fileds[$type], $asset);
        }else{
            //减少
            self::where(['mid' => $mid])->setDec($fileds[$type], $asset);
        }
        return true;

    }
    
    //检查用户升级
    public static function cheakUpgrade($mid)
    {
        $member = self::getMember(['mid' => $mid]);
        $upgradeLevel = MemberLevel::getUpgradeLevel($member['level']);
        if(!$upgradeLevel) return false;
        //有效客户条件
        $where = array('is_activation' => 1, 'status' => 1);

        //直推有效客户    
        if($upgradeLevel['down'] > 0){
            $mDown = self::getDownCount($member['mid'], $where);
            if($mDown < $upgradeLevel['down']) return false;
        }

        //三代有效客户
        if($upgradeLevel['threedown'] > 0){
            $downArr = self::getThreeDownNum($member['mid'], $where);
            $threeDown = $downArr['a1']  +  $downArr['a2'] + $downArr['a3'];
            if($threeDown < $upgradeLevel['threedown']) return false;
        }

        // 个人推广奖励   
        if($upgradeLevel['commission'] > 0){
            $commission = MemberIncomelog::getLogSum(['mid' => $member['mid'], 'type' => 1, 'status' => 1]);
            if($commission < $upgradeLevel['commission']) return false;
        }

        //团队人数
        if($upgradeLevel['team_size'] > 0){
            $teamSize = self::getAllDownCount($member['mid']);
            if($teamSize < $upgradeLevel['team_size']) return false;
        }
        //TODO
        self::updateMember(['mid' => $member['mid'], 'level' => $upgradeLevel['level']]);
        return true;

    }
    
    //出售资产
    public static function assetSale($type, $asset, $mid)
    {
        $res = Product::blockWrite($asset, $mid);
        if(!$res) return false;
        self::changeIncome($type, $asset, $mid);
        $data = array('mid' => $mid, 'type' => $type, 'asset' => $asset, 'createtime' =>time());
        MemberAssetsalelog::insertlog($data);
        return $res;

    }
}