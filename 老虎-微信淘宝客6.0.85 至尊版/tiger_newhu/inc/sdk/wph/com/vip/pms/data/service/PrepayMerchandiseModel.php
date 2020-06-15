<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PrepayMerchandiseModel {
	
	static $_TSPEC;
	public $merchandiseId = null;
	public $brandId = null;
	public $prepayType = null;
	public $prepayAmount = null;
	public $listTips = null;
	public $detailTips = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'merchandiseId'
			),
			2 => array(
			'var' => 'brandId'
			),
			3 => array(
			'var' => 'prepayType'
			),
			4 => array(
			'var' => 'prepayAmount'
			),
			5 => array(
			'var' => 'listTips'
			),
			6 => array(
			'var' => 'detailTips'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['merchandiseId'])){
				
				$this->merchandiseId = $vals['merchandiseId'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['prepayType'])){
				
				$this->prepayType = $vals['prepayType'];
			}
			
			
			if (isset($vals['prepayAmount'])){
				
				$this->prepayAmount = $vals['prepayAmount'];
			}
			
			
			if (isset($vals['listTips'])){
				
				$this->listTips = $vals['listTips'];
			}
			
			
			if (isset($vals['detailTips'])){
				
				$this->detailTips = $vals['detailTips'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrepayMerchandiseModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("merchandiseId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->merchandiseId); 
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brandId); 
				
			}
			
			
			
			
			if ("prepayType" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->prepayType); 
				
			}
			
			
			
			
			if ("prepayAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->prepayAmount); 
				
			}
			
			
			
			
			if ("listTips" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->listTips);
				
			}
			
			
			
			
			if ("detailTips" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailTips);
				
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
		
		$xfer += $output->writeFieldBegin('merchandiseId');
		$xfer += $output->writeI64($this->merchandiseId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI64($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayType !== null) {
			
			$xfer += $output->writeFieldBegin('prepayType');
			$xfer += $output->writeI16($this->prepayType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayAmount !== null) {
			
			$xfer += $output->writeFieldBegin('prepayAmount');
			$xfer += $output->writeI32($this->prepayAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->listTips !== null) {
			
			$xfer += $output->writeFieldBegin('listTips');
			$xfer += $output->writeString($this->listTips);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailTips !== null) {
			
			$xfer += $output->writeFieldBegin('detailTips');
			$xfer += $output->writeString($this->detailTips);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>