<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class PickupQueryResult {
	
	static $_TSPEC;
	public $transportNo = null;
	public $orderSn = null;
	public $qty = null;
	public $joinTime = null;
	public $opName = null;
	public $pointName = null;
	public $customerName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'qty'
			),
			4 => array(
			'var' => 'joinTime'
			),
			5 => array(
			'var' => 'opName'
			),
			6 => array(
			'var' => 'pointName'
			),
			7 => array(
			'var' => 'customerName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['joinTime'])){
				
				$this->joinTime = $vals['joinTime'];
			}
			
			
			if (isset($vals['opName'])){
				
				$this->opName = $vals['opName'];
			}
			
			
			if (isset($vals['pointName'])){
				
				$this->pointName = $vals['pointName'];
			}
			
			
			if (isset($vals['customerName'])){
				
				$this->customerName = $vals['customerName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PickupQueryResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->qty); 
				
			}
			
			
			
			
			if ("joinTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->joinTime);
				
			}
			
			
			
			
			if ("opName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opName);
				
			}
			
			
			
			
			if ("pointName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pointName);
				
			}
			
			
			
			
			if ("customerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customerName);
				
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
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qty !== null) {
			
			$xfer += $output->writeFieldBegin('qty');
			$xfer += $output->writeI32($this->qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->joinTime !== null) {
			
			$xfer += $output->writeFieldBegin('joinTime');
			$xfer += $output->writeString($this->joinTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opName !== null) {
			
			$xfer += $output->writeFieldBegin('opName');
			$xfer += $output->writeString($this->opName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pointName !== null) {
			
			$xfer += $output->writeFieldBegin('pointName');
			$xfer += $output->writeString($this->pointName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerName !== null) {
			
			$xfer += $output->writeFieldBegin('customerName');
			$xfer += $output->writeString($this->customerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>