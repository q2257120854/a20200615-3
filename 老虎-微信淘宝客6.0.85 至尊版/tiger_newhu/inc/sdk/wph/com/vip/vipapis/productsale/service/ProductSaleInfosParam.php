<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipapis\productsale\service;

class ProductSaleInfosParam {
	
	static $_TSPEC;
	public $globalIds = null;
	public $serialNos = null;
	public $vendorCodes = null;
	public $itemDescs = null;
	public $itemNos = null;
	public $startTime = null;
	public $endTime = null;
	public $auditStartTime = null;
	public $auditEndTime = null;
	public $auditStatus = null;
	public $page = null;
	public $limit = null;
	public $orderSns = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'globalIds'
			),
			2 => array(
			'var' => 'serialNos'
			),
			3 => array(
			'var' => 'vendorCodes'
			),
			4 => array(
			'var' => 'itemDescs'
			),
			5 => array(
			'var' => 'itemNos'
			),
			6 => array(
			'var' => 'startTime'
			),
			7 => array(
			'var' => 'endTime'
			),
			8 => array(
			'var' => 'auditStartTime'
			),
			9 => array(
			'var' => 'auditEndTime'
			),
			10 => array(
			'var' => 'auditStatus'
			),
			11 => array(
			'var' => 'page'
			),
			12 => array(
			'var' => 'limit'
			),
			13 => array(
			'var' => 'orderSns'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['globalIds'])){
				
				$this->globalIds = $vals['globalIds'];
			}
			
			
			if (isset($vals['serialNos'])){
				
				$this->serialNos = $vals['serialNos'];
			}
			
			
			if (isset($vals['vendorCodes'])){
				
				$this->vendorCodes = $vals['vendorCodes'];
			}
			
			
			if (isset($vals['itemDescs'])){
				
				$this->itemDescs = $vals['itemDescs'];
			}
			
			
			if (isset($vals['itemNos'])){
				
				$this->itemNos = $vals['itemNos'];
			}
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['auditStartTime'])){
				
				$this->auditStartTime = $vals['auditStartTime'];
			}
			
			
			if (isset($vals['auditEndTime'])){
				
				$this->auditEndTime = $vals['auditEndTime'];
			}
			
			
			if (isset($vals['auditStatus'])){
				
				$this->auditStatus = $vals['auditStatus'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['orderSns'])){
				
				$this->orderSns = $vals['orderSns'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProductSaleInfosParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("globalIds" == $schemeField){
				
				$needSkip = false;
				
				$this->globalIds = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI64($elem0); 
						
						$this->globalIds[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("serialNos" == $schemeField){
				
				$needSkip = false;
				
				$this->serialNos = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->serialNos[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("vendorCodes" == $schemeField){
				
				$needSkip = false;
				
				$this->vendorCodes = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->vendorCodes[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("itemDescs" == $schemeField){
				
				$needSkip = false;
				
				$this->itemDescs = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readString($elem3);
						
						$this->itemDescs[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("itemNos" == $schemeField){
				
				$needSkip = false;
				
				$this->itemNos = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						$input->readString($elem4);
						
						$this->itemNos[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("startTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startTime); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime); 
				
			}
			
			
			
			
			if ("auditStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->auditStartTime); 
				
			}
			
			
			
			
			if ("auditEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->auditEndTime); 
				
			}
			
			
			
			
			if ("auditStatus" == $schemeField){
				
				$needSkip = false;
				
				$this->auditStatus = array();
				$_size5 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						$input->readByte($elem5); 
						
						$this->auditStatus[$_size5++] = $elem5;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
			}
			
			
			
			
			if ("orderSns" == $schemeField){
				
				$needSkip = false;
				
				$this->orderSns = array();
				$_size6 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem6 = null;
						$input->readString($elem6);
						
						$this->orderSns[$_size6++] = $elem6;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->globalIds !== null) {
			
			$xfer += $output->writeFieldBegin('globalIds');
			
			if (!is_array($this->globalIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->globalIds as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serialNos !== null) {
			
			$xfer += $output->writeFieldBegin('serialNos');
			
			if (!is_array($this->serialNos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->serialNos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCodes !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCodes');
			
			if (!is_array($this->vendorCodes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->vendorCodes as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemDescs !== null) {
			
			$xfer += $output->writeFieldBegin('itemDescs');
			
			if (!is_array($this->itemDescs)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->itemDescs as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemNos !== null) {
			
			$xfer += $output->writeFieldBegin('itemNos');
			
			if (!is_array($this->itemNos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->itemNos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startTime !== null) {
			
			$xfer += $output->writeFieldBegin('startTime');
			$xfer += $output->writeI64($this->startTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditStartTime !== null) {
			
			$xfer += $output->writeFieldBegin('auditStartTime');
			$xfer += $output->writeI64($this->auditStartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('auditEndTime');
			$xfer += $output->writeI64($this->auditEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditStatus !== null) {
			
			$xfer += $output->writeFieldBegin('auditStatus');
			
			if (!is_array($this->auditStatus)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->auditStatus as $iter0){
				
				$xfer += $output->writeByte($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSns !== null) {
			
			$xfer += $output->writeFieldBegin('orderSns');
			
			if (!is_array($this->orderSns)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderSns as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>