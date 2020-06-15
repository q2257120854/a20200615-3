<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class ProductForMultiColorResponse {
	
	static $_TSPEC;
	public $sn = null;
	public $brand_id = null;
	public $error_msg = null;
	public $success_sku_list = null;
	public $fail_sku_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sn'
			),
			2 => array(
			'var' => 'brand_id'
			),
			4 => array(
			'var' => 'error_msg'
			),
			5 => array(
			'var' => 'success_sku_list'
			),
			6 => array(
			'var' => 'fail_sku_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['error_msg'])){
				
				$this->error_msg = $vals['error_msg'];
			}
			
			
			if (isset($vals['success_sku_list'])){
				
				$this->success_sku_list = $vals['success_sku_list'];
			}
			
			
			if (isset($vals['fail_sku_list'])){
				
				$this->fail_sku_list = $vals['fail_sku_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProductForMultiColorResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brand_id); 
				
			}
			
			
			
			
			if ("error_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->error_msg);
				
			}
			
			
			
			
			if ("success_sku_list" == $schemeField){
				
				$needSkip = false;
				
				$this->success_sku_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\product\SuccessSkuItem();
						$elem0->read($input);
						
						$this->success_sku_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("fail_sku_list" == $schemeField){
				
				$needSkip = false;
				
				$this->fail_sku_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\product\VendorProductFailItem();
						$elem1->read($input);
						
						$this->fail_sku_list[$_size1++] = $elem1;
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
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_id !== null) {
			
			$xfer += $output->writeFieldBegin('brand_id');
			$xfer += $output->writeI32($this->brand_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->error_msg !== null) {
			
			$xfer += $output->writeFieldBegin('error_msg');
			$xfer += $output->writeString($this->error_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->success_sku_list !== null) {
			
			$xfer += $output->writeFieldBegin('success_sku_list');
			
			if (!is_array($this->success_sku_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success_sku_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fail_sku_list !== null) {
			
			$xfer += $output->writeFieldBegin('fail_sku_list');
			
			if (!is_array($this->fail_sku_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->fail_sku_list as $iter0){
				
				
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