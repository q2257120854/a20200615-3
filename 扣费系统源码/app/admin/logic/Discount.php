<?php

/*
 * 折扣逻辑层
 */
namespace app\admin\logic;
use think\Db;
use app\admin\model\Discount as DiscountModel;

class Discount extends AdminBase
{
	/*
	 * 保存折扣
	 */
	public function agencysave($data = [])
	{
	
		$validate_result = $this->validateDiscount->scene('add')->check($data);
        
       	if(!$validate_result){return [RESULT_ERROR,$this->validateDiscount->getError()];}
		
		//if($data['discount'] > 1){return [RESULT_ERROR,'折扣必须小于或等于1'];}
		$member = Db('member')->where(['id' => MEMBER_ID])->find();
//		if($member['id'] !== 1)
//		{
//			//如果代理等级为0 就将代理等级改为普通代理
//			if($member['rank']  == 0)
//			{
//				
//				Db('member')->where(['id' => $member['id']])->update(['rank' => 4]);
//			}
//			$member = Db('member')->where(['id' => MEMBER_ID])->find();
//			//查询该代理的折扣
//			$discount = DiscountModel::where(['rank_id' => $member['rank'],'user_id' => 1])->find();
//			if($discount['discount'] >= $data['discount'])
//			{
//				return [RESULT_ERROR,'你设置的折扣低于自身折扣' . $discount['discount'] . '折,容易导致亏损'];
//			}
//			
//		}
		
		
		
		$data['user_id'] = MEMBER_ID;
		$data['create_time'] = time();
		$discountModel = new DiscountModel();
		$empty = $discountModel->where(['rank_id' => $data['rank_id'],'user_id' => $data['user_id']])->find();
		if(!empty($empty))
		{
			$result = $discountModel->where('id',$empty['id'])->update(['discount' => $data['discount']]);
		}else{
			
			$result = $discountModel->allowField(true)->save($data);
		}
		
		return $result ? [RESULT_SUCCESS,'添加成功'] : [RESULT_ERROR,'添加失败,请重试'];
		
	}
	
	/*
	 * 折扣列表
	 */
	public function discountlist($where = [], $field = 'm.*,b.nickname', $order = '', $paginate = DB_LIST_ROWS)
	{
		$this->modelDiscount->alias('m');
		
		$join = [
                    [SYS_DB_PREFIX . 'member b', 'm.user_id = b.id', 'LEFT'],
                ];
        
        $where['m.' . DATA_STATUS_NAME] = ['neq', DATA_DELETE];
		$this->modelDiscount->join = $join;
		if(MEMBER_ID == 1)
		{
		  
		   $data = $this->modelDiscount->getList($where, $field, $order, $paginate, $join);
		}else{
			$where['user_id'] = MEMBER_ID;
			$data = $this->modelDiscount->getList($where, $field, $order, $paginate, $join);
		}
        
        return $data;
	}
	
	
	/*
	 * 折扣删除
	 */
	public function discountdel($where = [])
	{
		$result = DiscountModel::where($where)->delete();
		return $result ? [RESULT_SUCCESS,'删除成功'] : [RESULT_ERROR,'删除失败,请刷新重试'];
	}
	
	/*
	 * 折扣编辑
	 */
	public function getdiscount($where = [])
	{
		if(MEMBER_ID == 1)
		{
			$data = DiscountModel::where(['id' => $where['id']])->find();
		}else{
			$data = DiscountModel::where(['id' => $where['id'],'user_id' => MEMBER_ID])->find();
			if(empty($data))
			{
				return [RESULT_ERROR,'你无权操作该条记录'];
			}
		}
		
		return $data;
	}
	
	/*
	 * 折扣编辑保存 
	 */
	public function getdissave($data = [])
	{
		$validate_result = $this->validateDiscount->scene('add')->check($data);
        
       	if(!$validate_result){return [RESULT_ERROR,$this->validateDiscount->getError()];}
		
		if($data['discount'] < 100){return [RESULT_ERROR,'折扣必须大于或等于100'];}
//		$member = Db('member')->where(['id' => MEMBER_ID])->find();
//		if($member['id'] !== 1)
//		{
//			//如果代理等级为0 就将代理等级改为普通代理
//			if($member['rank']  == 0)
//			{
//				
//				Db('member')->where(['id' => $member['id']])->update(['rank' => 4]);
//			}
//			$member = Db('member')->where(['id' => MEMBER_ID])->find();
//			//查询该代理的折扣
//			$discount = DiscountModel::where(['rank_id' => $member['rank'],'user_id' => 1])->find();
//			if($discount['discount'] > $data['discount'])
//			{
//				return [RESULT_ERROR,'你设置的折扣低于自身折扣' . $discount['discount'] . '折,容易导致亏损'];
//			}
//			
//		}
		
		$result = DiscountModel::where(['id' => $data['id'],'rank_id' => $data['rank_id']])->update(['discount' => $data['discount']]);
		
		return $result ? [RESULT_SUCCESS,'修改成功',url('discountlist')] : [RESULT_ERROR,'修改失败,请刷新重试'];
	}
}
