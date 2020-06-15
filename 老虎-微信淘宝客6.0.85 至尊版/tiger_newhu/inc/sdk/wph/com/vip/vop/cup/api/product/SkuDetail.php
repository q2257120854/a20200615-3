<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\product;

class SkuDetail {
	
	static $_TSPEC;
	public $item_images = null;
	public $square_images = null;
	public $color = null;
	public $size = null;
	public $prod_spu_id = null;
	public $size_detail_id = null;
	public $barcode = null;
	public $gsn = null;
	public $is_expiration_management = null;
	public $expiration_days = null;
	public $acceptance_deadline = null;
	public $sale_deadline = null;
	public $insurance_days = null;
	public $made_in = null;
	public $is_sequence_management = null;
	public $support_return = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'item_images'
			),
			2 => array(
			'var' => 'square_images'
			),
			3 => array(
			'var' => 'color'
			),
			4 => array(
			'var' => 'size'
			),
			5 => array(
			'var' => 'prod_spu_id'
			),
			6 => array(
			'var' => 'size_detail_id'
			),
			7 => array(
			'var' => 'barcode'
			),
			8 => array(
			'var' => 'gsn'
			),
			9 => array(
			'var' => 'is_expiration_management'
			),
			10 => array(
			'var' => 'expiration_days'
			),
			11 => array(
			'var' => 'acceptance_deadline'
			),
			12 => array(
			'var' => 'sale_deadline'
			),
			13 => array(
			'var' => 'insurance_days'
			),
			14 => array(
			'var' => 'made_in'
			),
			15 => array(
			'var' => 'is_sequence_management'
			),
			16 => array(
			'var' => 'support_return'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['item_images'])){
				
				$this->item_images = $vals['item_images'];
			}
			
			
			if (isset($vals['square_images'])){
				
				$this->square_images = $vals['square_images'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['prod_spu_id'])){
				
				$this->prod_spu_id = $vals['prod_spu_id'];
			}
			
			
			if (isset($vals['size_detail_id'])){
				
				$this->size_detail_id = $vals['size_detail_id'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['gsn'])){
				
				$this->gsn = $vals['gsn'];
			}
			
			
			if (isset($vals['is_expiration_management'])){
				
				$this->is_expiration_management = $vals['is_expiration_management'];
			}
			
			
			if (isset($vals['expiration_days'])){
				
				$this->expiration_days = $vals['expiration_days'];
			}
			
			
			if (isset($vals['acceptance_deadline'])){
				
				$this->acceptance_deadline = $vals['acceptance_deadline'];
			}
			
			
			if (isset($vals['sale_deadline'])){
				
				$this->sale_deadline = $vals['sale_deadline'];
			}
			
			
			if (isset($vals['insurance_days'])){
				
				$this->insurance_days = $vals['insurance_days'];
			}
			
			
			if (isset($vals['made_in'])){
				
				$this->made_in = $vals['made_in'];
			}
			
			
			if (isset($vals['is_sequence_management'])){
				
				$this->is_sequence_management = $vals['is_sequence_management'];
			}
			
			
			if (isset($vals['support_return'])){
				
				$this->support_return = $vals['support_return'];
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
			
			
			if ("item_images" == $schemeField){
				
				$needSkip = false;
				
				$this->item_images = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vop\cup\api\product\ItemImage();
						$elem0->read($input);
						
						$this->item_images[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("square_images" == $schemeField){
				
				$needSkip = false;
				
				$this->square_images = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vop\cup\api\product\ItemImage();
						$elem1->read($input);
						
						$this->square_images[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("prod_spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prod_spu_id);
				
			}
			
			
			
			
			if ("size_detail_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->size_detail_id); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("gsn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->gsn);
				
			}
			
			
			
			
			if ("is_expiration_management" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_expiration_management);
				
			}
			
			
			
			
			if ("expiration_days" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->expiration_days); 
				
			}
			
			
			
			
			if ("acceptance_deadline" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->acceptance_deadline); 
				
			}
			
			
			
			
			if ("sale_deadline" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sale_deadline); 
				
			}
			
			
			
			
			if ("insurance_days" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->insurance_days); 
				
			}
			
			
			
			
			if ("made_in" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->made_in); 
				
			}
			
			
			
			
			if ("is_sequence_management" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_sequence_management);
				
			}
			
			
			
			
			if ("support_return" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->support_return); 
				
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
		
		if($this->item_images !== null) {
			
			$xfer += $output->writeFieldBegin('item_images');
			
			if (!is_array($this->item_images)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->item_images as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->square_images !== null) {
			
			$xfer += $output->writeFieldBegin('square_images');
			
			if (!is_array($this->square_images)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->square_images as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prod_spu_id !== null) {
			
			$xfer += $output->writeFieldBegin('prod_spu_id');
			$xfer += $output->writeString($this->prod_spu_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_detail_id !== null) {
			
			$xfer += $output->writeFieldBegin('size_detail_id');
			$xfer += $output->writeI64($this->size_detail_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->gsn !== null) {
			
			$xfer += $output->writeFieldBegin('gsn');
			$xfer += $output->writeString($this->gsn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_expiration_management !== null) {
			
			$xfer += $output->writeFieldBegin('is_expiration_management');
			$xfer += $output->writeString($this->is_expiration_management);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expiration_days !== null) {
			
			$xfer += $output->writeFieldBegin('expiration_days');
			$xfer += $output->writeI32($this->expiration_days);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->acceptance_deadline !== null) {
			
			$xfer += $output->writeFieldBegin('acceptance_deadline');
			$xfer += $output->writeI32($this->acceptance_deadline);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sale_deadline !== null) {
			
			$xfer += $output->writeFieldBegin('sale_deadline');
			$xfer += $output->writeI32($this->sale_deadline);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->insurance_days !== null) {
			
			$xfer += $output->writeFieldBegin('insurance_days');
			$xfer += $output->writeI32($this->insurance_days);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->made_in !== null) {
			
			$xfer += $output->writeFieldBegin('made_in');
			$xfer += $output->writeI32($this->made_in);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_sequence_management !== null) {
			
			$xfer += $output->writeFieldBegin('is_sequence_management');
			$xfer += $output->writeString($this->is_sequence_management);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->support_return !== null) {
			
			$xfer += $output->writeFieldBegin('support_return');
			$xfer += $output->writeI32($this->support_return);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>