<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class BrandGiftItem {
	
	static $_TSPEC;
	public $brandLogo = null;
	public $salesNo = null;
	public $salesName = null;
	public $tips = null;
	public $giftGoodsName = null;
	public $giftGoodsImage = null;
	public $saleState = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandLogo'
			),
			2 => array(
			'var' => 'salesNo'
			),
			3 => array(
			'var' => 'salesName'
			),
			4 => array(
			'var' => 'tips'
			),
			5 => array(
			'var' => 'giftGoodsName'
			),
			6 => array(
			'var' => 'giftGoodsImage'
			),
			7 => array(
			'var' => 'saleState'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandLogo'])){
				
				$this->brandLogo = $vals['brandLogo'];
			}
			
			
			if (isset($vals['salesNo'])){
				
				$this->salesNo = $vals['salesNo'];
			}
			
			
			if (isset($vals['salesName'])){
				
				$this->salesName = $vals['salesName'];
			}
			
			
			if (isset($vals['tips'])){
				
				$this->tips = $vals['tips'];
			}
			
			
			if (isset($vals['giftGoodsName'])){
				
				$this->giftGoodsName = $vals['giftGoodsName'];
			}
			
			
			if (isset($vals['giftGoodsImage'])){
				
				$this->giftGoodsImage = $vals['giftGoodsImage'];
			}
			
			
			if (isset($vals['saleState'])){
				
				$this->saleState = $vals['saleState'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BrandGiftItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brandLogo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandLogo);
				
			}
			
			
			
			
			if ("salesNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesNo);
				
			}
			
			
			
			
			if ("salesName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesName);
				
			}
			
			
			
			
			if ("tips" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tips);
				
			}
			
			
			
			
			if ("giftGoodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->giftGoodsName);
				
			}
			
			
			
			
			if ("giftGoodsImage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->giftGoodsImage);
				
			}
			
			
			
			
			if ("saleState" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->saleState); 
				
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
		
		if($this->brandLogo !== null) {
			
			$xfer += $output->writeFieldBegin('brandLogo');
			$xfer += $output->writeString($this->brandLogo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesNo !== null) {
			
			$xfer += $output->writeFieldBegin('salesNo');
			$xfer += $output->writeString($this->salesNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesName !== null) {
			
			$xfer += $output->writeFieldBegin('salesName');
			$xfer += $output->writeString($this->salesName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tips !== null) {
			
			$xfer += $output->writeFieldBegin('tips');
			$xfer += $output->writeString($this->tips);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->giftGoodsName !== null) {
			
			$xfer += $output->writeFieldBegin('giftGoodsName');
			$xfer += $output->writeString($this->giftGoodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->giftGoodsImage !== null) {
			
			$xfer += $output->writeFieldBegin('giftGoodsImage');
			$xfer += $output->writeString($this->giftGoodsImage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('saleState');
		$xfer += $output->writeI32($this->saleState);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>