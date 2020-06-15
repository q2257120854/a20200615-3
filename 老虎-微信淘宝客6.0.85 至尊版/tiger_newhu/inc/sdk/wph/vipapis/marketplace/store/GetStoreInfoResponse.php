<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\store;

class GetStoreInfoResponse {
	
	static $_TSPEC;
	public $store_id = null;
	public $seller_id = null;
	public $store_name = null;
	public $store_status = null;
	public $store_logo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'store_id'
			),
			2 => array(
			'var' => 'seller_id'
			),
			3 => array(
			'var' => 'store_name'
			),
			4 => array(
			'var' => 'store_status'
			),
			5 => array(
			'var' => 'store_logo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['store_id'])){
				
				$this->store_id = $vals['store_id'];
			}
			
			
			if (isset($vals['seller_id'])){
				
				$this->seller_id = $vals['seller_id'];
			}
			
			
			if (isset($vals['store_name'])){
				
				$this->store_name = $vals['store_name'];
			}
			
			
			if (isset($vals['store_status'])){
				
				$this->store_status = $vals['store_status'];
			}
			
			
			if (isset($vals['store_logo'])){
				
				$this->store_logo = $vals['store_logo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetStoreInfoResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("store_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_id);
				
			}
			
			
			
			
			if ("seller_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seller_id);
				
			}
			
			
			
			
			if ("store_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_name);
				
			}
			
			
			
			
			if ("store_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_status);
				
			}
			
			
			
			
			if ("store_logo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_logo);
				
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
		
		if($this->store_id !== null) {
			
			$xfer += $output->writeFieldBegin('store_id');
			$xfer += $output->writeString($this->store_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->seller_id !== null) {
			
			$xfer += $output->writeFieldBegin('seller_id');
			$xfer += $output->writeString($this->seller_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_name !== null) {
			
			$xfer += $output->writeFieldBegin('store_name');
			$xfer += $output->writeString($this->store_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_status !== null) {
			
			$xfer += $output->writeFieldBegin('store_status');
			$xfer += $output->writeString($this->store_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_logo !== null) {
			
			$xfer += $output->writeFieldBegin('store_logo');
			$xfer += $output->writeString($this->store_logo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>