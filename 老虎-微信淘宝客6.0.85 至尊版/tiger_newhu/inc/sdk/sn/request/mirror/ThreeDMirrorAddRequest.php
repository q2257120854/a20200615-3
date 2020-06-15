<?php
/**
 * 苏宁开放平台接口 - 3D试衣镜
 *
 * @author suning
 * @date   2016-5-27
 */
class ThreeDMirrorAddRequest  extends SuningRequest{
	
	/**
	 * 苏宁商品编码。苏宁商品编码
	 */
	private $productCode;
	
	/**
	 * 3D文件。包含两张3D图片以及bin文件，采用字节流的方式base64加密后传输
	 */
	private $zipContent;
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getZipContent() {
		return $this->zipContent;
	}
	
	public function setZipContent($zipContent) {
		$this->zipContent = $zipContent;
		$this->apiParams["zipContent"] = $zipContent;
	}
	
	public function getApiMethodName(){
		return 'suning.mirror.threedmirror.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
		RequestCheckUtil::checkNotNull($this->zipContent, 'zipContent');
	}
	
	public function getBizName(){
		return "addThreeDMirror";
	}
	
}

?>