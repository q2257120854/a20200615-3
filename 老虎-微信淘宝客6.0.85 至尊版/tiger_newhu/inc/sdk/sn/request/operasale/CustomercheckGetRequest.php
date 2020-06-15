<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-28
 */
class CustomercheckGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $psptFrontImage;
	
	/**
	 * 
	 */
	private $psptBackImage;
	
	/**
	 * 
	 */
	private $faceImage;
	
	public function getPsptFrontImage() {
		return $this->psptFrontImage;
	}
	
	public function setPsptFrontImage($psptFrontImage) {
		$this->psptFrontImage = $psptFrontImage;
		$this->apiParams["psptFrontImage"] = $psptFrontImage;
	}
	
	public function getPsptBackImage() {
		return $this->psptBackImage;
	}
	
	public function setPsptBackImage($psptBackImage) {
		$this->psptBackImage = $psptBackImage;
		$this->apiParams["psptBackImage"] = $psptBackImage;
	}
	
	public function getFaceImage() {
		return $this->faceImage;
	}
	
	public function setFaceImage($faceImage) {
		$this->faceImage = $faceImage;
		$this->apiParams["faceImage"] = $faceImage;
	}
	
	public function getApiMethodName(){
		return 'suning.operasale.customercheck.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->psptFrontImage, 'psptFrontImage');
		RequestCheckUtil::checkNotNull($this->psptBackImage, 'psptBackImage');
		RequestCheckUtil::checkNotNull($this->faceImage, 'faceImage');
	}
	
	public function getBizName(){
		return "getCustomercheck";
	}
	
}

?>