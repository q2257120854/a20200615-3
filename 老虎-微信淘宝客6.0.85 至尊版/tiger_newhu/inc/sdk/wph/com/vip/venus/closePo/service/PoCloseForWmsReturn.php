<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\closePo\service;

class PoCloseForWmsReturn {
	
	static $_TSPEC;
	public $po = null;
	public $saleArea = null;
	public $closeStatus = null;
	public $operatorJobnumber = null;
	public $operatorName = null;
	public $updateTime = null;
	public $maxId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po'
			),
			2 => array(
			'var' => 'saleArea'
			),
			3 => array(
			'var' => 'closeStatus'
			),
			4 => array(
			'var' => 'operatorJobnumber'
			),
			5 => array(
			'var' => 'operatorName'
			),
			6 => array(
			'var' => 'updateTime'
			),
			7 => array(
			'var' => 'maxId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['saleArea'])){
				
				$this->saleArea = $vals['saleArea'];
			}
			
			
			if (isset($vals['closeStatus'])){
				
				$this->closeStatus = $vals['closeStatus'];
			}
			
			
			if (isset($vals['operatorJobnumber'])){
				
				$this->operatorJobnumber = $vals['operatorJobnumber'];
			}
			
			
			if (isset($vals['operatorName'])){
				
				$this->operatorName = $vals['operatorName'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['maxId'])){
				
				$this->maxId = $vals['maxId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoCloseForWmsReturn';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("saleArea" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleArea);
				
			}
			
			
			
			
			if ("closeStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->closeStatus); 
				
			}
			
			
			
			
			if ("operatorJobnumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operatorJobnumber);
				
			}
			
			
			
			
			if ("operatorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operatorName);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updateTime);
				
			}
			
			
			
			
			if ("maxId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->maxId); 
				
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
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleArea !== null) {
			
			$xfer += $output->writeFieldBegin('saleArea');
			$xfer += $output->writeString($this->saleArea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('closeStatus');
		$xfer += $output->writeI32($this->closeStatus);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->operatorJobnumber !== null) {
			
			$xfer += $output->writeFieldBegin('operatorJobnumber');
			$xfer += $output->writeString($this->operatorJobnumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operatorName !== null) {
			
			$xfer += $output->writeFieldBegin('operatorName');
			$xfer += $output->writeString($this->operatorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeString($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->maxId !== null) {
			
			$xfer += $output->writeFieldBegin('maxId');
			$xfer += $output->writeI64($this->maxId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>