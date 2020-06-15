<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\size;

class FindSizeMappingRequest {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $category_id = null;
	public $vendor_category_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'category_id'
			),
			3 => array(
			'var' => 'vendor_category_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['category_id'])){
				
				$this->category_id = $vals['category_id'];
			}
			
			
			if (isset($vals['vendor_category_id'])){
				
				$this->vendor_category_id = $vals['vendor_category_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FindSizeMappingRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->category_id); 
				
			}
			
			
			
			
			if ("vendor_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_category_id);
				
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
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->category_id !== null) {
			
			$xfer += $output->writeFieldBegin('category_id');
			$xfer += $output->writeI32($this->category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_category_id');
			$xfer += $output->writeString($this->vendor_category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>