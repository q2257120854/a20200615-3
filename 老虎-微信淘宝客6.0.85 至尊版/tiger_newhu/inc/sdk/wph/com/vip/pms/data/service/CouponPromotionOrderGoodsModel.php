<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class CouponPromotionOrderGoodsModel {
	
	static $_TSPEC;
	public $goodsId = null;
	public $sizeId = null;
	public $goodsNumber = null;
	public $favAmount = null;
	public $totalFavAmount = null;
	public $couponSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsId'
			),
			2 => array(
			'var' => 'sizeId'
			),
			3 => array(
			'var' => 'goodsNumber'
			),
			4 => array(
			'var' => 'favAmount'
			),
			5 => array(
			'var' => 'totalFavAmount'
			),
			6 => array(
			'var' => 'couponSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
			}
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['goodsNumber'])){
				
				$this->goodsNumber = $vals['goodsNumber'];
			}
			
			
			if (isset($vals['favAmount'])){
				
				$this->favAmount = $vals['favAmount'];
			}
			
			
			if (isset($vals['totalFavAmount'])){
				
				$this->totalFavAmount = $vals['totalFavAmount'];
			}
			
			
			if (isset($vals['couponSn'])){
				
				$this->couponSn = $vals['couponSn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponPromotionOrderGoodsModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsId);
				
			}
			
			
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeId);
				
			}
			
			
			
			
			if ("goodsNumber" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->goodsNumber);
				
			}
			
			
			
			
			if ("favAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->favAmount);
				
			}
			
			
			
			
			if ("totalFavAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalFavAmount);
				
			}
			
			
			
			
			if ("couponSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponSn);
				
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
		$xfer += $output->writeString($this->goodsId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sizeId');
		$xfer += $output->writeString($this->sizeId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goodsNumber');
		$xfer += $output->writeDouble($this->goodsNumber);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('favAmount');
		$xfer += $output->writeDouble($this->favAmount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('totalFavAmount');
		$xfer += $output->writeDouble($this->totalFavAmount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->couponSn !== null) {
			
			$xfer += $output->writeFieldBegin('couponSn');
			$xfer += $output->writeString($this->couponSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>