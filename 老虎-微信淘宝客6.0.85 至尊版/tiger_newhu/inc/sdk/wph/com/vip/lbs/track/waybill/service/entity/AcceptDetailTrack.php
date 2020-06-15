<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\track\waybill\service\entity;

class AcceptDetailTrack {
	
	static $_TSPEC;
	public $shipperCode = null;
	public $shipperName = null;
	public $shipperTel = null;
	public $logisticNum = null;
	public $orderSn = null;
	public $trackList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shipperCode'
			),
			2 => array(
			'var' => 'shipperName'
			),
			3 => array(
			'var' => 'shipperTel'
			),
			4 => array(
			'var' => 'logisticNum'
			),
			5 => array(
			'var' => 'orderSn'
			),
			6 => array(
			'var' => 'trackList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shipperCode'])){
				
				$this->shipperCode = $vals['shipperCode'];
			}
			
			
			if (isset($vals['shipperName'])){
				
				$this->shipperName = $vals['shipperName'];
			}
			
			
			if (isset($vals['shipperTel'])){
				
				$this->shipperTel = $vals['shipperTel'];
			}
			
			
			if (isset($vals['logisticNum'])){
				
				$this->logisticNum = $vals['logisticNum'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['trackList'])){
				
				$this->trackList = $vals['trackList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AcceptDetailTrack';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("shipperCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipperCode);
				
			}
			
			
			
			
			if ("shipperName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipperName);
				
			}
			
			
			
			
			if ("shipperTel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipperTel);
				
			}
			
			
			
			
			if ("logisticNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logisticNum);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("trackList" == $schemeField){
				
				$needSkip = false;
				
				$this->trackList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\lbs\track\waybill\service\entity\DetailTracks();
						$elem0->read($input);
						
						$this->trackList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('shipperCode');
		$xfer += $output->writeString($this->shipperCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->shipperName !== null) {
			
			$xfer += $output->writeFieldBegin('shipperName');
			$xfer += $output->writeString($this->shipperName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipperTel !== null) {
			
			$xfer += $output->writeFieldBegin('shipperTel');
			$xfer += $output->writeString($this->shipperTel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('logisticNum');
		$xfer += $output->writeString($this->logisticNum);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trackList !== null) {
			
			$xfer += $output->writeFieldBegin('trackList');
			
			if (!is_array($this->trackList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->trackList as $iter0){
				
				
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