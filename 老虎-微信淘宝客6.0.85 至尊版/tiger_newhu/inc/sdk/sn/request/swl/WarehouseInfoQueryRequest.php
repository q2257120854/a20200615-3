<?php
/**
 * 苏宁开放平台接口 - 批量查询仓库信息
 *
 * @author suning
 * @date   2015-6-24
 */
class WarehouseInfoQueryRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.swl.warehouseinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryWarehouseInfo";
	}
	
}

?>