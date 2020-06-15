<?php

/**
 * 苏宁开放平台接口 - 商品API - 商品内容纠错申请（文化制品类）
 *
 * $pack   suning.custom.book.mainproduct.modify
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */
class BookMainproductModifyRequest extends SuningRequest {

	/**
	 * 苏宁系统中商品编码。苏宁商品编码与商家商品编码两者必填一个
	 */
	private $productCode;

	/**
	 * 商家商品编码。苏宁商品编码与商家商品编码两者必填一个。如果两者都填则以苏宁商品编码为准
	 */
	private $itemCode;

	/**
	 * 纠错节点
	 */
	private $correctParams;

	public function setProductCode($productCode) {
		$this -> productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}

	public function getProductCode() {
		return $this -> productCode;
	}

	public function setItemCode($itemCode) {
		$this -> itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}

	public function getItemCode() {
		return $this -> itemCode;
	}

	public function setCorrectParams($correctParams) {
		$this -> correctParams = $correctParams;
		
		$arr = array();
		foreach ($correctParams as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["correctParams"] = $arr;
	}

	public function getCorrectParams() {
		return $this -> correctParams;
	}

	public function getApiMethodName() {
		return 'suning.custom.book.mainproduct.modify';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check() {
	}
	
	public function getBizName(){
		return "mainProduct";
	}
}

/**
 * 纠错节点
 */
class CorrectParams {
	private $apiParams = array();

	/**
	 * 纠错的字段名（填写上述描述的可以纠错的7个字段名productName，saleCatalogCode，img1Url，img2Url，img3Url，img4Url，img5Url）
	 * 或者填参数代码parCode的值，例如G00000
	 */
	private $correctKey;

	/**
	 * 纠正后的值（参数值为多选的用英文逗号隔开）
	 */
	private $correctValue;

	/**
	 * 针对每个修改的值填写纠错原因
	 */
	private $correctReason;

	/**
	 * 针对每个修改的值填写说明图片url（url为苏宁图片上传接口返回的值）
	 */
	private $correctPic;

	public function setCorrectKey($correctKey) {
		$this -> correctKey = $correctKey;
		$this->apiParams["correctKey"] = $correctKey;
	}

	public function getCorrectKey() {
		return $this -> correctKey;
	}

	public function setCorrectValue($correctValue) {
		$this -> correctValue = $correctValue;
		$this->apiParams["correctValue"] = $correctValue;
	}

	public function getCorrectValue() {
		return $this -> correctValue;
	}

	public function setCorrectReason($correctReason) {
		$this -> correctReason = $correctReason;
		$this->apiParams["correctReason"] = $correctReason;
	}

	public function getCorrectReason() {
		return $this -> correctReason;
	}

	public function setCorrectPic($correctPic) {
		$this -> correctPic = $correctPic;
		$this->apiParams["correctPic"] = $correctPic;
	}

	public function getCorrectPic() {
		return $this -> correctPic;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
}
?>