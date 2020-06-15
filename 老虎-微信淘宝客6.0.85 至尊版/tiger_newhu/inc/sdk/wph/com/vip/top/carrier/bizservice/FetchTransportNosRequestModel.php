<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class FetchTransportNosRequestModel {
	
	static $_TSPEC;
	public $sysKey = null;
	public $vendorCode = null;
	public $thirdCustCode = null;
	public $size = null;
	public $orderSn = null;
	public $boxSeq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			3 => array(
			'var' => 'thirdCustCode'
			),
			4 => array(
			'var' => 'size'
			),
			5 => array(
			'var' => 'orderSn'
			),
			6 => array(
			'var' => 'boxSeq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['thirdCustCode'])){
				
				$this->thirdCustCode = $vals['thirdCustCode'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['boxSeq'])){
				
				$this->boxSeq = $vals['boxSeq'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FetchTransportNosRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sysKey" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sysKey);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("thirdCustCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->thirdCustCode);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->size); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("boxSeq" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->boxSeq);
				
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
		
		if($this->sysKey !== null) {
			
			$xfer += $output->writeFieldBegin('sysKey');
			$xfer += $output->writeString($this->sysKey);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdCustCode !== null) {
			
			$xfer += $output->writeFieldBegin('thirdCustCode');
			$xfer += $output->writeString($this->thirdCustCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('size');
		$xfer += $output->writeI32($this->size);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->boxSeq !== null) {
			
			$xfer += $output->writeFieldBegin('boxSeq');
			$xfer += $output->writeString($this->boxSeq);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>