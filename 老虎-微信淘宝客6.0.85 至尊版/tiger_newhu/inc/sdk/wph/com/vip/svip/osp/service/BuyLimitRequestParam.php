<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class BuyLimitRequestParam {
	
	static $_TSPEC;
	public $productId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'productId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['productId'])){
				
				$this->productId = $vals['productId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BuyLimitRequestParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("productId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->productId); 
				
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
		
		if($this->productId !== null) {
			
			$xfer += $output->writeFieldBegin('productId');
			$xfer += $output->writeI64($this->productId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>