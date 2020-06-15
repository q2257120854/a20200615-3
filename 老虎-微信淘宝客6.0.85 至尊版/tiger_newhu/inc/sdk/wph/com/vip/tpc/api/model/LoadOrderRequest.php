<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class LoadOrderRequest {
	
	static $_TSPEC;
	public $loadingId = null;
	public $warehouseCode = null;
	public $shipperCode = null;
	public $carLicense = null;
	public $loadingCount = null;
	public $operateType = null;
	public $pageIndex = null;
	public $operateTime = null;
	public $loadDetailSet = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'loadingId'
			),
			2 => array(
			'var' => 'warehouseCode'
			),
			3 => array(
			'var' => 'shipperCode'
			),
			4 => array(
			'var' => 'carLicense'
			),
			5 => array(
			'var' => 'loadingCount'
			),
			6 => array(
			'var' => 'operateType'
			),
			7 => array(
			'var' => 'pageIndex'
			),
			8 => array(
			'var' => 'operateTime'
			),
			9 => array(
			'var' => 'loadDetailSet'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
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
			
			
			if (isset($vals['operateType'])){
				
				$this->operateType = $vals['operateType'];
			}
			
			
			if (isset($vals['pageIndex'])){
				
				$this->pageIndex = $vals['pageIndex'];
			}
			
			
			if (isset($vals['operateTime'])){
				
				$this->operateTime = $vals['operateTime'];
			}
			
			
			if (isset($vals['loadDetailSet'])){
				
				$this->loadDetailSet = $vals['loadDetailSet'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'LoadOrderRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
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
			
			
			
			
			if ("operateType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operateType); 
				
			}
			
			
			
			
			if ("pageIndex" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageIndex); 
				
			}
			
			
			
			
			if ("operateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->operateTime); 
				
			}
			
			
			
			
			if ("loadDetailSet" == $schemeField){
				
				$needSkip = false;
				
				$this->loadDetailSet = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\tpc\api\model\LoadDetail();
						$elem0->read($input);
						
						$this->loadDetailSet[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
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
		
		$xfer += $output->writeFieldBegin('loadingId');
		$xfer += $output->writeString($this->loadingId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('shipperCode');
		$xfer += $output->writeString($this->shipperCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carLicense');
		$xfer += $output->writeString($this->carLicense);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('loadingCount');
		$xfer += $output->writeI32($this->loadingCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operateType');
		$xfer += $output->writeI32($this->operateType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageIndex');
		$xfer += $output->writeI32($this->pageIndex);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operateTime');
		$xfer += $output->writeI64($this->operateTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->loadDetailSet !== null) {
			
			$xfer += $output->writeFieldBegin('loadDetailSet');
			
			if (!is_array($this->loadDetailSet)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->loadDetailSet as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>