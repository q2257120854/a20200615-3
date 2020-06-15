<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class ProtContractDetailModel {
	
	static $_TSPEC;
	public $mainInfo = null;
	public $discountInfo = null;
	public $auditingLogList = null;
	public $discountList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mainInfo'
			),
			2 => array(
			'var' => 'discountInfo'
			),
			3 => array(
			'var' => 'auditingLogList'
			),
			4 => array(
			'var' => 'discountList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mainInfo'])){
				
				$this->mainInfo = $vals['mainInfo'];
			}
			
			
			if (isset($vals['discountInfo'])){
				
				$this->discountInfo = $vals['discountInfo'];
			}
			
			
			if (isset($vals['auditingLogList'])){
				
				$this->auditingLogList = $vals['auditingLogList'];
			}
			
			
			if (isset($vals['discountList'])){
				
				$this->discountList = $vals['discountList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProtContractDetailModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mainInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->mainInfo = new \com\vip\api\promotion\vis\protcontract\service\ProtContractMainInfoModel();
				$this->mainInfo->read($input);
				
			}
			
			
			
			
			if ("discountInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->discountInfo = new \com\vip\api\promotion\vis\protcontract\service\DiscountInfoModel();
				$this->discountInfo->read($input);
				
			}
			
			
			
			
			if ("auditingLogList" == $schemeField){
				
				$needSkip = false;
				
				$this->auditingLogList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\api\promotion\vis\protcontract\service\ProtContractAuditingLogModel();
						$elem0->read($input);
						
						$this->auditingLogList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("discountList" == $schemeField){
				
				$needSkip = false;
				
				$this->discountList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\api\promotion\vis\protcontract\service\ProtContractDiscountInfoModel();
						$elem1->read($input);
						
						$this->discountList[$_size1++] = $elem1;
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
		
		if($this->mainInfo !== null) {
			
			$xfer += $output->writeFieldBegin('mainInfo');
			
			if (!is_object($this->mainInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->mainInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountInfo !== null) {
			
			$xfer += $output->writeFieldBegin('discountInfo');
			
			if (!is_object($this->discountInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->discountInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditingLogList !== null) {
			
			$xfer += $output->writeFieldBegin('auditingLogList');
			
			if (!is_array($this->auditingLogList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->auditingLogList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountList !== null) {
			
			$xfer += $output->writeFieldBegin('discountList');
			
			if (!is_array($this->discountList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->discountList as $iter0){
				
				
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