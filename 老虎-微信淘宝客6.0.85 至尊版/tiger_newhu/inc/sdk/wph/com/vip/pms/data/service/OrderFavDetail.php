<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class OrderFavDetail {
	
	static $_TSPEC;
	public $sizeId = null;
	public $goodsNumber = null;
	public $favAmount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sizeId'
			),
			2 => array(
			'var' => 'goodsNumber'
			),
			3 => array(
			'var' => 'favAmount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['goodsNumber'])){
				
				$this->goodsNumber = $vals['goodsNumber'];
			}
			
			
			if (isset($vals['favAmount'])){
				
				$this->favAmount = $vals['favAmount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderFavDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeId);
				
			}
			
			
			
			
			if ("goodsNumber" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodsNumber); 
				
			}
			
			
			
			
			if ("favAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->favAmount);
				
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
		
		$xfer += $output->writeFieldBegin('sizeId');
		$xfer += $output->writeString($this->sizeId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goodsNumber');
		$xfer += $output->writeI32($this->goodsNumber);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('favAmount');
		$xfer += $output->writeDouble($this->favAmount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>