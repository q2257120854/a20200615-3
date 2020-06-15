<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\loading\osp\service;

class OutRLHandleResultDetail {
	
	static $_TSPEC;
	public $orderSn = null;
	public $handleResultCode = null;
	public $handleResultMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'handleResultCode'
			),
			3 => array(
			'var' => 'handleResultMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['handleResultCode'])){
				
				$this->handleResultCode = $vals['handleResultCode'];
			}
			
			
			if (isset($vals['handleResultMsg'])){
				
				$this->handleResultMsg = $vals['handleResultMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutRLHandleResultDetail';
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
			
			
			
			
			if ("handleResultCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->handleResultCode);
				
			}
			
			
			
			
			if ("handleResultMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->handleResultMsg);
				
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
		
		$xfer += $output->writeFieldBegin('handleResultCode');
		$xfer += $output->writeString($this->handleResultCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('handleResultMsg');
		$xfer += $output->writeString($this->handleResultMsg);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>