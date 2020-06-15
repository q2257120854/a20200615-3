<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\common\pojo\vo;

class InfErpMRetailPayItemVO {
	
	static $_TSPEC;
	public $id = null;
	public $mRetailId = null;
	public $cCurrencyId = null;
	public $cCurrency = null;
	public $cPaywayId = null;
	public $cPayway = null;
	public $payamount = null;
	public $description = null;
	public $rfidno = null;
	public $createTime = null;
	public $updateTime = null;
	public $isDeleted = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'mRetailId'
			),
			3 => array(
			'var' => 'cCurrencyId'
			),
			4 => array(
			'var' => 'cCurrency'
			),
			5 => array(
			'var' => 'cPaywayId'
			),
			6 => array(
			'var' => 'cPayway'
			),
			7 => array(
			'var' => 'payamount'
			),
			8 => array(
			'var' => 'description'
			),
			9 => array(
			'var' => 'rfidno'
			),
			10 => array(
			'var' => 'createTime'
			),
			11 => array(
			'var' => 'updateTime'
			),
			12 => array(
			'var' => 'isDeleted'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['mRetailId'])){
				
				$this->mRetailId = $vals['mRetailId'];
			}
			
			
			if (isset($vals['cCurrencyId'])){
				
				$this->cCurrencyId = $vals['cCurrencyId'];
			}
			
			
			if (isset($vals['cCurrency'])){
				
				$this->cCurrency = $vals['cCurrency'];
			}
			
			
			if (isset($vals['cPaywayId'])){
				
				$this->cPaywayId = $vals['cPaywayId'];
			}
			
			
			if (isset($vals['cPayway'])){
				
				$this->cPayway = $vals['cPayway'];
			}
			
			
			if (isset($vals['payamount'])){
				
				$this->payamount = $vals['payamount'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['rfidno'])){
				
				$this->rfidno = $vals['rfidno'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InfErpMRetailPayItemVO';
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
			
			
			
			
			if ("mRetailId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->mRetailId); 
				
			}
			
			
			
			
			if ("cCurrencyId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cCurrencyId); 
				
			}
			
			
			
			
			if ("cCurrency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cCurrency);
				
			}
			
			
			
			
			if ("cPaywayId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cPaywayId); 
				
			}
			
			
			
			
			if ("cPayway" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cPayway);
				
			}
			
			
			
			
			if ("payamount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payamount);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("rfidno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rfidno);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isDeleted); 
				
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
		
		
		if($this->mRetailId !== null) {
			
			$xfer += $output->writeFieldBegin('mRetailId');
			$xfer += $output->writeI64($this->mRetailId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cCurrencyId !== null) {
			
			$xfer += $output->writeFieldBegin('cCurrencyId');
			$xfer += $output->writeI64($this->cCurrencyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cCurrency !== null) {
			
			$xfer += $output->writeFieldBegin('cCurrency');
			$xfer += $output->writeString($this->cCurrency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cPaywayId !== null) {
			
			$xfer += $output->writeFieldBegin('cPaywayId');
			$xfer += $output->writeI64($this->cPaywayId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cPayway !== null) {
			
			$xfer += $output->writeFieldBegin('cPayway');
			$xfer += $output->writeString($this->cPayway);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payamount !== null) {
			
			$xfer += $output->writeFieldBegin('payamount');
			$xfer += $output->writeString($this->payamount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rfidno !== null) {
			
			$xfer += $output->writeFieldBegin('rfidno');
			$xfer += $output->writeString($this->rfidno);
			
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
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeI32($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>