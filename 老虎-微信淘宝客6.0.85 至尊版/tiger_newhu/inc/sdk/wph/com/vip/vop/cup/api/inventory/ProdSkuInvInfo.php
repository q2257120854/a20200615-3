<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\inventory;

class ProdSkuInvInfo {
	
	static $_TSPEC;
	public $prod_sku_id = null;
	public $inventory_info = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'prod_sku_id'
			),
			2 => array(
			'var' => 'inventory_info'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['prod_sku_id'])){
				
				$this->prod_sku_id = $vals['prod_sku_id'];
			}
			
			
			if (isset($vals['inventory_info'])){
				
				$this->inventory_info = $vals['inventory_info'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProdSkuInvInfo';
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
			
			
			
			
			if ("inventory_info" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->inventory_info); 
				
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
		
		
		if($this->inventory_info !== null) {
			
			$xfer += $output->writeFieldBegin('inventory_info');
			$xfer += $output->writeI32($this->inventory_info);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>