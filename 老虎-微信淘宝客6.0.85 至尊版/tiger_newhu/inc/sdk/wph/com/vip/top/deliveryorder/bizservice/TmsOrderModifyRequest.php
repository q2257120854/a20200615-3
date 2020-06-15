<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\bizservice;

class TmsOrderModifyRequest {
	
	static $_TSPEC;
	public $orderSn = null;
	public $isJitX = null;
	public $thirdCarrierFlag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'isJitX'
			),
			3 => array(
			'var' => 'thirdCarrierFlag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['isJitX'])){
				
				$this->isJitX = $vals['isJitX'];
			}
			
			
			if (isset($vals['thirdCarrierFlag'])){
				
				$this->thirdCarrierFlag = $vals['thirdCarrierFlag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsOrderModifyRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("isJitX" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isJitX); 
				
			}
			
			
			
			
			if ("thirdCarrierFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->thirdCarrierFlag); 
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('isJitX');
		$xfer += $output->writeI32($this->isJitX);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->thirdCarrierFlag !== null) {
			
			$xfer += $output->writeFieldBegin('thirdCarrierFlag');
			$xfer += $output->writeI32($this->thirdCarrierFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>