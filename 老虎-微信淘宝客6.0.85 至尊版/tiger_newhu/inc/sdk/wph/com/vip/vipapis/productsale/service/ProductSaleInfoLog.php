<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipapis\productsale\service;

class ProductSaleInfoLog {
	
	static $_TSPEC;
	public $id = null;
	public $productSaleInfoId = null;
	public $operator = null;
	public $department = null;
	public $fieldName = null;
	public $oldValue = null;
	public $newValue = null;
	public $createTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'productSaleInfoId'
			),
			3 => array(
			'var' => 'operator'
			),
			4 => array(
			'var' => 'department'
			),
			5 => array(
			'var' => 'fieldName'
			),
			6 => array(
			'var' => 'oldValue'
			),
			7 => array(
			'var' => 'newValue'
			),
			8 => array(
			'var' => 'createTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['productSaleInfoId'])){
				
				$this->productSaleInfoId = $vals['productSaleInfoId'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['department'])){
				
				$this->department = $vals['department'];
			}
			
			
			if (isset($vals['fieldName'])){
				
				$this->fieldName = $vals['fieldName'];
			}
			
			
			if (isset($vals['oldValue'])){
				
				$this->oldValue = $vals['oldValue'];
			}
			
			
			if (isset($vals['newValue'])){
				
				$this->newValue = $vals['newValue'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProductSaleInfoLog';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("productSaleInfoId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productSaleInfoId);
				
			}
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
			}
			
			
			
			
			if ("department" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->department);
				
			}
			
			
			
			
			if ("fieldName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fieldName);
				
			}
			
			
			
			
			if ("oldValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oldValue);
				
			}
			
			
			
			
			if ("newValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newValue);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productSaleInfoId !== null) {
			
			$xfer += $output->writeFieldBegin('productSaleInfoId');
			$xfer += $output->writeString($this->productSaleInfoId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->department !== null) {
			
			$xfer += $output->writeFieldBegin('department');
			$xfer += $output->writeString($this->department);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fieldName !== null) {
			
			$xfer += $output->writeFieldBegin('fieldName');
			$xfer += $output->writeString($this->fieldName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oldValue !== null) {
			
			$xfer += $output->writeFieldBegin('oldValue');
			$xfer += $output->writeString($this->oldValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newValue !== null) {
			
			$xfer += $output->writeFieldBegin('newValue');
			$xfer += $output->writeString($this->newValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>