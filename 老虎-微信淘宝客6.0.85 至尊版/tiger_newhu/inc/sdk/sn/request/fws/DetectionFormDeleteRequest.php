<?php
/**
 * 苏宁开放平台接口 - 删除检测单接口
 *
 * @author suning
 * @date   2015-6-8
 */
class DetectionFormDeleteRequest  extends SuningRequest{
	
	/**
	 * 检测单号。服务商自己填写的单号
	 */
	private $qtOrderCode;
	
	public function getQtOrderCode() {
		return $this->qtOrderCode;
	}
	
	public function setQtOrderCode($qtOrderCode) {
		$this->qtOrderCode = $qtOrderCode;
		$this->apiParams["qtOrderCode"] = $qtOrderCode;
	}
	
	public function getApiMethodName(){
		return 'suning.fws.detectionform.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->qtOrderCode, 'qtOrderCode');
	}
	
	public function getBizName(){
		return "deleteDetectionForm";
	}
	
}

?>