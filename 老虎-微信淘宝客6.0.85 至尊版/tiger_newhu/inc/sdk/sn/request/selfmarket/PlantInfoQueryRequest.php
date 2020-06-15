<?php
/**
 * 苏宁开放平台接口 - 获取地点信息
 *
 * @author suning
 * @date   2016-4-19
 */
class PlantInfoQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 地点类型。地点类型。1-中心仓；2-门店
	 */
	private $plantTypeCode;
	
	/**
	 * 城市名称。城市名称。
	 */
	private $cityName;
	
	/**
	 * 地点代码。地点代码。
	 */
	private $plantCode;
	
	
	
	public function getPlantTypeCode() {
		return $this->plantTypeCode;
	}
	
	public function setPlantTypeCode($plantTypeCode) {
		$this->plantTypeCode = $plantTypeCode;
		$this->apiParams["plantTypeCode"] = $plantTypeCode;
	}
	
	public function getCityName() {
		return $this->cityName;
	}
	
	public function setCityName($cityName) {
		$this->cityName = $cityName;
		$this->apiParams["cityName"] = $cityName;
	}
	
	public function getPlantCode() {
		return $this->plantCode;
	}
	
	public function setPlantCode($plantCode) {
		$this->plantCode = $plantCode;
		$this->apiParams["plantCode"] = $plantCode;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.plantinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->plantTypeCode, 'plantTypeCode');
	}
	
	public function getBizName(){
		return "queryPlantInfo";
	}
	
}

?>