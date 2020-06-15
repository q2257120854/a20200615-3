<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsActGiftInfoModel {
	
	static $_TSPEC;
	public $giftId = null;
	public $giftNum = null;
	public $giftName = null;
	public $buyValue = null;
	public $giftDetail = null;
	public $price = null;
	public $merItemNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'giftId'
			),
			2 => array(
			'var' => 'giftNum'
			),
			3 => array(
			'var' => 'giftName'
			),
			4 => array(
			'var' => 'buyValue'
			),
			5 => array(
			'var' => 'giftDetail'
			),
			6 => array(
			'var' => 'price'
			),
			7 => array(
			'var' => 'merItemNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['giftId'])){
				
				$this->giftId = $vals['giftId'];
			}
			
			
			if (isset($vals['giftNum'])){
				
				$this->giftNum = $vals['giftNum'];
			}
			
			
			if (isset($vals['giftName'])){
				
				$this->giftName = $vals['giftName'];
			}
			
			
			if (isset($vals['buyValue'])){
				
				$this->buyValue = $vals['buyValue'];
			}
			
			
			if (isset($vals['giftDetail'])){
				
				$this->giftDetail = $vals['giftDetail'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['merItemNo'])){
				
				$this->merItemNo = $vals['merItemNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsActGiftInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("giftId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->giftId); 
				
			}
			
			
			
			
			if ("giftNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->giftNum); 
				
			}
			
			
			
			
			if ("giftName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->giftName);
				
			}
			
			
			
			
			if ("buyValue" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->buyValue); 
				
			}
			
			
			
			
			if ("giftDetail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->giftDetail);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->price);
				
			}
			
			
			
			
			if ("merItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->merItemNo); 
				
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
		
		$xfer += $output->writeFieldBegin('giftId');
		$xfer += $output->writeI32($this->giftId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('giftNum');
		$xfer += $output->writeI32($this->giftNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('giftName');
		$xfer += $output->writeString($this->giftName);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->buyValue !== null) {
			
			$xfer += $output->writeFieldBegin('buyValue');
			$xfer += $output->writeI32($this->buyValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->giftDetail !== null) {
			
			$xfer += $output->writeFieldBegin('giftDetail');
			$xfer += $output->writeString($this->giftDetail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeDouble($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merItemNo !== null) {
			
			$xfer += $output->writeFieldBegin('merItemNo');
			$xfer += $output->writeI64($this->merItemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>