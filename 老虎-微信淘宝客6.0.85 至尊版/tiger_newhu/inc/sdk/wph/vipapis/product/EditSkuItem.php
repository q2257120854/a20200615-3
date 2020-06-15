<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class EditSkuItem {
	
	static $_TSPEC;
	public $barcode = null;
	public $group_sn = null;
	public $flat_sale_props = null;
	public $market_price = null;
	public $sell_price = null;
	public $supply_price = null;
	public $simple_sale_props = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'group_sn'
			),
			3 => array(
			'var' => 'flat_sale_props'
			),
			4 => array(
			'var' => 'market_price'
			),
			5 => array(
			'var' => 'sell_price'
			),
			6 => array(
			'var' => 'supply_price'
			),
			7 => array(
			'var' => 'simple_sale_props'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['group_sn'])){
				
				$this->group_sn = $vals['group_sn'];
			}
			
			
			if (isset($vals['flat_sale_props'])){
				
				$this->flat_sale_props = $vals['flat_sale_props'];
			}
			
			
			if (isset($vals['market_price'])){
				
				$this->market_price = $vals['market_price'];
			}
			
			
			if (isset($vals['sell_price'])){
				
				$this->sell_price = $vals['sell_price'];
			}
			
			
			if (isset($vals['supply_price'])){
				
				$this->supply_price = $vals['supply_price'];
			}
			
			
			if (isset($vals['simple_sale_props'])){
				
				$this->simple_sale_props = $vals['simple_sale_props'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EditSkuItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("group_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->group_sn);
				
			}
			
			
			
			
			if ("flat_sale_props" == $schemeField){
				
				$needSkip = false;
				
				$this->flat_sale_props = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = '';
						$input->readString($val1);
						
						$this->flat_sale_props[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("market_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->market_price);
				
			}
			
			
			
			
			if ("sell_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sell_price);
				
			}
			
			
			
			
			if ("supply_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->supply_price);
				
			}
			
			
			
			
			if ("simple_sale_props" == $schemeField){
				
				$needSkip = false;
				
				$this->simple_sale_props = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \vipapis\product\SimpleProperty();
						$elem2->read($input);
						
						$this->simple_sale_props[$_size2++] = $elem2;
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
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->group_sn !== null) {
			
			$xfer += $output->writeFieldBegin('group_sn');
			$xfer += $output->writeString($this->group_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flat_sale_props !== null) {
			
			$xfer += $output->writeFieldBegin('flat_sale_props');
			
			if (!is_array($this->flat_sale_props)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->flat_sale_props as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->market_price !== null) {
			
			$xfer += $output->writeFieldBegin('market_price');
			$xfer += $output->writeDouble($this->market_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sell_price !== null) {
			
			$xfer += $output->writeFieldBegin('sell_price');
			$xfer += $output->writeDouble($this->sell_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supply_price !== null) {
			
			$xfer += $output->writeFieldBegin('supply_price');
			$xfer += $output->writeDouble($this->supply_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->simple_sale_props !== null) {
			
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
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>