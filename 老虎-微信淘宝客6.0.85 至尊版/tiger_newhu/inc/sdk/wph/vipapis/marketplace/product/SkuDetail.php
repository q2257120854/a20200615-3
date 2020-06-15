<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\product;

class SkuDetail {
	
	static $_TSPEC;
	public $sku_id = null;
	public $outer_sku_id = null;
	public $sale_props = null;
	public $size_detail_id = null;
	public $color_images = null;
	public $spu_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sku_id'
			),
			2 => array(
			'var' => 'outer_sku_id'
			),
			3 => array(
			'var' => 'sale_props'
			),
			4 => array(
			'var' => 'size_detail_id'
			),
			5 => array(
			'var' => 'color_images'
			),
			6 => array(
			'var' => 'spu_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sku_id'])){
				
				$this->sku_id = $vals['sku_id'];
			}
			
			
			if (isset($vals['outer_sku_id'])){
				
				$this->outer_sku_id = $vals['outer_sku_id'];
			}
			
			
			if (isset($vals['sale_props'])){
				
				$this->sale_props = $vals['sale_props'];
			}
			
			
			if (isset($vals['size_detail_id'])){
				
				$this->size_detail_id = $vals['size_detail_id'];
			}
			
			
			if (isset($vals['color_images'])){
				
				$this->color_images = $vals['color_images'];
			}
			
			
			if (isset($vals['spu_id'])){
				
				$this->spu_id = $vals['spu_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SkuDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku_id);
				
			}
			
			
			
			
			if ("outer_sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->outer_sku_id);
				
			}
			
			
			
			
			if ("sale_props" == $schemeField){
				
				$needSkip = false;
				
				$this->sale_props = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->sale_props[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("size_detail_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->size_detail_id); 
				
			}
			
			
			
			
			if ("color_images" == $schemeField){
				
				$needSkip = false;
				
				$this->color_images = new \vipapis\marketplace\product\ColorImage();
				$this->color_images->read($input);
				
			}
			
			
			
			
			if ("spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spu_id);
				
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
		
		$xfer += $output->writeFieldBegin('sku_id');
		$xfer += $output->writeString($this->sku_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->outer_sku_id !== null) {
			
			$xfer += $output->writeFieldBegin('outer_sku_id');
			$xfer += $output->writeString($this->outer_sku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sale_props !== null) {
			
			$xfer += $output->writeFieldBegin('sale_props');
			
			if (!is_array($this->sale_props)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->sale_props as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_detail_id !== null) {
			
			$xfer += $output->writeFieldBegin('size_detail_id');
			$xfer += $output->writeI64($this->size_detail_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color_images !== null) {
			
			$xfer += $output->writeFieldBegin('color_images');
			
			if (!is_object($this->color_images)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->color_images->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spu_id !== null) {
			
			$xfer += $output->writeFieldBegin('spu_id');
			$xfer += $output->writeString($this->spu_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>