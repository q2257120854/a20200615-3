<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\inventory;

class InventoryDeductOrderDetailResponse {
	
	static $_TSPEC;
	public $pick_no = null;
	public $has_next = null;
	public $deduct_orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pick_no'
			),
			2 => array(
			'var' => 'has_next'
			),
			3 => array(
			'var' => 'deduct_orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pick_no'])){
				
				$this->pick_no = $vals['pick_no'];
			}
			
			
			if (isset($vals['has_next'])){
				
				$this->has_next = $vals['has_next'];
			}
			
			
			if (isset($vals['deduct_orders'])){
				
				$this->deduct_orders = $vals['deduct_orders'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InventoryDeductOrderDetailResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pick_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pick_no);
				
			}
			
			
			
			
			if ("has_next" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->has_next);
				
			}
			
			
			
			
			if ("deduct_orders" == $schemeField){
				
				$needSkip = false;
				
				$this->deduct_orders = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\inventory\DeductOrder();
						$elem1->read($input);
						
						$this->deduct_orders[$_size1++] = $elem1;
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
		
		if($this->pick_no !== null) {
			
			$xfer += $output->writeFieldBegin('pick_no');
			$xfer += $output->writeString($this->pick_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('has_next');
		$xfer += $output->writeBool($this->has_next);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->deduct_orders !== null) {
			
			$xfer += $output->writeFieldBegin('deduct_orders');
			
			if (!is_array($this->deduct_orders)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->deduct_orders as $iter0){
				
				
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