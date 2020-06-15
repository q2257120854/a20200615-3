<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class FlushGoodsOriginalPriceModel {
	
	static $_TSPEC;
	public $spuId = null;
	public $originalPrice = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spuId'
			),
			2 => array(
			'var' => 'originalPrice'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spuId'])){
				
				$this->spuId = $vals['spuId'];
			}
			
			
			if (isset($vals['originalPrice'])){
				
				$this->originalPrice = $vals['originalPrice'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FlushGoodsOriginalPriceModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("spuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spuId);
				
			}
			
			
			
			
			if ("originalPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalPrice);
				
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
		
		$xfer += $output->writeFieldBegin('spuId');
		$xfer += $output->writeString($this->spuId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('originalPrice');
		$xfer += $output->writeString($this->originalPrice);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>