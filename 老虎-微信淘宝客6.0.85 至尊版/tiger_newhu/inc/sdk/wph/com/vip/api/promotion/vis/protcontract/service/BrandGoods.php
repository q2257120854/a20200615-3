<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class BrandGoods {
	
	static $_TSPEC;
	public $brandSn = null;
	public $brandName = null;
	public $totalGoodsValue = null;
	public $vipBearValue = null;
	public $vendorBearValue = null;
	public $memo = null;
	public $brandDeduction = null;
	public $newDeduction = null;
	public $vipScaleValue = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandSn'
			),
			2 => array(
			'var' => 'brandName'
			),
			3 => array(
			'var' => 'totalGoodsValue'
			),
			4 => array(
			'var' => 'vipBearValue'
			),
			5 => array(
			'var' => 'vendorBearValue'
			),
			6 => array(
			'var' => 'memo'
			),
			7 => array(
			'var' => 'brandDeduction'
			),
			8 => array(
			'var' => 'newDeduction'
			),
			9 => array(
			'var' => 'vipScaleValue'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandSn'])){
				
				$this->brandSn = $vals['brandSn'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['totalGoodsValue'])){
				
				$this->totalGoodsValue = $vals['totalGoodsValue'];
			}
			
			
			if (isset($vals['vipBearValue'])){
				
				$this->vipBearValue = $vals['vipBearValue'];
			}
			
			
			if (isset($vals['vendorBearValue'])){
				
				$this->vendorBearValue = $vals['vendorBearValue'];
			}
			
			
			if (isset($vals['memo'])){
				
				$this->memo = $vals['memo'];
			}
			
			
			if (isset($vals['brandDeduction'])){
				
				$this->brandDeduction = $vals['brandDeduction'];
			}
			
			
			if (isset($vals['newDeduction'])){
				
				$this->newDeduction = $vals['newDeduction'];
			}
			
			
			if (isset($vals['vipScaleValue'])){
				
				$this->vipScaleValue = $vals['vipScaleValue'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BrandGoods';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brandSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandSn);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("totalGoodsValue" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalGoodsValue); 
				
			}
			
			
			
			
			if ("vipBearValue" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vipBearValue); 
				
			}
			
			
			
			
			if ("vendorBearValue" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorBearValue); 
				
			}
			
			
			
			
			if ("memo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->memo);
				
			}
			
			
			
			
			if ("brandDeduction" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->brandDeduction); 
				
			}
			
			
			
			
			if ("newDeduction" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->newDeduction); 
				
			}
			
			
			
			
			if ("vipScaleValue" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vipScaleValue);
				
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
		
		if($this->brandSn !== null) {
			
			$xfer += $output->writeFieldBegin('brandSn');
			$xfer += $output->writeString($this->brandSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalGoodsValue !== null) {
			
			$xfer += $output->writeFieldBegin('totalGoodsValue');
			$xfer += $output->writeI32($this->totalGoodsValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipBearValue !== null) {
			
			$xfer += $output->writeFieldBegin('vipBearValue');
			$xfer += $output->writeI32($this->vipBearValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorBearValue !== null) {
			
			$xfer += $output->writeFieldBegin('vendorBearValue');
			$xfer += $output->writeI32($this->vendorBearValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->memo !== null) {
			
			$xfer += $output->writeFieldBegin('memo');
			$xfer += $output->writeString($this->memo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandDeduction !== null) {
			
			$xfer += $output->writeFieldBegin('brandDeduction');
			$xfer += $output->writeByte($this->brandDeduction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newDeduction !== null) {
			
			$xfer += $output->writeFieldBegin('newDeduction');
			$xfer += $output->writeByte($this->newDeduction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipScaleValue !== null) {
			
			$xfer += $output->writeFieldBegin('vipScaleValue');
			$xfer += $output->writeDouble($this->vipScaleValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>