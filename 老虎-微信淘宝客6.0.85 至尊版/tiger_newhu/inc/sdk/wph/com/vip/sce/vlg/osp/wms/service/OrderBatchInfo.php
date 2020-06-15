<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OrderBatchInfo {
	
	static $_TSPEC;
	public $statusType = null;
	public $vendorId = null;
	public $batchNo = null;
	public $details = null;
	public $totalShipments = null;
	public $totalSku = null;
	public $pickZone = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'statusType'
			),
			2 => array(
			'var' => 'vendorId'
			),
			3 => array(
			'var' => 'batchNo'
			),
			4 => array(
			'var' => 'details'
			),
			5 => array(
			'var' => 'totalShipments'
			),
			6 => array(
			'var' => 'totalSku'
			),
			7 => array(
			'var' => 'pickZone'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['statusType'])){
				
				$this->statusType = $vals['statusType'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
			}
			
			
			if (isset($vals['details'])){
				
				$this->details = $vals['details'];
			}
			
			
			if (isset($vals['totalShipments'])){
				
				$this->totalShipments = $vals['totalShipments'];
			}
			
			
			if (isset($vals['totalSku'])){
				
				$this->totalSku = $vals['totalSku'];
			}
			
			
			if (isset($vals['pickZone'])){
				
				$this->pickZone = $vals['pickZone'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderBatchInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("statusType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusType);
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorId);
				
			}
			
			
			
			
			if ("batchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNo);
				
			}
			
			
			
			
			if ("details" == $schemeField){
				
				$needSkip = false;
				
				$this->details = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sce\vlg\osp\wms\service\OrderBatchDetailInfo();
						$elem1->read($input);
						
						$this->details[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("totalShipments" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->totalShipments);
				
			}
			
			
			
			
			if ("totalSku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->totalSku);
				
			}
			
			
			
			
			if ("pickZone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pickZone);
				
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
		
		$xfer += $output->writeFieldBegin('statusType');
		$xfer += $output->writeString($this->statusType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendorId');
		$xfer += $output->writeString($this->vendorId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batchNo');
		$xfer += $output->writeString($this->batchNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('details');
		
		if (!is_array($this->details)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->details as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->totalShipments !== null) {
			
			$xfer += $output->writeFieldBegin('totalShipments');
			$xfer += $output->writeString($this->totalShipments);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalSku !== null) {
			
			$xfer += $output->writeFieldBegin('totalSku');
			$xfer += $output->writeString($this->totalSku);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pickZone !== null) {
			
			$xfer += $output->writeFieldBegin('pickZone');
			$xfer += $output->writeString($this->pickZone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>