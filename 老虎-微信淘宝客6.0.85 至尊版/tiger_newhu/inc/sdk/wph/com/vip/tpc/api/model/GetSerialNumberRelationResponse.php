<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class GetSerialNumberRelationResponse {
	
	static $_TSPEC;
	public $header = null;
	public $shipperCode = null;
	public $vipSerialNo = null;
	public $carrierSerialNo = null;
	public $relationType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'shipperCode'
			),
			3 => array(
			'var' => 'vipSerialNo'
			),
			4 => array(
			'var' => 'carrierSerialNo'
			),
			5 => array(
			'var' => 'relationType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['shipperCode'])){
				
				$this->shipperCode = $vals['shipperCode'];
			}
			
			
			if (isset($vals['vipSerialNo'])){
				
				$this->vipSerialNo = $vals['vipSerialNo'];
			}
			
			
			if (isset($vals['carrierSerialNo'])){
				
				$this->carrierSerialNo = $vals['carrierSerialNo'];
			}
			
			
			if (isset($vals['relationType'])){
				
				$this->relationType = $vals['relationType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetSerialNumberRelationResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("header" == $schemeField){
				
				$needSkip = false;
				
				$this->header = new \com\vip\tpc\api\model\common\TpcResponseHeader();
				$this->header->read($input);
				
			}
			
			
			
			
			if ("shipperCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipperCode);
				
			}
			
			
			
			
			if ("vipSerialNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipSerialNo);
				
			}
			
			
			
			
			if ("carrierSerialNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierSerialNo);
				
			}
			
			
			
			
			if ("relationType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->relationType); 
				
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
		
		$xfer += $output->writeFieldBegin('header');
		
		if (!is_object($this->header)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->header->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->shipperCode !== null) {
			
			$xfer += $output->writeFieldBegin('shipperCode');
			$xfer += $output->writeString($this->shipperCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipSerialNo !== null) {
			
			$xfer += $output->writeFieldBegin('vipSerialNo');
			$xfer += $output->writeString($this->vipSerialNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierSerialNo !== null) {
			
			$xfer += $output->writeFieldBegin('carrierSerialNo');
			$xfer += $output->writeString($this->carrierSerialNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('relationType');
		$xfer += $output->writeI32($this->relationType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>