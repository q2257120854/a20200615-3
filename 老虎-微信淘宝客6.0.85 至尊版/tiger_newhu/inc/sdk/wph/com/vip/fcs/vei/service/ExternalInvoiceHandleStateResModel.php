<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class ExternalInvoiceHandleStateResModel {
	
	static $_TSPEC;
	public $externalInvoiceHandleStateList = null;
	public $retMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'externalInvoiceHandleStateList'
			),
			2 => array(
			'var' => 'retMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['externalInvoiceHandleStateList'])){
				
				$this->externalInvoiceHandleStateList = $vals['externalInvoiceHandleStateList'];
			}
			
			
			if (isset($vals['retMsg'])){
				
				$this->retMsg = $vals['retMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExternalInvoiceHandleStateResModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("externalInvoiceHandleStateList" == $schemeField){
				
				$needSkip = false;
				
				$this->externalInvoiceHandleStateList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\vei\service\ExternalInvoiceHandleState();
						$elem0->read($input);
						
						$this->externalInvoiceHandleStateList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("retMsg" == $schemeField){
				
				$needSkip = false;
				
				$this->retMsg = new \com\vip\fcs\vei\service\BaseRetMsg();
				$this->retMsg->read($input);
				
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
		
		if($this->externalInvoiceHandleStateList !== null) {
			
			$xfer += $output->writeFieldBegin('externalInvoiceHandleStateList');
			
			if (!is_array($this->externalInvoiceHandleStateList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->externalInvoiceHandleStateList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('retMsg');
		
		if (!is_object($this->retMsg)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->retMsg->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>