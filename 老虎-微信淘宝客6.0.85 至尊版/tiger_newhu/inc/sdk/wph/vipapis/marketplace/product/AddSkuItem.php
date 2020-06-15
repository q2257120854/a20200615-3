<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\product;

class AddSkuItem {
	
	static $_TSPEC;
	public $outer_sku_id = null;
	public $market_price = null;
	public $sell_price = null;
	public $simple_sale_props = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'outer_sku_id'
			),
			2 => array(
			'var' => 'market_price'
			),
			3 => array(
			'var' => 'sell_price'
			),
			4 => array(
			'var' => 'simple_sale_props'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['outer_sku_id'])){
				
				$this->outer_sku_id = $vals['outer_sku_id'];
			}
			
			
			if (isset($vals['market_price'])){
				
				$this->market_price = $vals['market_price'];
			}
			
			
			if (isset($vals['sell_price'])){
				
				$this->sell_price = $vals['sell_price'];
			}
			
			
			if (isset($vals['simple_sale_props'])){
				
				$this->simple_sale_props = $vals['simple_sale_props'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AddSkuItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("outer_sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->outer_sku_id);
				
			}
			
			
			
			
			if ("market_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->market_price);
				
			}
			
			
			
			
			if ("sell_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sell_price);
				
			}
			
			
			
			
			if ("simple_sale_props" == $schemeField){
				
				$needSkip = false;
				
				$this->simple_sale_props = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\marketplace\product\SimpleProperty();
						$elem1->read($input);
						
						$this->simple_sale_props[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('outer_sku_id');
		$xfer += $output->writeString($this->outer_sku_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('market_price');
		$xfer += $output->writeDouble($this->market_price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sell_price');
		$xfer += $output->writeDouble($this->sell_price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('simple_sale_props');
		
		if (!is_array($this->simple_sale_props)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->simple_sale_props as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>