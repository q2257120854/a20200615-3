<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class BatchRsInfo {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $batch_no = null;
	public $rs_type = null;
	public $rs_name = null;
	public $rs_no = null;
	public $rs_image = null;
	public $rs_id = null;
	public $file_name = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'batch_no'
			),
			3 => array(
			'var' => 'rs_type'
			),
			4 => array(
			'var' => 'rs_name'
			),
			5 => array(
			'var' => 'rs_no'
			),
			6 => array(
			'var' => 'rs_image'
			),
			7 => array(
			'var' => 'rs_id'
			),
			8 => array(
			'var' => 'file_name'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
			if (isset($vals['rs_type'])){
				
				$this->rs_type = $vals['rs_type'];
			}
			
			
			if (isset($vals['rs_name'])){
				
				$this->rs_name = $vals['rs_name'];
			}
			
			
			if (isset($vals['rs_no'])){
				
				$this->rs_no = $vals['rs_no'];
			}
			
			
			if (isset($vals['rs_image'])){
				
				$this->rs_image = $vals['rs_image'];
			}
			
			
			if (isset($vals['rs_id'])){
				
				$this->rs_id = $vals['rs_id'];
			}
			
			
			if (isset($vals['file_name'])){
				
				$this->file_name = $vals['file_name'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BatchRsInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_id);
				
			}
			
			
			
			
			if ("batch_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batch_no);
				
			}
			
			
			
			
			if ("rs_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->rs_type); 
				
			}
			
			
			
			
			if ("rs_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rs_name);
				
			}
			
			
			
			
			if ("rs_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rs_no);
				
			}
			
			
			
			
			if ("rs_image" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rs_image);
				
			}
			
			
			
			
			if ("rs_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->rs_id); 
				
			}
			
			
			
			
			if ("file_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->file_name);
				
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batch_no');
		$xfer += $output->writeString($this->batch_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('rs_type');
		$xfer += $output->writeI32($this->rs_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('rs_name');
		$xfer += $output->writeString($this->rs_name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->rs_no !== null) {
			
			$xfer += $output->writeFieldBegin('rs_no');
			$xfer += $output->writeString($this->rs_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('rs_image');
		$xfer += $output->writeString($this->rs_image);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->rs_id !== null) {
			
			$xfer += $output->writeFieldBegin('rs_id');
			$xfer += $output->writeI32($this->rs_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('file_name');
		$xfer += $output->writeString($this->file_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>