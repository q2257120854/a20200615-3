<?php
/**
 * 苏宁开放平台接口 - 商品删除接口
 *
 * @author suning
 * @date   2015-12-28
 */
class ItemDeleteRequest  extends SuningRequest{
	
	/**
	 * 商家商品编码(69码)。商家商品编码
	 */
	private $supplierCmCode;
	
	public function getSupplierCmCode() {
		return $this->supplierCmCode;
	}
	
	public function setSupplierCmCode($supplierCmCode) {
		$this->supplierCmCode = $supplierCmCode;
		$this->apiParams["supplierCmCode"] = $supplierCmCode;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.item.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCmCode, 'supplierCmCode');
	}
	
	public function getBizName(){
		return "deleteItem";
	}
	
}

?>