<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PromotionOrderGoodsModel {
	
	static $_TSPEC;
	public $goodsId = null;
	public $goodsNumber = null;
	public $favAmount = null;
	public $totalFavAmount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsId'
			),
			2 => array(
			'var' => 'goodsNumber'
			),
			3 => array(
			'var' => 'favAmount'
			),
			4 => array(
			'var' => 'totalFavAmount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
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
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PromotionOrderGoodsModel';
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
			
			
			
			
			if ("goodsNumber" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodsNumber); 
				
			}
			
			
			
			
			if ("favAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->favAmount);
				
			}
			
			
			
			
			if ("totalFavAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalFavAmount);
				
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
		
		$xfer += $output->writeFieldBegin('goodsNumber');
		$xfer += $output->writeI32($this->goodsNumber);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->favAmount !== null) {
			
			$xfer += $output->writeFieldBegin('favAmount');
			$xfer += $output->writeDouble($this->favAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalFavAmount !== null) {
			
			$xfer += $output->writeFieldBegin('totalFavAmount');
			$xfer += $output->writeDouble($this->totalFavAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>