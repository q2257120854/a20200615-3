<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipGoodsBPInfo {
	
	static $_TSPEC;
	public $brandName = null;
	public $goodsName = null;
	public $imgUrl = null;
	public $vipPrice = null;
	public $svipPrice = null;
	public $diff = null;
	public $skuMultiplePrice = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandName'
			),
			2 => array(
			'var' => 'goodsName'
			),
			3 => array(
			'var' => 'imgUrl'
			),
			4 => array(
			'var' => 'vipPrice'
			),
			5 => array(
			'var' => 'svipPrice'
			),
			6 => array(
			'var' => 'diff'
			),
			7 => array(
			'var' => 'skuMultiplePrice'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['imgUrl'])){
				
				$this->imgUrl = $vals['imgUrl'];
			}
			
			
			if (isset($vals['vipPrice'])){
				
				$this->vipPrice = $vals['vipPrice'];
			}
			
			
			if (isset($vals['svipPrice'])){
				
				$this->svipPrice = $vals['svipPrice'];
			}
			
			
			if (isset($vals['diff'])){
				
				$this->diff = $vals['diff'];
			}
			
			
			if (isset($vals['skuMultiplePrice'])){
				
				$this->skuMultiplePrice = $vals['skuMultiplePrice'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipGoodsBPInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("imgUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imgUrl);
				
			}
			
			
			
			
			if ("vipPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipPrice);
				
			}
			
			
			
			
			if ("svipPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->svipPrice);
				
			}
			
			
			
			
			if ("diff" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->diff);
				
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
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsName !== null) {
			
			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imgUrl !== null) {
			
			$xfer += $output->writeFieldBegin('imgUrl');
			$xfer += $output->writeString($this->imgUrl);
			
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
		
		
		if($this->diff !== null) {
			
			$xfer += $output->writeFieldBegin('diff');
			$xfer += $output->writeString($this->diff);
			
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