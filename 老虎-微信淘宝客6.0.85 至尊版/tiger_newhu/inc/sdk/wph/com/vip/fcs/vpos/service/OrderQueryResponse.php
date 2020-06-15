<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vpos\service;

class OrderQueryResponse {
	
	static $_TSPEC;
	public $orderQueryRequest = null;
	public $orderQueryResult = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderQueryRequest'
			),
			2 => array(
			'var' => 'orderQueryResult'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderQueryRequest'])){
				
				$this->orderQueryRequest = $vals['orderQueryRequest'];
			}
			
			
			if (isset($vals['orderQueryResult'])){
				
				$this->orderQueryResult = $vals['orderQueryResult'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderQueryResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderQueryRequest" == $schemeField){
				
				$needSkip = false;
				
				$this->orderQueryRequest = new \com\vip\fcs\vpos\service\OrderQueryRequest();
				$this->orderQueryRequest->read($input);
				
			}
			
			
			
			
			if ("orderQueryResult" == $schemeField){
				
				$needSkip = false;
				
				$this->orderQueryResult = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\vpos\service\VposOrderResultVO();
						$elem0->read($input);
						
						$this->orderQueryResult[$_size0++] = $elem0;
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
		
		if($this->orderQueryRequest !== null) {
			
			$xfer += $output->writeFieldBegin('orderQueryRequest');
			
			if (!is_object($this->orderQueryRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->orderQueryRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderQueryResult !== null) {
			
			$xfer += $output->writeFieldBegin('orderQueryResult');
			
			if (!is_array($this->orderQueryResult)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderQueryResult as $iter0){
				
				
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