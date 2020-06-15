<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\common\pojo\vo;

class InfErpMRetailItemVO {
	
	static $_TSPEC;
	public $id = null;
	public $mRetailId = null;
	public $mProductalias = null;
	public $pricelist = null;
	public $priceactual = null;
	public $discount = null;
	public $qty = null;
	public $salesrepId = null;
	public $salesrep = null;
	public $orgdocno = null;
	public $webposRetreasonId = null;
	public $webposRetreason = null;
	public $createTime = null;
	public $updateTime = null;
	public $isDeleted = null;
	public $salesrepNo = null;
	public $realQty = null;
	
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
			'var' => 'mProductalias'
			),
			4 => array(
			'var' => 'pricelist'
			),
			5 => array(
			'var' => 'priceactual'
			),
			6 => array(
			'var' => 'discount'
			),
			7 => array(
			'var' => 'qty'
			),
			8 => array(
			'var' => 'salesrepId'
			),
			9 => array(
			'var' => 'salesrep'
			),
			10 => array(
			'var' => 'orgdocno'
			),
			11 => array(
			'var' => 'webposRetreasonId'
			),
			12 => array(
			'var' => 'webposRetreason'
			),
			13 => array(
			'var' => 'createTime'
			),
			14 => array(
			'var' => 'updateTime'
			),
			15 => array(
			'var' => 'isDeleted'
			),
			16 => array(
			'var' => 'salesrepNo'
			),
			17 => array(
			'var' => 'realQty'
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
			
			
			if (isset($vals['mProductalias'])){
				
				$this->mProductalias = $vals['mProductalias'];
			}
			
			
			if (isset($vals['pricelist'])){
				
				$this->pricelist = $vals['pricelist'];
			}
			
			
			if (isset($vals['priceactual'])){
				
				$this->priceactual = $vals['priceactual'];
			}
			
			
			if (isset($vals['discount'])){
				
				$this->discount = $vals['discount'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['salesrepId'])){
				
				$this->salesrepId = $vals['salesrepId'];
			}
			
			
			if (isset($vals['salesrep'])){
				
				$this->salesrep = $vals['salesrep'];
			}
			
			
			if (isset($vals['orgdocno'])){
				
				$this->orgdocno = $vals['orgdocno'];
			}
			
			
			if (isset($vals['webposRetreasonId'])){
				
				$this->webposRetreasonId = $vals['webposRetreasonId'];
			}
			
			
			if (isset($vals['webposRetreason'])){
				
				$this->webposRetreason = $vals['webposRetreason'];
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
			
			
			if (isset($vals['salesrepNo'])){
				
				$this->salesrepNo = $vals['salesrepNo'];
			}
			
			
			if (isset($vals['realQty'])){
				
				$this->realQty = $vals['realQty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InfErpMRetailItemVO';
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
			
			
			
			
			if ("mProductalias" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mProductalias);
				
			}
			
			
			
			
			if ("pricelist" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pricelist);
				
			}
			
			
			
			
			if ("priceactual" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceactual);
				
			}
			
			
			
			
			if ("discount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discount);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->qty); 
				
			}
			
			
			
			
			if ("salesrepId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->salesrepId); 
				
			}
			
			
			
			
			if ("salesrep" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesrep);
				
			}
			
			
			
			
			if ("orgdocno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orgdocno);
				
			}
			
			
			
			
			if ("webposRetreasonId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->webposRetreasonId); 
				
			}
			
			
			
			
			if ("webposRetreason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->webposRetreason);
				
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
			
			
			
			
			if ("salesrepNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesrepNo);
				
			}
			
			
			
			
			if ("realQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->realQty); 
				
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
		
		
		if($this->mProductalias !== null) {
			
			$xfer += $output->writeFieldBegin('mProductalias');
			$xfer += $output->writeString($this->mProductalias);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pricelist !== null) {
			
			$xfer += $output->writeFieldBegin('pricelist');
			$xfer += $output->writeString($this->pricelist);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceactual !== null) {
			
			$xfer += $output->writeFieldBegin('priceactual');
			$xfer += $output->writeString($this->priceactual);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount !== null) {
			
			$xfer += $output->writeFieldBegin('discount');
			$xfer += $output->writeString($this->discount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qty !== null) {
			
			$xfer += $output->writeFieldBegin('qty');
			$xfer += $output->writeI32($this->qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesrepId !== null) {
			
			$xfer += $output->writeFieldBegin('salesrepId');
			$xfer += $output->writeI64($this->salesrepId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesrep !== null) {
			
			$xfer += $output->writeFieldBegin('salesrep');
			$xfer += $output->writeString($this->salesrep);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgdocno !== null) {
			
			$xfer += $output->writeFieldBegin('orgdocno');
			$xfer += $output->writeString($this->orgdocno);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->webposRetreasonId !== null) {
			
			$xfer += $output->writeFieldBegin('webposRetreasonId');
			$xfer += $output->writeI64($this->webposRetreasonId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->webposRetreason !== null) {
			
			$xfer += $output->writeFieldBegin('webposRetreason');
			$xfer += $output->writeString($this->webposRetreason);
			
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
		
		
		if($this->salesrepNo !== null) {
			
			$xfer += $output->writeFieldBegin('salesrepNo');
			$xfer += $output->writeString($this->salesrepNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->realQty !== null) {
			
			$xfer += $output->writeFieldBegin('realQty');
			$xfer += $output->writeI32($this->realQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>