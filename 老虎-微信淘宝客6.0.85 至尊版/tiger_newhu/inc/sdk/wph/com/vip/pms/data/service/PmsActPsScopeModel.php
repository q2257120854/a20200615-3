<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsActPsScopeModel {
	
	static $_TSPEC;
	public $goodsId = null;
	public $scopeId = null;
	public $goodsName = null;
	public $goodsPrice = null;
	public $brandId = null;
	public $brandName = null;
	public $saleStyle = null;
	public $saleSite = null;
	public $merNo = null;
	public $salesNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsId'
			),
			2 => array(
			'var' => 'scopeId'
			),
			3 => array(
			'var' => 'goodsName'
			),
			4 => array(
			'var' => 'goodsPrice'
			),
			5 => array(
			'var' => 'brandId'
			),
			6 => array(
			'var' => 'brandName'
			),
			7 => array(
			'var' => 'saleStyle'
			),
			8 => array(
			'var' => 'saleSite'
			),
			9 => array(
			'var' => 'merNo'
			),
			10 => array(
			'var' => 'salesNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
			}
			
			
			if (isset($vals['scopeId'])){
				
				$this->scopeId = $vals['scopeId'];
			}
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['goodsPrice'])){
				
				$this->goodsPrice = $vals['goodsPrice'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['saleStyle'])){
				
				$this->saleStyle = $vals['saleStyle'];
			}
			
			
			if (isset($vals['saleSite'])){
				
				$this->saleSite = $vals['saleSite'];
			}
			
			
			if (isset($vals['merNo'])){
				
				$this->merNo = $vals['merNo'];
			}
			
			
			if (isset($vals['salesNo'])){
				
				$this->salesNo = $vals['salesNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsActPsScopeModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodsId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodsId); 
				
			}
			
			
			
			
			if ("scopeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->scopeId); 
				
			}
			
			
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("goodsPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsPrice);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brandId); 
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("saleStyle" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->saleStyle); 
				
			}
			
			
			
			
			if ("saleSite" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleSite);
				
			}
			
			
			
			
			if ("merNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->merNo); 
				
			}
			
			
			
			
			if ("salesNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->salesNo); 
				
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
		
		$xfer += $output->writeFieldBegin('goodsId');
		$xfer += $output->writeI32($this->goodsId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->scopeId !== null) {
			
			$xfer += $output->writeFieldBegin('scopeId');
			$xfer += $output->writeI64($this->scopeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsName !== null) {
			
			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsPrice !== null) {
			
			$xfer += $output->writeFieldBegin('goodsPrice');
			$xfer += $output->writeString($this->goodsPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI32($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleStyle !== null) {
			
			$xfer += $output->writeFieldBegin('saleStyle');
			$xfer += $output->writeI32($this->saleStyle);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleSite !== null) {
			
			$xfer += $output->writeFieldBegin('saleSite');
			$xfer += $output->writeString($this->saleSite);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merNo !== null) {
			
			$xfer += $output->writeFieldBegin('merNo');
			$xfer += $output->writeI64($this->merNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesNo !== null) {
			
			$xfer += $output->writeFieldBegin('salesNo');
			$xfer += $output->writeI64($this->salesNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>