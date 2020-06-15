<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\report;

class CountOfServiceInvoke {
	
	static $_TSPEC;
	public $invoke_date = null;
	public $app_key = null;
	public $ext_attr_name = null;
	public $ext_attr_value = null;
	public $service_name = null;
	public $method_name = null;
	public $business_amount = null;
	public $invoke_amount = null;
	public $exception_amount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'invoke_date'
			),
			2 => array(
			'var' => 'app_key'
			),
			3 => array(
			'var' => 'ext_attr_name'
			),
			4 => array(
			'var' => 'ext_attr_value'
			),
			5 => array(
			'var' => 'service_name'
			),
			6 => array(
			'var' => 'method_name'
			),
			7 => array(
			'var' => 'business_amount'
			),
			8 => array(
			'var' => 'invoke_amount'
			),
			9 => array(
			'var' => 'exception_amount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['invoke_date'])){
				
				$this->invoke_date = $vals['invoke_date'];
			}
			
			
			if (isset($vals['app_key'])){
				
				$this->app_key = $vals['app_key'];
			}
			
			
			if (isset($vals['ext_attr_name'])){
				
				$this->ext_attr_name = $vals['ext_attr_name'];
			}
			
			
			if (isset($vals['ext_attr_value'])){
				
				$this->ext_attr_value = $vals['ext_attr_value'];
			}
			
			
			if (isset($vals['service_name'])){
				
				$this->service_name = $vals['service_name'];
			}
			
			
			if (isset($vals['method_name'])){
				
				$this->method_name = $vals['method_name'];
			}
			
			
			if (isset($vals['business_amount'])){
				
				$this->business_amount = $vals['business_amount'];
			}
			
			
			if (isset($vals['invoke_amount'])){
				
				$this->invoke_amount = $vals['invoke_amount'];
			}
			
			
			if (isset($vals['exception_amount'])){
				
				$this->exception_amount = $vals['exception_amount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CountOfServiceInvoke';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("invoke_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoke_date);
				
			}
			
			
			
			
			if ("app_key" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->app_key);
				
			}
			
			
			
			
			if ("ext_attr_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext_attr_name);
				
			}
			
			
			
			
			if ("ext_attr_value" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext_attr_value);
				
			}
			
			
			
			
			if ("service_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->service_name);
				
			}
			
			
			
			
			if ("method_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->method_name);
				
			}
			
			
			
			
			if ("business_amount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->business_amount); 
				
			}
			
			
			
			
			if ("invoke_amount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->invoke_amount); 
				
			}
			
			
			
			
			if ("exception_amount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->exception_amount); 
				
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
		
		$xfer += $output->writeFieldBegin('invoke_date');
		$xfer += $output->writeString($this->invoke_date);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('app_key');
		$xfer += $output->writeString($this->app_key);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ext_attr_name');
		$xfer += $output->writeString($this->ext_attr_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ext_attr_value');
		$xfer += $output->writeString($this->ext_attr_value);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('service_name');
		$xfer += $output->writeString($this->service_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('method_name');
		$xfer += $output->writeString($this->method_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('business_amount');
		$xfer += $output->writeI64($this->business_amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('invoke_amount');
		$xfer += $output->writeI64($this->invoke_amount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->exception_amount !== null) {
			
			$xfer += $output->writeFieldBegin('exception_amount');
			$xfer += $output->writeI64($this->exception_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>