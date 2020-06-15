<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipGoodsDetailItem {
	
	static $_TSPEC;
	public $brandId = null;
	public $brandName = null;
	public $brandLogo = null;
	public $goodsId = null;
	public $goodsName = null;
	public $goodsImg = null;
	public $vipPrice = null;
	public $svipPrice = null;
	public $skuMultiPrice = null;
	public $multiBrand = null;
	public $salesState = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandId'
			),
			2 => array(
			'var' => 'brandName'
			),
			3 => array(
			'var' => 'brandLogo'
			),
			4 => array(
			'var' => 'goodsId'
			),
			5 => array(
			'var' => 'goodsName'
			),
			6 => array(
			'var' => 'goodsImg'
			),
			7 => array(
			'var' => 'vipPrice'
			),
			8 => array(
			'var' => 'svipPrice'
			),
			9 => array(
			'var' => 'skuMultiPrice'
			),
			10 => array(
			'var' => 'multiBrand'
			),
			11 => array(
			'var' => 'salesState'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['brandLogo'])){
				
				$this->brandLogo = $vals['brandLogo'];
			}
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
			}
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['goodsImg'])){
				
				$this->goodsImg = $vals['goodsImg'];
			}
			
			
			if (isset($vals['vipPrice'])){
				
				$this->vipPrice = $vals['vipPrice'];
			}
			
			
			if (isset($vals['svipPrice'])){
				
				$this->svipPrice = $vals['svipPrice'];
			}
			
			
			if (isset($vals['skuMultiPrice'])){
				
				$this->skuMultiPrice = $vals['skuMultiPrice'];
			}
			
			
			if (isset($vals['multiBrand'])){
				
				$this->multiBrand = $vals['multiBrand'];
			}
			
			
			if (isset($vals['salesState'])){
				
				$this->salesState = $vals['salesState'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipGoodsDetailItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandId);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("brandLogo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandLogo);
				
			}
			
			
			
			
			if ("goodsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsId);
				
			}
			
			
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("goodsImg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsImg);
				
			}
			
			
			
			
			if ("vipPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipPrice);
				
			}
			
			
			
			
			if ("svipPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->svipPrice);
				
			}
			
			
			
			
			if ("skuMultiPrice" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->skuMultiPrice);
				
			}
			
			
			
			
			if ("multiBrand" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->multiBrand);
				
			}
			
			
			
			
			if ("salesState" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->salesState); 
				
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
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeString($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandLogo !== null) {
			
			$xfer += $output->writeFieldBegin('brandLogo');
			$xfer += $output->writeString($this->brandLogo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsId !== null) {
			
			$xfer += $output->writeFieldBegin('goodsId');
			$xfer += $output->writeString($this->goodsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsName !== null) {
			
			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsImg !== null) {
			
			$xfer += $output->writeFieldBegin('goodsImg');
			$xfer += $output->writeString($this->goodsImg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipPrice !== null) {
			
			$xfer += $output->writeFieldBegin('vipPrice');
			$xfer += $output->writeString($this->vipPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->svipPrice !== null) {
			
			$xfer += $output->writeFieldBegin('svipPrice');
			$xfer += $output->writeString($this->svipPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('skuMultiPrice');
		$xfer += $output->writeBool($this->skuMultiPrice);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('multiBrand');
		$xfer += $output->writeBool($this->multiBrand);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('salesState');
		$xfer += $output->writeI32($this->salesState);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>