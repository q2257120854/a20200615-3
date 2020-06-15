<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\loading\osp\service;

class CommonResponse {
	
	static $_TSPEC;
	public $responseTime = null;
	public $sysResponseCode = null;
	public $sysResponseMsg = null;
	public $failOrders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'responseTime'
			),
			2 => array(
			'var' => 'sysResponseCode'
			),
			3 => array(
			'var' => 'sysResponseMsg'
			),
			4 => array(
			'var' => 'failOrders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['responseTime'])){
				
				$this->responseTime = $vals['responseTime'];
			}
			
			
			if (isset($vals['sysResponseCode'])){
				
				$this->sysResponseCode = $vals['sysResponseCode'];
			}
			
			
			if (isset($vals['sysResponseMsg'])){
				
				$this->sysResponseMsg = $vals['sysResponseMsg'];
			}
			
			
			if (isset($vals['failOrders'])){
				
				$this->failOrders = $vals['failOrders'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CommonResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("responseTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->responseTime);
				
			}
			
			
			
			
			if ("sysResponseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sysResponseCode);
				
			}
			
			
			
			
			if ("sysResponseMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sysResponseMsg);
				
			}
			
			
			
			
			if ("failOrders" == $schemeField){
				
				$needSkip = false;
				
				$this->failOrders = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\haitao\loading\osp\service\FailOrders();
						$elem1->read($input);
						
						$this->failOrders[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->responseTime !== null) {
			
			$xfer += $output->writeFieldBegin('responseTime');
			$xfer += $output->writeString($this->responseTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sysResponseCode !== null) {
			
			$xfer += $output->writeFieldBegin('sysResponseCode');
			$xfer += $output->writeString($this->sysResponseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sysResponseMsg !== null) {
			
			$xfer += $output->writeFieldBegin('sysResponseMsg');
			$xfer += $output->writeString($this->sysResponseMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failOrders !== null) {
			
			$xfer += $output->writeFieldBegin('failOrders');
			
			if (!is_array($this->failOrders)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->failOrders as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>