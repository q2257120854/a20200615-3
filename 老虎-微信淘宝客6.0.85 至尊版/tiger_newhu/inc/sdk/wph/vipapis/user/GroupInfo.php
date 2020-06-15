<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\user;

class GroupInfo {
	
	static $_TSPEC;
	public $group_code = null;
	public $group_name = null;
	public $data_type = null;
	public $expire_time = null;
	public $size = null;
	public $data_version = null;
	public $last_updated_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'group_code'
			),
			2 => array(
			'var' => 'group_name'
			),
			3 => array(
			'var' => 'data_type'
			),
			4 => array(
			'var' => 'expire_time'
			),
			5 => array(
			'var' => 'size'
			),
			6 => array(
			'var' => 'data_version'
			),
			7 => array(
			'var' => 'last_updated_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['group_code'])){
				
				$this->group_code = $vals['group_code'];
			}
			
			
			if (isset($vals['group_name'])){
				
				$this->group_name = $vals['group_name'];
			}
			
			
			if (isset($vals['data_type'])){
				
				$this->data_type = $vals['data_type'];
			}
			
			
			if (isset($vals['expire_time'])){
				
				$this->expire_time = $vals['expire_time'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['data_version'])){
				
				$this->data_version = $vals['data_version'];
			}
			
			
			if (isset($vals['last_updated_time'])){
				
				$this->last_updated_time = $vals['last_updated_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GroupInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("group_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->group_code);
				
			}
			
			
			
			
			if ("group_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->group_name);
				
			}
			
			
			
			
			if ("data_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->data_type); 
				
			}
			
			
			
			
			if ("expire_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expire_time); 
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->size); 
				
			}
			
			
			
			
			if ("data_version" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->data_version);
				
			}
			
			
			
			
			if ("last_updated_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->last_updated_time); 
				
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
		
		if($this->group_code !== null) {
			
			$xfer += $output->writeFieldBegin('group_code');
			$xfer += $output->writeString($this->group_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->group_name !== null) {
			
			$xfer += $output->writeFieldBegin('group_name');
			$xfer += $output->writeString($this->group_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->data_type !== null) {
			
			$xfer += $output->writeFieldBegin('data_type');
			$xfer += $output->writeI32($this->data_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expire_time !== null) {
			
			$xfer += $output->writeFieldBegin('expire_time');
			$xfer += $output->writeI64($this->expire_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeI32($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->data_version !== null) {
			
			$xfer += $output->writeFieldBegin('data_version');
			$xfer += $output->writeString($this->data_version);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->last_updated_time !== null) {
			
			$xfer += $output->writeFieldBegin('last_updated_time');
			$xfer += $output->writeI64($this->last_updated_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>