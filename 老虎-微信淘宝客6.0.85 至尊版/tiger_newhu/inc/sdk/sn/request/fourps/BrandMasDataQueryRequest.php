<?php
/**
 * 苏宁开放平台接口 - 品牌主数据查询接口
 *
 * @author suning
 * @date   2016-2-23
 */
class BrandMasDataQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 品牌名称。苏宁品牌名称。可输入中文，根据输入的信息进行关键字模糊查询。
	 */
	private $brandName;
	
	
	
	public function getBrandName() {
		return $this->brandName;
	}
	
	public function setBrandName($brandName) {
		$this->brandName = $brandName;
		$this->apiParams["brandName"] = $brandName;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.fourps.brandmasdata.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->brandName, 'brandName');
	}
	
	public function getBizName(){
		return "queryBrandMasData";
	}
	
}

?>