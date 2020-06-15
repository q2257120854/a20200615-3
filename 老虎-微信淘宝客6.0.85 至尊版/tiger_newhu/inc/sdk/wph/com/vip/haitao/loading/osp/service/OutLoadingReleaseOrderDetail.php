<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\loading\osp\service;

class OutLoadingReleaseOrderDetail {
	
	static $_TSPEC;
	public $boxId = null;
	public $sizeSn = null;
	public $customsNo = null;
	public $name = null;
	public $amount = null;
	public $price = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'boxId'
			),
			2 => array(
			'var' => 'sizeSn'
			),
			3 => array(
			'var' => 'customsNo'
			),
			4 => array(
			'var' => 'name'
			),
			5 => array(
			'var' => 'amount'
			),
			6 => array(
			'var' => 'price'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['boxId'])){
				
				$this->boxId = $vals['boxId'];
			}
			
			
			if (isset($vals['sizeSn'])){
				
				$this->sizeSn = $vals['sizeSn'];
			}
			
			
			if (isset($vals['customsNo'])){
				
				$this->customsNo = $vals['customsNo'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutLoadingReleaseOrderDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("boxId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->boxId);
				
			}
			
			
			
			
			if ("sizeSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeSn);
				
			}
			
			
			
			
			if ("customsNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customsNo);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->price);
				
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
		
		$xfer += $output->writeFieldBegin('boxId');
		$xfer += $output->writeString($this->boxId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sizeSn');
		$xfer += $output->writeString($this->sizeSn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->customsNo !== null) {
			
			$xfer += $output->writeFieldBegin('customsNo');
			$xfer += $output->writeString($this->customsNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('name');
		$xfer += $output->writeString($this->name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeI32($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('price');
		$xfer += $output->writeDouble($this->price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>