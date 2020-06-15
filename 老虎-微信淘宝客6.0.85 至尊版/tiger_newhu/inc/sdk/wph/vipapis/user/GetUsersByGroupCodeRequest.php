<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\user;

class GetUsersByGroupCodeRequest {
	
	static $_TSPEC;
	public $dsp_code = null;
	public $group_code = null;
	public $data_version = null;
	public $start = null;
	public $offset = null;
	public $encrypt_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'dsp_code'
			),
			2 => array(
			'var' => 'group_code'
			),
			3 => array(
			'var' => 'data_version'
			),
			4 => array(
			'var' => 'start'
			),
			5 => array(
			'var' => 'offset'
			),
			6 => array(
			'var' => 'encrypt_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['dsp_code'])){
				
				$this->dsp_code = $vals['dsp_code'];
			}
			
			
			if (isset($vals['group_code'])){
				
				$this->group_code = $vals['group_code'];
			}
			
			
			if (isset($vals['data_version'])){
				
				$this->data_version = $vals['data_version'];
			}
			
			
			if (isset($vals['start'])){
				
				$this->start = $vals['start'];
			}
			
			
			if (isset($vals['offset'])){
				
				$this->offset = $vals['offset'];
			}
			
			
			if (isset($vals['encrypt_type'])){
				
				$this->encrypt_type = $vals['encrypt_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetUsersByGroupCodeRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("dsp_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dsp_code);
				
			}
			
			
			
			
			if ("group_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->group_code);
				
			}
			
			
			
			
			if ("data_version" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->data_version);
				
			}
			
			
			
			
			if ("start" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->start); 
				
			}
			
			
			
			
			if ("offset" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->offset); 
				
			}
			
			
			
			
			if ("encrypt_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->encrypt_type); 
				
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
		
		$xfer += $output->writeFieldBegin('dsp_code');
		$xfer += $output->writeString($this->dsp_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('group_code');
		$xfer += $output->writeString($this->group_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('data_version');
		$xfer += $output->writeString($this->data_version);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->start !== null) {
			
			$xfer += $output->writeFieldBegin('start');
			$xfer += $output->writeI32($this->start);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offset !== null) {
			
			$xfer += $output->writeFieldBegin('offset');
			$xfer += $output->writeI32($this->offset);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->encrypt_type !== null) {
			
			$xfer += $output->writeFieldBegin('encrypt_type');
			$xfer += $output->writeI32($this->encrypt_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>