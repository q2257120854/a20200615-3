<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\ubc\facade\bankcard;

class OperationResult {
	
	static $_TSPEC;
	public $serialNumber = null;
	public $resultCode = null;
	public $resultMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'serialNumber'
			),
			2 => array(
			'var' => 'resultCode'
			),
			3 => array(
			'var' => 'resultMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['serialNumber'])){
				
				$this->serialNumber = $vals['serialNumber'];
			}
			
			
			if (isset($vals['resultCode'])){
				
				$this->resultCode = $vals['resultCode'];
			}
			
			
			if (isset($vals['resultMsg'])){
				
				$this->resultMsg = $vals['resultMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OperationResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("serialNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serialNumber);
				
			}
			
			
			
			
			if ("resultCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resultCode);
				
			}
			
			
			
			
			if ("resultMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resultMsg);
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->serialNumber !== null) {
			
			$xfer += $output->writeFieldBegin('serialNumber');
			$xfer += $output->writeString($this->serialNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resultCode !== null) {
			
			$xfer += $output->writeFieldBegin('resultCode');
			$xfer += $output->writeString($this->resultCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resultMsg !== null) {
			
			$xfer += $output->writeFieldBegin('resultMsg');
			$xfer += $output->writeString($this->resultMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>