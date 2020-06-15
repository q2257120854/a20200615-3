<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\ubc\facade\bankcard;

class BankDataResponse {
	
	static $_TSPEC;
	public $dataNum = null;
	public $successDataNum = null;
	public $failedDataNum = null;
	public $bankName = null;
	public $result = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'dataNum'
			),
			2 => array(
			'var' => 'successDataNum'
			),
			3 => array(
			'var' => 'failedDataNum'
			),
			4 => array(
			'var' => 'bankName'
			),
			5 => array(
			'var' => 'result'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['dataNum'])){
				
				$this->dataNum = $vals['dataNum'];
			}
			
			
			if (isset($vals['successDataNum'])){
				
				$this->successDataNum = $vals['successDataNum'];
			}
			
			
			if (isset($vals['failedDataNum'])){
				
				$this->failedDataNum = $vals['failedDataNum'];
			}
			
			
			if (isset($vals['bankName'])){
				
				$this->bankName = $vals['bankName'];
			}
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BankDataResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("dataNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->dataNum); 
				
			}
			
			
			
			
			if ("successDataNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->successDataNum); 
				
			}
			
			
			
			
			if ("failedDataNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->failedDataNum); 
				
			}
			
			
			
			
			if ("bankName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bankName);
				
			}
			
			
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				
				$this->result = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\api\ubc\facade\bankcard\OperationResult();
						$elem0->read($input);
						
						$this->result[$_size0++] = $elem0;
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
		
		if($this->dataNum !== null) {
			
			$xfer += $output->writeFieldBegin('dataNum');
			$xfer += $output->writeI32($this->dataNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->successDataNum !== null) {
			
			$xfer += $output->writeFieldBegin('successDataNum');
			$xfer += $output->writeI32($this->successDataNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failedDataNum !== null) {
			
			$xfer += $output->writeFieldBegin('failedDataNum');
			$xfer += $output->writeI32($this->failedDataNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bankName !== null) {
			
			$xfer += $output->writeFieldBegin('bankName');
			$xfer += $output->writeString($this->bankName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->result !== null) {
			
			$xfer += $output->writeFieldBegin('result');
			
			if (!is_array($this->result)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->result as $iter0){
				
				
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