<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\product;

class GetProductRequest {
	
	static $_TSPEC;
	public $spu_id = null;
	public $outer_spu_id = null;
	public $shelf_status = null;
	public $audit_status = null;
	public $limit = null;
	public $page = null;
	public $first_category_id = null;
	public $second_category_id = null;
	public $third_category_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spu_id'
			),
			2 => array(
			'var' => 'outer_spu_id'
			),
			3 => array(
			'var' => 'shelf_status'
			),
			4 => array(
			'var' => 'audit_status'
			),
			5 => array(
			'var' => 'limit'
			),
			6 => array(
			'var' => 'page'
			),
			7 => array(
			'var' => 'first_category_id'
			),
			8 => array(
			'var' => 'second_category_id'
			),
			9 => array(
			'var' => 'third_category_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spu_id'])){
				
				$this->spu_id = $vals['spu_id'];
			}
			
			
			if (isset($vals['outer_spu_id'])){
				
				$this->outer_spu_id = $vals['outer_spu_id'];
			}
			
			
			if (isset($vals['shelf_status'])){
				
				$this->shelf_status = $vals['shelf_status'];
			}
			
			
			if (isset($vals['audit_status'])){
				
				$this->audit_status = $vals['audit_status'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['first_category_id'])){
				
				$this->first_category_id = $vals['first_category_id'];
			}
			
			
			if (isset($vals['second_category_id'])){
				
				$this->second_category_id = $vals['second_category_id'];
			}
			
			
			if (isset($vals['third_category_id'])){
				
				$this->third_category_id = $vals['third_category_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetProductRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spu_id);
				
			}
			
			
			
			
			if ("outer_spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->outer_spu_id);
				
			}
			
			
			
			
			if ("shelf_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shelf_status);
				
			}
			
			
			
			
			if ("audit_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->audit_status);
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("first_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->first_category_id); 
				
			}
			
			
			
			
			if ("second_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->second_category_id); 
				
			}
			
			
			
			
			if ("third_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->third_category_id); 
				
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
		
		if($this->spu_id !== null) {
			
			$xfer += $output->writeFieldBegin('spu_id');
			$xfer += $output->writeString($this->spu_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->outer_spu_id !== null) {
			
			$xfer += $output->writeFieldBegin('outer_spu_id');
			$xfer += $output->writeString($this->outer_spu_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shelf_status !== null) {
			
			$xfer += $output->writeFieldBegin('shelf_status');
			$xfer += $output->writeString($this->shelf_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->audit_status !== null) {
			
			$xfer += $output->writeFieldBegin('audit_status');
			$xfer += $output->writeString($this->audit_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->first_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('first_category_id');
			$xfer += $output->writeI32($this->first_category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->second_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('second_category_id');
			$xfer += $output->writeI32($this->second_category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->third_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('third_category_id');
			$xfer += $output->writeI32($this->third_category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>