<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vipshop\cis\sdk\api\datain\si\response;

class ChannelResponseHeader {
	
	static $_TSPEC;
	public $response_code = null;
	public $result_code = null;
	public $message = null;
	public $local_area = null;
	public $trace_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'response_code'
			),
			3 => array(
			'var' => 'result_code'
			),
			5 => array(
			'var' => 'message'
			),
			7 => array(
			'var' => 'local_area'
			),
			9 => array(
			'var' => 'trace_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['response_code'])){
				
				$this->response_code = $vals['response_code'];
			}
			
			
			if (isset($vals['result_code'])){
				
				$this->result_code = $vals['result_code'];
			}
			
			
			if (isset($vals['message'])){
				
				$this->message = $vals['message'];
			}
			
			
			if (isset($vals['local_area'])){
				
				$this->local_area = $vals['local_area'];
			}
			
			
			if (isset($vals['trace_id'])){
				
				$this->trace_id = $vals['trace_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ChannelResponseHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("response_code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->response_code); 
				
			}
			
			
			
			
			if ("result_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result_code);
				
			}
			
			
			
			
			if ("message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->message);
				
			}
			
			
			
			
			if ("local_area" == $schemeField){
				
				$needSkip = false;
				
				$this->local_area = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = '';
						$input->readString($val1);
						
						$this->local_area[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("trace_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trace_id);
				
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
		
		$xfer += $output->writeFieldBegin('response_code');
		$xfer += $output->writeI32($this->response_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->result_code !== null) {
			
			$xfer += $output->writeFieldBegin('result_code');
			$xfer += $output->writeString($this->result_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->message !== null) {
			
			$xfer += $output->writeFieldBegin('message');
			$xfer += $output->writeString($this->message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->local_area !== null) {
			
			$xfer += $output->writeFieldBegin('local_area');
			
			if (!is_array($this->local_area)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->local_area as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trace_id !== null) {
			
			$xfer += $output->writeFieldBegin('trace_id');
			$xfer += $output->writeString($this->trace_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>