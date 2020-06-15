<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class AnormalRequest {
	
	static $_TSPEC;
	public $transportNo = null;
	public $orderSn = null;
	public $code = null;
	public $content = null;
	public $time = null;
	public $reportCity = null;
	public $reportOrgName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'code'
			),
			4 => array(
			'var' => 'content'
			),
			5 => array(
			'var' => 'time'
			),
			6 => array(
			'var' => 'reportCity'
			),
			7 => array(
			'var' => 'reportOrgName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['content'])){
				
				$this->content = $vals['content'];
			}
			
			
			if (isset($vals['time'])){
				
				$this->time = $vals['time'];
			}
			
			
			if (isset($vals['reportCity'])){
				
				$this->reportCity = $vals['reportCity'];
			}
			
			
			if (isset($vals['reportOrgName'])){
				
				$this->reportOrgName = $vals['reportOrgName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AnormalRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
			}
			
			
			
			
			if ("content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->content);
				
			}
			
			
			
			
			if ("time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->time); 
				
			}
			
			
			
			
			if ("reportCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reportCity);
				
			}
			
			
			
			
			if ("reportOrgName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reportOrgName);
				
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
		
		$xfer += $output->writeFieldBegin('transportNo');
		$xfer += $output->writeString($this->transportNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('code');
		$xfer += $output->writeString($this->code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('content');
		$xfer += $output->writeString($this->content);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('time');
		$xfer += $output->writeI64($this->time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->reportCity !== null) {
			
			$xfer += $output->writeFieldBegin('reportCity');
			$xfer += $output->writeString($this->reportCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reportOrgName !== null) {
			
			$xfer += $output->writeFieldBegin('reportOrgName');
			$xfer += $output->writeString($this->reportOrgName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>