<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class FetchOrderRequestModel {
	
	static $_TSPEC;
	public $orderSn = null;
	public $refType = null;
	public $refNo = null;
	public $userId = null;
	public $refNoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'refType'
			),
			3 => array(
			'var' => 'refNo'
			),
			4 => array(
			'var' => 'userId'
			),
			5 => array(
			'var' => 'refNoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['refType'])){
				
				$this->refType = $vals['refType'];
			}
			
			
			if (isset($vals['refNo'])){
				
				$this->refNo = $vals['refNo'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['refNoList'])){
				
				$this->refNoList = $vals['refNoList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FetchOrderRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("refType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refType);
				
			}
			
			
			
			
			if ("refNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refNo);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("refNoList" == $schemeField){
				
				$needSkip = false;
				
				$this->refNoList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->refNoList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refType');
		$xfer += $output->writeString($this->refType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->refNo !== null) {
			
			$xfer += $output->writeFieldBegin('refNo');
			$xfer += $output->writeString($this->refNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refNoList !== null) {
			
			$xfer += $output->writeFieldBegin('refNoList');
			
			if (!is_array($this->refNoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->refNoList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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