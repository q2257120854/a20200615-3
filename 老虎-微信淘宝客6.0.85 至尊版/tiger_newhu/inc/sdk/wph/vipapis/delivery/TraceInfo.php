<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class TraceInfo {
	
	static $_TSPEC;
	public $transport_code = null;
	public $transport_detail = null;
	public $transport_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transport_code'
			),
			2 => array(
			'var' => 'transport_detail'
			),
			3 => array(
			'var' => 'transport_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transport_code'])){
				
				$this->transport_code = $vals['transport_code'];
			}
			
			
			if (isset($vals['transport_detail'])){
				
				$this->transport_detail = $vals['transport_detail'];
			}
			
			
			if (isset($vals['transport_time'])){
				
				$this->transport_time = $vals['transport_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TraceInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transport_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_code);
				
			}
			
			
			
			
			if ("transport_detail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_detail);
				
			}
			
			
			
			
			if ("transport_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_time);
				
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
		
		if($this->transport_code !== null) {
			
			$xfer += $output->writeFieldBegin('transport_code');
			$xfer += $output->writeString($this->transport_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_detail !== null) {
			
			$xfer += $output->writeFieldBegin('transport_detail');
			$xfer += $output->writeString($this->transport_detail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_time !== null) {
			
			$xfer += $output->writeFieldBegin('transport_time');
			$xfer += $output->writeString($this->transport_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>