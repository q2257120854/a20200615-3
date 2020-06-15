<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class PriceItem {
	
	static $_TSPEC;
	public $mid = null;
	public $vipPrice = null;
	public $svipPrice = null;
	public $skuMultiplePrice = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mid'
			),
			2 => array(
			'var' => 'vipPrice'
			),
			3 => array(
			'var' => 'svipPrice'
			),
			4 => array(
			'var' => 'skuMultiplePrice'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mid'])){
				
				$this->mid = $vals['mid'];
			}
			
			
			if (isset($vals['vipPrice'])){
				
				$this->vipPrice = $vals['vipPrice'];
			}
			
			
			if (isset($vals['svipPrice'])){
				
				$this->svipPrice = $vals['svipPrice'];
			}
			
			
			if (isset($vals['skuMultiplePrice'])){
				
				$this->skuMultiplePrice = $vals['skuMultiplePrice'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PriceItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mid);
				
			}
			
			
			
			
			if ("vipPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipPrice);
				
			}
			
			
			
			
			if ("svipPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->svipPrice);
				
			}
			
			
			
			
			if ("skuMultiplePrice" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->skuMultiplePrice);
				
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
		
		if($this->mid !== null) {
			
			$xfer += $output->writeFieldBegin('mid');
			$xfer += $output->writeString($this->mid);
			
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
		
		
		$xfer += $output->writeFieldBegin('skuMultiplePrice');
		$xfer += $output->writeBool($this->skuMultiplePrice);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>