<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\product;

class ProdSkuInfo {
	
	static $_TSPEC;
	public $prod_sku_id = null;
	public $sku_state = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'prod_sku_id'
			),
			2 => array(
			'var' => 'sku_state'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['prod_sku_id'])){
				
				$this->prod_sku_id = $vals['prod_sku_id'];
			}
			
			
			if (isset($vals['sku_state'])){
				
				$this->sku_state = $vals['sku_state'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProdSkuInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("prod_sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prod_sku_id);
				
			}
			
			
			
			
			if ("sku_state" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->sku_state);
				
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
		
		if($this->prod_sku_id !== null) {
			
			$xfer += $output->writeFieldBegin('prod_sku_id');
			$xfer += $output->writeString($this->prod_sku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sku_state !== null) {
			
			$xfer += $output->writeFieldBegin('sku_state');
			$xfer += $output->writeBool($this->sku_state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>