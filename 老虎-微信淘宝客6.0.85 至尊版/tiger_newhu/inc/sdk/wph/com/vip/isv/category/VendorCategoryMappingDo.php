<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\isv\category;

class VendorCategoryMappingDo {
	
	static $_TSPEC;
	public $id = null;
	public $vendorId = null;
	public $vendorCategoryTreeId = null;
	public $vendorCategoryTreeName = null;
	public $vendorCategoryPath = null;
	public $vendorCategoryName = null;
	public $vendorCategoryId = null;
	public $vipCategoryPath = null;
	public $vipCategoryPathId = null;
	public $vipCategoryName = null;
	public $vipCategoryId = null;
	public $status = null;
	public $similarPoint = null;
	public $createTime = null;
	public $updateTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'vendorId'
			),
			3 => array(
			'var' => 'vendorCategoryTreeId'
			),
			4 => array(
			'var' => 'vendorCategoryTreeName'
			),
			5 => array(
			'var' => 'vendorCategoryPath'
			),
			6 => array(
			'var' => 'vendorCategoryName'
			),
			7 => array(
			'var' => 'vendorCategoryId'
			),
			8 => array(
			'var' => 'vipCategoryPath'
			),
			9 => array(
			'var' => 'vipCategoryPathId'
			),
			10 => array(
			'var' => 'vipCategoryName'
			),
			11 => array(
			'var' => 'vipCategoryId'
			),
			12 => array(
			'var' => 'status'
			),
			13 => array(
			'var' => 'similarPoint'
			),
			14 => array(
			'var' => 'createTime'
			),
			15 => array(
			'var' => 'updateTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendorCategoryTreeId'])){
				
				$this->vendorCategoryTreeId = $vals['vendorCategoryTreeId'];
			}
			
			
			if (isset($vals['vendorCategoryTreeName'])){
				
				$this->vendorCategoryTreeName = $vals['vendorCategoryTreeName'];
			}
			
			
			if (isset($vals['vendorCategoryPath'])){
				
				$this->vendorCategoryPath = $vals['vendorCategoryPath'];
			}
			
			
			if (isset($vals['vendorCategoryName'])){
				
				$this->vendorCategoryName = $vals['vendorCategoryName'];
			}
			
			
			if (isset($vals['vendorCategoryId'])){
				
				$this->vendorCategoryId = $vals['vendorCategoryId'];
			}
			
			
			if (isset($vals['vipCategoryPath'])){
				
				$this->vipCategoryPath = $vals['vipCategoryPath'];
			}
			
			
			if (isset($vals['vipCategoryPathId'])){
				
				$this->vipCategoryPathId = $vals['vipCategoryPathId'];
			}
			
			
			if (isset($vals['vipCategoryName'])){
				
				$this->vipCategoryName = $vals['vipCategoryName'];
			}
			
			
			if (isset($vals['vipCategoryId'])){
				
				$this->vipCategoryId = $vals['vipCategoryId'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['similarPoint'])){
				
				$this->similarPoint = $vals['similarPoint'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorCategoryMappingDo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->id); 
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorId); 
				
			}
			
			
			
			
			if ("vendorCategoryTreeId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorCategoryTreeId); 
				
			}
			
			
			
			
			if ("vendorCategoryTreeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCategoryTreeName);
				
			}
			
			
			
			
			if ("vendorCategoryPath" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCategoryPath);
				
			}
			
			
			
			
			if ("vendorCategoryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCategoryName);
				
			}
			
			
			
			
			if ("vendorCategoryId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCategoryId);
				
			}
			
			
			
			
			if ("vipCategoryPath" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipCategoryPath);
				
			}
			
			
			
			
			if ("vipCategoryPathId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipCategoryPathId);
				
			}
			
			
			
			
			if ("vipCategoryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipCategoryName);
				
			}
			
			
			
			
			if ("vipCategoryId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vipCategoryId); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("similarPoint" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->similarPoint);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
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
			$xfer += $output->writeI32($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI32($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCategoryTreeId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCategoryTreeId');
			$xfer += $output->writeI32($this->vendorCategoryTreeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCategoryTreeName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCategoryTreeName');
			$xfer += $output->writeString($this->vendorCategoryTreeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCategoryPath !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCategoryPath');
			$xfer += $output->writeString($this->vendorCategoryPath);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCategoryName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCategoryName');
			$xfer += $output->writeString($this->vendorCategoryName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCategoryId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCategoryId');
			$xfer += $output->writeString($this->vendorCategoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipCategoryPath !== null) {
			
			$xfer += $output->writeFieldBegin('vipCategoryPath');
			$xfer += $output->writeString($this->vipCategoryPath);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipCategoryPathId !== null) {
			
			$xfer += $output->writeFieldBegin('vipCategoryPathId');
			$xfer += $output->writeString($this->vipCategoryPathId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipCategoryName !== null) {
			
			$xfer += $output->writeFieldBegin('vipCategoryName');
			$xfer += $output->writeString($this->vipCategoryName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipCategoryId !== null) {
			
			$xfer += $output->writeFieldBegin('vipCategoryId');
			$xfer += $output->writeI32($this->vipCategoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->similarPoint !== null) {
			
			$xfer += $output->writeFieldBegin('similarPoint');
			$xfer += $output->writeDouble($this->similarPoint);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>