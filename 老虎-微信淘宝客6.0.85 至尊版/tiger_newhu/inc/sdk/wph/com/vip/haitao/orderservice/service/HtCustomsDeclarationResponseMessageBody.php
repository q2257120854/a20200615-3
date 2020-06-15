<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\orderservice\service;

class HtCustomsDeclarationResponseMessageBody {
	
	static $_TSPEC;
	public $orderSn = null;
	public $status = null;
	public $bizResponseCode = null;
	public $bizResponseMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'status'
			),
			3 => array(
			'var' => 'bizResponseCode'
			),
			4 => array(
			'var' => 'bizResponseMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['bizResponseCode'])){
				
				$this->bizResponseCode = $vals['bizResponseCode'];
			}
			
			
			if (isset($vals['bizResponseMsg'])){
				
				$this->bizResponseMsg = $vals['bizResponseMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HtCustomsDeclarationResponseMessageBody';
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
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("bizResponseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizResponseCode);
				
			}
			
			
			
			
			if ("bizResponseMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizResponseMsg);
				
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
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeString($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bizResponseCode');
		$xfer += $output->writeString($this->bizResponseCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bizResponseMsg');
		$xfer += $output->writeString($this->bizResponseMsg);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>