<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\loading\osp\service;

class HtPreLoading3PcRequest {
	
	static $_TSPEC;
	public $operateType = null;
	public $operateTime = null;
	public $calledDomain = null;
	public $requestTime = null;
	public $loadingId = null;
	public $warehouseCode = null;
	public $shipperCode = null;
	public $carLicense = null;
	public $loadingCount = null;
	public $pageIndex = null;
	public $items = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'operateType'
			),
			2 => array(
			'var' => 'operateTime'
			),
			3 => array(
			'var' => 'calledDomain'
			),
			4 => array(
			'var' => 'requestTime'
			),
			5 => array(
			'var' => 'loadingId'
			),
			6 => array(
			'var' => 'warehouseCode'
			),
			7 => array(
			'var' => 'shipperCode'
			),
			8 => array(
			'var' => 'carLicense'
			),
			9 => array(
			'var' => 'loadingCount'
			),
			10 => array(
			'var' => 'pageIndex'
			),
			11 => array(
			'var' => 'items'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['operateType'])){
				
				$this->operateType = $vals['operateType'];
			}
			
			
			if (isset($vals['operateTime'])){
				
				$this->operateTime = $vals['operateTime'];
			}
			
			
			if (isset($vals['calledDomain'])){
				
				$this->calledDomain = $vals['calledDomain'];
			}
			
			
			if (isset($vals['requestTime'])){
				
				$this->requestTime = $vals['requestTime'];
			}
			
			
			if (isset($vals['loadingId'])){
				
				$this->loadingId = $vals['loadingId'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['shipperCode'])){
				
				$this->shipperCode = $vals['shipperCode'];
			}
			
			
			if (isset($vals['carLicense'])){
				
				$this->carLicense = $vals['carLicense'];
			}
			
			
			if (isset($vals['loadingCount'])){
				
				$this->loadingCount = $vals['loadingCount'];
			}
			
			
			if (isset($vals['pageIndex'])){
				
				$this->pageIndex = $vals['pageIndex'];
			}
			
			
			if (isset($vals['items'])){
				
				$this->items = $vals['items'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HtPreLoading3PcRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("operateType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operateType); 
				
			}
			
			
			
			
			if ("operateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->operateTime); 
				
			}
			
			
			
			
			if ("calledDomain" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->calledDomain);
				
			}
			
			
			
			
			if ("requestTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->requestTime); 
				
			}
			
			
			
			
			if ("loadingId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->loadingId);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("shipperCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipperCode);
				
			}
			
			
			
			
			if ("carLicense" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carLicense);
				
			}
			
			
			
			
			if ("loadingCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->loadingCount); 
				
			}
			
			
			
			
			if ("pageIndex" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageIndex); 
				
			}
			
			
			
			
			if ("items" == $schemeField){
				
				$needSkip = false;
				
				$this->items = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\haitao\loading\osp\service\HtPreLoading3PcRequestItem();
						$elem0->read($input);
						
						$this->items[$_size0++] = $elem0;
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
		
		if($this->operateType !== null) {
			
			$xfer += $output->writeFieldBegin('operateType');
			$xfer += $output->writeI32($this->operateType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateTime !== null) {
			
			$xfer += $output->writeFieldBegin('operateTime');
			$xfer += $output->writeI64($this->operateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->calledDomain !== null) {
			
			$xfer += $output->writeFieldBegin('calledDomain');
			$xfer += $output->writeString($this->calledDomain);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestTime !== null) {
			
			$xfer += $output->writeFieldBegin('requestTime');
			$xfer += $output->writeI64($this->requestTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->loadingId !== null) {
			
			$xfer += $output->writeFieldBegin('loadingId');
			$xfer += $output->writeString($this->loadingId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipperCode !== null) {
			
			$xfer += $output->writeFieldBegin('shipperCode');
			$xfer += $output->writeString($this->shipperCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carLicense !== null) {
			
			$xfer += $output->writeFieldBegin('carLicense');
			$xfer += $output->writeString($this->carLicense);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->loadingCount !== null) {
			
			$xfer += $output->writeFieldBegin('loadingCount');
			$xfer += $output->writeI32($this->loadingCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageIndex !== null) {
			
			$xfer += $output->writeFieldBegin('pageIndex');
			$xfer += $output->writeI32($this->pageIndex);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->items !== null) {
			
			$xfer += $output->writeFieldBegin('items');
			
			if (!is_array($this->items)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->items as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
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