<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\inventory;

class IncreaseSkuStockResponse {
	
	static $_TSPEC;
	public $success = null;
	public $over_sell_quantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'success'
			),
			2 => array(
			'var' => 'over_sell_quantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
			if (isset($vals['over_sell_quantity'])){
				
				$this->over_sell_quantity = $vals['over_sell_quantity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'IncreaseSkuStockResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("success" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->success);
				
			}
			
			
			
			
			if ("over_sell_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->over_sell_quantity); 
				
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeBool($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('over_sell_quantity');
		$xfer += $output->writeI32($this->over_sell_quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>