<?php
/**
 * 苏宁开放平台接口 - 获取库存报表
 *
 * @author suning
 * @date   2015-12-14
 */
class StockFormQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 地点代码
	 */
	private $placeCode;
	
	
	
	/**
	 * 苏宁品牌编码，9位数字
	 */
	private $brandCode;
	
	public function getPlaceCode() {
		return $this->placeCode;
	}
	
	public function setPlaceCode($placeCode) {
		$this->placeCode = $placeCode;
		$this->apiParams["placeCode"] = $placeCode;
	}
	
	
	
	public function getBrandCode() {
		return $this->brandCode;
	}
	
	public function setBrandCode($brandCode) {
		$this->brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.stockform.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->brandCode, 'brandCode');
	}
	
	public function getBizName(){
		return "queryStockForm";
	}
	
}

?>