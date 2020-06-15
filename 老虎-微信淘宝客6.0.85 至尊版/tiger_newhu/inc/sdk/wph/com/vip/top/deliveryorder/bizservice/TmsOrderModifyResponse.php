<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\bizservice;

class TmsOrderModifyResponse {
	
	static $_TSPEC;
	public $respCode = null;
	public $respMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'respCode'
			),
			2 => array(
			'var' => 'respMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['respCode'])){
				
				$this->respCode = $vals['respCode'];
			}
			
			
			if (isset($vals['respMsg'])){
				
				$this->respMsg = $vals['respMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsOrderModifyResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("respCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->respCode);
				
			}
			
			
			
			
			if ("respMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->respMsg);
				
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
		
		if($this->respCode !== null) {
			
			$xfer += $output->writeFieldBegin('respCode');
			$xfer += $output->writeString($this->respCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->respMsg !== null) {
			
			$xfer += $output->writeFieldBegin('respMsg');
			$xfer += $output->writeString($this->respMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>