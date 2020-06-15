<?php
/**
 * 苏宁开放平台接口 - 商品内容纠错申请
 *
 * @author suning
 * @date   2014-7-18
 */
class MainproductModifyRequest  extends SuningRequest{
	
	/**
	 * 申请编码
	 */
	private $productCode;
	
	/**
	 * 循环节点名称
	 */
	private $correctParams;
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getCorrectParams() {
		return $this->correctParams;
	}
	
	public function setCorrectParams($correctParams) {
		$this->correctParams = $correctParams;
		$arr = array();
		foreach ($correctParams as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["correctParams"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.mainproduct.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
		RequestCheckUtil::checkNotNull($this->correctParams, 'correctParams');
	}
	
	public function getBizName(){
		return "errCorreCont";
	}
	
}

class CorrectParams {

	private $apiParams = array();
	
	private $productCode;
	
	private $itemCode;
	
	private $correctKey;
	
	private $correctValue;
	
	private $correctReason;
	
	private $correctPic;
	
	private $barpic;
	
	public function setBarpic($barpic) {
		$this -> barpic = $barpic;
		$this->apiParams["barpic"] = $barpic;
	}

	public function getBarpic() {
		return $this -> barpic;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}

	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getCorrectKey() {
		return $this->correctKey;
	}

	public function setCorrectKey($correctKey) {
		$this->correctKey = $correctKey;
		$this->apiParams["correctKey"] = $correctKey;
	}
	
	public function getCorrectValue() {
		return $this->correctValue;
	}

	public function setCorrectValue($correctValue) {
		$this->correctValue = $correctValue;
		$this->apiParams["correctValue"] = $correctValue;
	}
	
	public function getCorrectReason() {
		return $this->correctReason;
	}

	public function setCorrectReason($correctReason) {
		$this->correctReason = $correctReason;
		$this->apiParams["correctReason"] = $correctReason;
	}
	
	public function getCorrectPic() {
		return $this->correctPic;
	}

	public function setCorrectPic($correctPic) {
		$this->correctPic = $correctPic;
		$this->apiParams["correctPic"] = $correctPic;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>