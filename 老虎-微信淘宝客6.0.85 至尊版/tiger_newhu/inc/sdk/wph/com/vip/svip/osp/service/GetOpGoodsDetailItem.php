<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class GetOpGoodsDetailItem {
	
	static $_TSPEC;
	public $salesNo = null;
	public $brandName = null;
	public $remark = null;
	public $goodsId = null;
	public $goodsName = null;
	public $goodsImg = null;
	public $price = null;
	public $vipPrice = null;
	public $multiSkuSamePrice = null;
	public $saleState = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'salesNo'
			),
			2 => array(
			'var' => 'brandName'
			),
			3 => array(
			'var' => 'remark'
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
			'var' => 'price'
			),
			8 => array(
			'var' => 'vipPrice'
			),
			9 => array(
			'var' => 'multiSkuSamePrice'
			),
			10 => array(
			'var' => 'saleState'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['salesNo'])){
				
				$this->salesNo = $vals['salesNo'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
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
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['vipPrice'])){
				
				$this->vipPrice = $vals['vipPrice'];
			}
			
			
			if (isset($vals['multiSkuSamePrice'])){
				
				$this->multiSkuSamePrice = $vals['multiSkuSamePrice'];
			}
			
			
			if (isset($vals['saleState'])){
				
				$this->saleState = $vals['saleState'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetOpGoodsDetailItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("salesNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesNo);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("vipPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipPrice);
				
			}
			
			
			
			
			if ("multiSkuSamePrice" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->multiSkuSamePrice);
				
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
		
		if($this->salesNo !== null) {
			
			$xfer += $output->writeFieldBegin('salesNo');
			$xfer += $output->writeString($this->salesNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
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
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipPrice !== null) {
			
			$xfer += $output->writeFieldBegin('vipPrice');
			$xfer += $output->writeString($this->vipPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('multiSkuSamePrice');
		$xfer += $output->writeBool($this->multiSkuSamePrice);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('saleState');
		$xfer += $output->writeI32($this->saleState);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>