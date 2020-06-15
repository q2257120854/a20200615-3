<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutInbShipmentInfo {
	
	static $_TSPEC;
	public $warehouseId = null;
	public $entInboundId = null;
	public $asnNo = null;
	public $batchNo = null;
	public $inTime = null;
	public $confirmationTime = null;
	public $custInboundno = null;
	public $icipInboundno = null;
	public $blNo = null;
	public $detail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouseId'
			),
			2 => array(
			'var' => 'entInboundId'
			),
			3 => array(
			'var' => 'asnNo'
			),
			4 => array(
			'var' => 'batchNo'
			),
			5 => array(
			'var' => 'inTime'
			),
			6 => array(
			'var' => 'confirmationTime'
			),
			7 => array(
			'var' => 'custInboundno'
			),
			8 => array(
			'var' => 'icipInboundno'
			),
			9 => array(
			'var' => 'blNo'
			),
			10 => array(
			'var' => 'detail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
			if (isset($vals['entInboundId'])){
				
				$this->entInboundId = $vals['entInboundId'];
			}
			
			
			if (isset($vals['asnNo'])){
				
				$this->asnNo = $vals['asnNo'];
			}
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
			}
			
			
			if (isset($vals['inTime'])){
				
				$this->inTime = $vals['inTime'];
			}
			
			
			if (isset($vals['confirmationTime'])){
				
				$this->confirmationTime = $vals['confirmationTime'];
			}
			
			
			if (isset($vals['custInboundno'])){
				
				$this->custInboundno = $vals['custInboundno'];
			}
			
			
			if (isset($vals['icipInboundno'])){
				
				$this->icipInboundno = $vals['icipInboundno'];
			}
			
			
			if (isset($vals['blNo'])){
				
				$this->blNo = $vals['blNo'];
			}
			
			
			if (isset($vals['detail'])){
				
				$this->detail = $vals['detail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutInbShipmentInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouseId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseId);
				
			}
			
			
			
			
			if ("entInboundId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->entInboundId);
				
			}
			
			
			
			
			if ("asnNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->asnNo);
				
			}
			
			
			
			
			if ("batchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNo);
				
			}
			
			
			
			
			if ("inTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->inTime);
				
			}
			
			
			
			
			if ("confirmationTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->confirmationTime);
				
			}
			
			
			
			
			if ("custInboundno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custInboundno);
				
			}
			
			
			
			
			if ("icipInboundno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->icipInboundno);
				
			}
			
			
			
			
			if ("blNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->blNo);
				
			}
			
			
			
			
			if ("detail" == $schemeField){
				
				$needSkip = false;
				
				$this->detail = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sce\vlg\osp\wms\service\OutInbShipmentDatailInfo();
						$elem1->read($input);
						
						$this->detail[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('warehouseId');
		$xfer += $output->writeString($this->warehouseId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('entInboundId');
		$xfer += $output->writeString($this->entInboundId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->asnNo !== null) {
			
			$xfer += $output->writeFieldBegin('asnNo');
			$xfer += $output->writeString($this->asnNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('batchNo');
		$xfer += $output->writeString($this->batchNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('inTime');
		$xfer += $output->writeString($this->inTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('confirmationTime');
		$xfer += $output->writeString($this->confirmationTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('custInboundno');
		$xfer += $output->writeString($this->custInboundno);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('icipInboundno');
		$xfer += $output->writeString($this->icipInboundno);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('blNo');
		$xfer += $output->writeString($this->blNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('detail');
		
		if (!is_array($this->detail)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->detail as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>