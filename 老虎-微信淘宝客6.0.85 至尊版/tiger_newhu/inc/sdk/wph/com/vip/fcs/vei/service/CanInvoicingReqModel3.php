<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class CanInvoicingReqModel3 {
	
	static $_TSPEC;
	public $warehouse = null;
	public $saleType = null;
	public $province = null;
	public $city = null;
	public $sizeIds = null;
	public $giftSizeIds = null;
	public $sourceSystem = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse'
			),
			2 => array(
			'var' => 'saleType'
			),
			3 => array(
			'var' => 'province'
			),
			4 => array(
			'var' => 'city'
			),
			5 => array(
			'var' => 'sizeIds'
			),
			6 => array(
			'var' => 'giftSizeIds'
			),
			7 => array(
			'var' => 'sourceSystem'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['saleType'])){
				
				$this->saleType = $vals['saleType'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['sizeIds'])){
				
				$this->sizeIds = $vals['sizeIds'];
			}
			
			
			if (isset($vals['giftSizeIds'])){
				
				$this->giftSizeIds = $vals['giftSizeIds'];
			}
			
			
			if (isset($vals['sourceSystem'])){
				
				$this->sourceSystem = $vals['sourceSystem'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CanInvoicingReqModel3';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("saleType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleType);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("sizeIds" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeIds);
				
			}
			
			
			
			
			if ("giftSizeIds" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->giftSizeIds);
				
			}
			
			
			
			
			if ("sourceSystem" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sourceSystem); 
				
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
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleType !== null) {
			
			$xfer += $output->writeFieldBegin('saleType');
			$xfer += $output->writeString($this->saleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province !== null) {
			
			$xfer += $output->writeFieldBegin('province');
			$xfer += $output->writeString($this->province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeIds !== null) {
			
			$xfer += $output->writeFieldBegin('sizeIds');
			$xfer += $output->writeString($this->sizeIds);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->giftSizeIds !== null) {
			
			$xfer += $output->writeFieldBegin('giftSizeIds');
			$xfer += $output->writeString($this->giftSizeIds);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceSystem !== null) {
			
			$xfer += $output->writeFieldBegin('sourceSystem');
			$xfer += $output->writeI32($this->sourceSystem);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>