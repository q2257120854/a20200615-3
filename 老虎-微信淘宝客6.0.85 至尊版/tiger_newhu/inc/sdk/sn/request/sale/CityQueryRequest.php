<?php
/**
 * 苏宁开放平台接口 - 销售准备API - 城市代码获取
 *
 * $pack   suning.custom.city.query
 * @author 14050890
 * @date   2014-06-03
 */
class CityQueryRequest extends SuningRequest {
	
	/**
	 * 国家代码
	 */
	private $nationCode;
	
	public function getNationCode() {
		return $this->nationCode;
	}
	
	public function setNationCode($nationCode) {
		$this->nationCode = $nationCode;
		$this->apiParams["nationCode"] = $nationCode;
	}
	
	/**
	 * 根据请求方式，生成相应请求报文
	 * @param type 请求方式(json或xml) 
	 */
	public function getApiParams() {
		return $this->apiParams;
	}
	
	
	
	/**
	 * 获取接口方法名称
	 */
	public function getApiMethodName() {
		return "suning.custom.city.query";
	}
	
	/**
	 * 数据校验
	 */
	public function check() {
		RequestCheckUtil::checkNotNull($this->nationCode, 'nationCode');
	}
	
	public function getBizName(){
		return "city";
	}
}
?>