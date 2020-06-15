<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutWmsLadingBillIDLParam {
	
	static $_TSPEC;
	public $ladingBillNumber = null;
	public $shipmentCountry = null;
	public $arriveCountry = null;
	public $customsClearanceMode = null;
	public $totalWeight = null;
	public $subBillNumerList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ladingBillNumber'
			),
			2 => array(
			'var' => 'shipmentCountry'
			),
			3 => array(
			'var' => 'arriveCountry'
			),
			4 => array(
			'var' => 'customsClearanceMode'
			),
			5 => array(
			'var' => 'totalWeight'
			),
			6 => array(
			'var' => 'subBillNumerList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ladingBillNumber'])){
				
				$this->ladingBillNumber = $vals['ladingBillNumber'];
			}
			
			
			if (isset($vals['shipmentCountry'])){
				
				$this->shipmentCountry = $vals['shipmentCountry'];
			}
			
			
			if (isset($vals['arriveCountry'])){
				
				$this->arriveCountry = $vals['arriveCountry'];
			}
			
			
			if (isset($vals['customsClearanceMode'])){
				
				$this->customsClearanceMode = $vals['customsClearanceMode'];
			}
			
			
			if (isset($vals['totalWeight'])){
				
				$this->totalWeight = $vals['totalWeight'];
			}
			
			
			if (isset($vals['subBillNumerList'])){
				
				$this->subBillNumerList = $vals['subBillNumerList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutWmsLadingBillIDLParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ladingBillNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ladingBillNumber);
				
			}
			
			
			
			
			if ("shipmentCountry" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipmentCountry);
				
			}
			
			
			
			
			if ("arriveCountry" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arriveCountry);
				
			}
			
			
			
			
			if ("customsClearanceMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customsClearanceMode);
				
			}
			
			
			
			
			if ("totalWeight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalWeight);
				
			}
			
			
			
			
			if ("subBillNumerList" == $schemeField){
				
				$needSkip = false;
				
				$this->subBillNumerList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sce\vlg\osp\wms\service\SubLadingBillNumberVo();
						$elem0->read($input);
						
						$this->subBillNumerList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('ladingBillNumber');
		$xfer += $output->writeString($this->ladingBillNumber);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->shipmentCountry !== null) {
			
			$xfer += $output->writeFieldBegin('shipmentCountry');
			$xfer += $output->writeString($this->shipmentCountry);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arriveCountry !== null) {
			
			$xfer += $output->writeFieldBegin('arriveCountry');
			$xfer += $output->writeString($this->arriveCountry);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customsClearanceMode !== null) {
			
			$xfer += $output->writeFieldBegin('customsClearanceMode');
			$xfer += $output->writeString($this->customsClearanceMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalWeight !== null) {
			
			$xfer += $output->writeFieldBegin('totalWeight');
			$xfer += $output->writeDouble($this->totalWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subBillNumerList !== null) {
			
			$xfer += $output->writeFieldBegin('subBillNumerList');
			
			if (!is_array($this->subBillNumerList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->subBillNumerList as $iter0){
				
				
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