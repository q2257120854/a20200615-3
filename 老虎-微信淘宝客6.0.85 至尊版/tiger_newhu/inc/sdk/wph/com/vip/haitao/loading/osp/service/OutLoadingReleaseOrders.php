<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\loading\osp\service;

class OutLoadingReleaseOrders {
	
	static $_TSPEC;
	public $orderSn = null;
	public $boxId = null;
	public $boxNum = null;
	public $oqcDate = null;
	public $height = null;
	public $volume = null;
	public $weight = null;
	public $width = null;
	public $weightUm = null;
	public $length = null;
	public $dimensioUm = null;
	public $volumeUm = null;
	public $userCode = null;
	public $userName = null;
	public $orderDetails = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'boxId'
			),
			3 => array(
			'var' => 'boxNum'
			),
			4 => array(
			'var' => 'oqcDate'
			),
			5 => array(
			'var' => 'height'
			),
			6 => array(
			'var' => 'volume'
			),
			7 => array(
			'var' => 'weight'
			),
			8 => array(
			'var' => 'width'
			),
			9 => array(
			'var' => 'weightUm'
			),
			10 => array(
			'var' => 'length'
			),
			11 => array(
			'var' => 'dimensioUm'
			),
			12 => array(
			'var' => 'volumeUm'
			),
			13 => array(
			'var' => 'userCode'
			),
			14 => array(
			'var' => 'userName'
			),
			15 => array(
			'var' => 'orderDetails'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['boxId'])){
				
				$this->boxId = $vals['boxId'];
			}
			
			
			if (isset($vals['boxNum'])){
				
				$this->boxNum = $vals['boxNum'];
			}
			
			
			if (isset($vals['oqcDate'])){
				
				$this->oqcDate = $vals['oqcDate'];
			}
			
			
			if (isset($vals['height'])){
				
				$this->height = $vals['height'];
			}
			
			
			if (isset($vals['volume'])){
				
				$this->volume = $vals['volume'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['width'])){
				
				$this->width = $vals['width'];
			}
			
			
			if (isset($vals['weightUm'])){
				
				$this->weightUm = $vals['weightUm'];
			}
			
			
			if (isset($vals['length'])){
				
				$this->length = $vals['length'];
			}
			
			
			if (isset($vals['dimensioUm'])){
				
				$this->dimensioUm = $vals['dimensioUm'];
			}
			
			
			if (isset($vals['volumeUm'])){
				
				$this->volumeUm = $vals['volumeUm'];
			}
			
			
			if (isset($vals['userCode'])){
				
				$this->userCode = $vals['userCode'];
			}
			
			
			if (isset($vals['userName'])){
				
				$this->userName = $vals['userName'];
			}
			
			
			if (isset($vals['orderDetails'])){
				
				$this->orderDetails = $vals['orderDetails'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutLoadingReleaseOrders';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("boxId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->boxId);
				
			}
			
			
			
			
			if ("boxNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->boxNum); 
				
			}
			
			
			
			
			if ("oqcDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oqcDate);
				
			}
			
			
			
			
			if ("height" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->height);
				
			}
			
			
			
			
			if ("volume" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->volume);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->weight);
				
			}
			
			
			
			
			if ("width" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->width);
				
			}
			
			
			
			
			if ("weightUm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->weightUm);
				
			}
			
			
			
			
			if ("length" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->length);
				
			}
			
			
			
			
			if ("dimensioUm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dimensioUm);
				
			}
			
			
			
			
			if ("volumeUm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->volumeUm);
				
			}
			
			
			
			
			if ("userCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userCode);
				
			}
			
			
			
			
			if ("userName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userName);
				
			}
			
			
			
			
			if ("orderDetails" == $schemeField){
				
				$needSkip = false;
				
				$this->orderDetails = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\haitao\loading\osp\service\OutLoadingReleaseOrderDetail();
						$elem0->read($input);
						
						$this->orderDetails[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('boxId');
		$xfer += $output->writeString($this->boxId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('boxNum');
		$xfer += $output->writeI32($this->boxNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('oqcDate');
		$xfer += $output->writeString($this->oqcDate);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->height !== null) {
			
			$xfer += $output->writeFieldBegin('height');
			$xfer += $output->writeDouble($this->height);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->volume !== null) {
			
			$xfer += $output->writeFieldBegin('volume');
			$xfer += $output->writeDouble($this->volume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeDouble($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->width !== null) {
			
			$xfer += $output->writeFieldBegin('width');
			$xfer += $output->writeDouble($this->width);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weightUm !== null) {
			
			$xfer += $output->writeFieldBegin('weightUm');
			$xfer += $output->writeString($this->weightUm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->length !== null) {
			
			$xfer += $output->writeFieldBegin('length');
			$xfer += $output->writeDouble($this->length);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dimensioUm !== null) {
			
			$xfer += $output->writeFieldBegin('dimensioUm');
			$xfer += $output->writeString($this->dimensioUm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->volumeUm !== null) {
			
			$xfer += $output->writeFieldBegin('volumeUm');
			$xfer += $output->writeString($this->volumeUm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userCode !== null) {
			
			$xfer += $output->writeFieldBegin('userCode');
			$xfer += $output->writeString($this->userCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userName !== null) {
			
			$xfer += $output->writeFieldBegin('userName');
			$xfer += $output->writeString($this->userName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderDetails !== null) {
			
			$xfer += $output->writeFieldBegin('orderDetails');
			
			if (!is_array($this->orderDetails)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderDetails as $iter0){
				
				
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