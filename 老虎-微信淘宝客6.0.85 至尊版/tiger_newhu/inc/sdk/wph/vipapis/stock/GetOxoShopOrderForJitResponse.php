<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\stock;

class GetOxoShopOrderForJitResponse {
	
	static $_TSPEC;
	public $oxo_shop_order_for_jit_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'oxo_shop_order_for_jit_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['oxo_shop_order_for_jit_list'])){
				
				$this->oxo_shop_order_for_jit_list = $vals['oxo_shop_order_for_jit_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetOxoShopOrderForJitResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("oxo_shop_order_for_jit_list" == $schemeField){
				
				$needSkip = false;
				
				$this->oxo_shop_order_for_jit_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\stock\OxoShopOrderForJitList();
						$elem1->read($input);
						
						$this->oxo_shop_order_for_jit_list[$_size1++] = $elem1;
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
		
		if($this->oxo_shop_order_for_jit_list !== null) {
			
			$xfer += $output->writeFieldBegin('oxo_shop_order_for_jit_list');
			
			if (!is_array($this->oxo_shop_order_for_jit_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->oxo_shop_order_for_jit_list as $iter0){
				
				
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