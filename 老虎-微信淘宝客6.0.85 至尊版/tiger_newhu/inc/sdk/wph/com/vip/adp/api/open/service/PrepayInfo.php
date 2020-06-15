<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class PrepayInfo {
	
	static $_TSPEC;
	public $isPrepay = null;
	public $prepayPrice = null;
	public $firstAmount = null;
	public $lastAmount = null;
	public $prepayFavAmount = null;
	public $deductionPrice = null;
	public $prepayDiscount = null;
	public $prepayFirstStartTime = null;
	public $prepayFirstEndTime = null;
	public $prepayLastStartTime = null;
	public $prepayLastEndTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'isPrepay'
			),
			2 => array(
			'var' => 'prepayPrice'
			),
			3 => array(
			'var' => 'firstAmount'
			),
			4 => array(
			'var' => 'lastAmount'
			),
			5 => array(
			'var' => 'prepayFavAmount'
			),
			6 => array(
			'var' => 'deductionPrice'
			),
			7 => array(
			'var' => 'prepayDiscount'
			),
			8 => array(
			'var' => 'prepayFirstStartTime'
			),
			9 => array(
			'var' => 'prepayFirstEndTime'
			),
			10 => array(
			'var' => 'prepayLastStartTime'
			),
			11 => array(
			'var' => 'prepayLastEndTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['isPrepay'])){
				
				$this->isPrepay = $vals['isPrepay'];
			}
			
			
			if (isset($vals['prepayPrice'])){
				
				$this->prepayPrice = $vals['prepayPrice'];
			}
			
			
			if (isset($vals['firstAmount'])){
				
				$this->firstAmount = $vals['firstAmount'];
			}
			
			
			if (isset($vals['lastAmount'])){
				
				$this->lastAmount = $vals['lastAmount'];
			}
			
			
			if (isset($vals['prepayFavAmount'])){
				
				$this->prepayFavAmount = $vals['prepayFavAmount'];
			}
			
			
			if (isset($vals['deductionPrice'])){
				
				$this->deductionPrice = $vals['deductionPrice'];
			}
			
			
			if (isset($vals['prepayDiscount'])){
				
				$this->prepayDiscount = $vals['prepayDiscount'];
			}
			
			
			if (isset($vals['prepayFirstStartTime'])){
				
				$this->prepayFirstStartTime = $vals['prepayFirstStartTime'];
			}
			
			
			if (isset($vals['prepayFirstEndTime'])){
				
				$this->prepayFirstEndTime = $vals['prepayFirstEndTime'];
			}
			
			
			if (isset($vals['prepayLastStartTime'])){
				
				$this->prepayLastStartTime = $vals['prepayLastStartTime'];
			}
			
			
			if (isset($vals['prepayLastEndTime'])){
				
				$this->prepayLastEndTime = $vals['prepayLastEndTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrepayInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("isPrepay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isPrepay); 
				
			}
			
			
			
			
			if ("prepayPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prepayPrice);
				
			}
			
			
			
			
			if ("firstAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->firstAmount);
				
			}
			
			
			
			
			if ("lastAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lastAmount);
				
			}
			
			
			
			
			if ("prepayFavAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prepayFavAmount);
				
			}
			
			
			
			
			if ("deductionPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deductionPrice);
				
			}
			
			
			
			
			if ("prepayDiscount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prepayDiscount);
				
			}
			
			
			
			
			if ("prepayFirstStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->prepayFirstStartTime); 
				
			}
			
			
			
			
			if ("prepayFirstEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->prepayFirstEndTime); 
				
			}
			
			
			
			
			if ("prepayLastStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->prepayLastStartTime); 
				
			}
			
			
			
			
			if ("prepayLastEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->prepayLastEndTime); 
				
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
		
		if($this->isPrepay !== null) {
			
			$xfer += $output->writeFieldBegin('isPrepay');
			$xfer += $output->writeI32($this->isPrepay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayPrice !== null) {
			
			$xfer += $output->writeFieldBegin('prepayPrice');
			$xfer += $output->writeString($this->prepayPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->firstAmount !== null) {
			
			$xfer += $output->writeFieldBegin('firstAmount');
			$xfer += $output->writeString($this->firstAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastAmount !== null) {
			
			$xfer += $output->writeFieldBegin('lastAmount');
			$xfer += $output->writeString($this->lastAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayFavAmount !== null) {
			
			$xfer += $output->writeFieldBegin('prepayFavAmount');
			$xfer += $output->writeString($this->prepayFavAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deductionPrice !== null) {
			
			$xfer += $output->writeFieldBegin('deductionPrice');
			$xfer += $output->writeString($this->deductionPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayDiscount !== null) {
			
			$xfer += $output->writeFieldBegin('prepayDiscount');
			$xfer += $output->writeString($this->prepayDiscount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayFirstStartTime !== null) {
			
			$xfer += $output->writeFieldBegin('prepayFirstStartTime');
			$xfer += $output->writeI64($this->prepayFirstStartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayFirstEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('prepayFirstEndTime');
			$xfer += $output->writeI64($this->prepayFirstEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayLastStartTime !== null) {
			
			$xfer += $output->writeFieldBegin('prepayLastStartTime');
			$xfer += $output->writeI64($this->prepayLastStartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayLastEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('prepayLastEndTime');
			$xfer += $output->writeI64($this->prepayLastEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>