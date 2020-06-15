<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class VendorProductResponse {
	
	static $_TSPEC;
	public $success_barcode_list = null;
	public $fail_item_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'success_barcode_list'
			),
			2 => array(
			'var' => 'fail_item_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success_barcode_list'])){
				
				$this->success_barcode_list = $vals['success_barcode_list'];
			}
			
			
			if (isset($vals['fail_item_list'])){
				
				$this->fail_item_list = $vals['fail_item_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorProductResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("success_barcode_list" == $schemeField){
				
				$needSkip = false;
				
				$this->success_barcode_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->success_barcode_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("fail_item_list" == $schemeField){
				
				$needSkip = false;
				
				$this->fail_item_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\product\VendorProductFailItem();
						$elem1->read($input);
						
						$this->fail_item_list[$_size1++] = $elem1;
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
		
		if($this->success_barcode_list !== null) {
			
			$xfer += $output->writeFieldBegin('success_barcode_list');
			
			if (!is_array($this->success_barcode_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success_barcode_list as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fail_item_list !== null) {
			
			$xfer += $output->writeFieldBegin('fail_item_list');
			
			if (!is_array($this->fail_item_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->fail_item_list as $iter0){
				
				
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