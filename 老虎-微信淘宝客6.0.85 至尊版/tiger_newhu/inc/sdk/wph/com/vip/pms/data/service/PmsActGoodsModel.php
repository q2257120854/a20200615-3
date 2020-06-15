<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsActGoodsModel {
	
	static $_TSPEC;
	public $mSizeId = null;
	public $arrivalPrice = null;
	public $brandId = null;
	public $mid = null;
	public $vSkuId = null;
	public $totalQuota = null;
	public $fav = null;
	public $sellPoint = null;
	public $prodSpu = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mSizeId'
			),
			2 => array(
			'var' => 'arrivalPrice'
			),
			3 => array(
			'var' => 'brandId'
			),
			4 => array(
			'var' => 'mid'
			),
			5 => array(
			'var' => 'vSkuId'
			),
			6 => array(
			'var' => 'totalQuota'
			),
			7 => array(
			'var' => 'fav'
			),
			8 => array(
			'var' => 'sellPoint'
			),
			9 => array(
			'var' => 'prodSpu'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mSizeId'])){
				
				$this->mSizeId = $vals['mSizeId'];
			}
			
			
			if (isset($vals['arrivalPrice'])){
				
				$this->arrivalPrice = $vals['arrivalPrice'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['mid'])){
				
				$this->mid = $vals['mid'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['totalQuota'])){
				
				$this->totalQuota = $vals['totalQuota'];
			}
			
			
			if (isset($vals['fav'])){
				
				$this->fav = $vals['fav'];
			}
			
			
			if (isset($vals['sellPoint'])){
				
				$this->sellPoint = $vals['sellPoint'];
			}
			
			
			if (isset($vals['prodSpu'])){
				
				$this->prodSpu = $vals['prodSpu'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsActGoodsModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mSizeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->mSizeId); 
				
			}
			
			
			
			
			if ("arrivalPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->arrivalPrice);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brandId); 
				
			}
			
			
			
			
			if ("mid" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->mid); 
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuId); 
				
			}
			
			
			
			
			if ("totalQuota" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalQuota); 
				
			}
			
			
			
			
			if ("fav" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->fav);
				
			}
			
			
			
			
			if ("sellPoint" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellPoint);
				
			}
			
			
			
			
			if ("prodSpu" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prodSpu);
				
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
		
		$xfer += $output->writeFieldBegin('mSizeId');
		$xfer += $output->writeI64($this->mSizeId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->arrivalPrice !== null) {
			
			$xfer += $output->writeFieldBegin('arrivalPrice');
			$xfer += $output->writeDouble($this->arrivalPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI64($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mid !== null) {
			
			$xfer += $output->writeFieldBegin('mid');
			$xfer += $output->writeI64($this->mid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeI64($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalQuota !== null) {
			
			$xfer += $output->writeFieldBegin('totalQuota');
			$xfer += $output->writeI32($this->totalQuota);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fav !== null) {
			
			$xfer += $output->writeFieldBegin('fav');
			$xfer += $output->writeDouble($this->fav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellPoint !== null) {
			
			$xfer += $output->writeFieldBegin('sellPoint');
			$xfer += $output->writeString($this->sellPoint);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prodSpu !== null) {
			
			$xfer += $output->writeFieldBegin('prodSpu');
			$xfer += $output->writeString($this->prodSpu);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>