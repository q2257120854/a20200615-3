<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\price\api;

class QueryPricingReceiptItemResp {
	
	static $_TSPEC;
	public $total = null;
	public $pricing_receipt_items = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'total'
			),
			2 => array(
			'var' => 'pricing_receipt_items'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
			if (isset($vals['pricing_receipt_items'])){
				
				$this->pricing_receipt_items = $vals['pricing_receipt_items'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryPricingReceiptItemResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total); 
				
			}
			
			
			
			
			if ("pricing_receipt_items" == $schemeField){
				
				$needSkip = false;
				
				$this->pricing_receipt_items = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\xstore\cc\price\api\PricingReceiptItem();
						$elem0->read($input);
						
						$this->pricing_receipt_items[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('total');
		$xfer += $output->writeI32($this->total);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pricing_receipt_items !== null) {
			
			$xfer += $output->writeFieldBegin('pricing_receipt_items');
			
			if (!is_array($this->pricing_receipt_items)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->pricing_receipt_items as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>