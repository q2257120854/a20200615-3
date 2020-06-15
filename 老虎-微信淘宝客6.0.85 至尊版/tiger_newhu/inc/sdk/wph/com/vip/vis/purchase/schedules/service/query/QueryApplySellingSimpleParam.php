<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\purchase\schedules\service\query;

class QueryApplySellingSimpleParam {
	
	static $_TSPEC;
	public $brandIdList = null;
	public $shopCode = null;
	public $warehouseCodeList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandIdList'
			),
			2 => array(
			'var' => 'shopCode'
			),
			3 => array(
			'var' => 'warehouseCodeList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandIdList'])){
				
				$this->brandIdList = $vals['brandIdList'];
			}
			
			
			if (isset($vals['shopCode'])){
				
				$this->shopCode = $vals['shopCode'];
			}
			
			
			if (isset($vals['warehouseCodeList'])){
				
				$this->warehouseCodeList = $vals['warehouseCodeList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryApplySellingSimpleParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brandIdList" == $schemeField){
				
				$needSkip = false;
				
				$this->brandIdList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI64($elem0); 
						
						$this->brandIdList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("shopCode" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->shopCode); 
				
			}
			
			
			
			
			if ("warehouseCodeList" == $schemeField){
				
				$needSkip = false;
				
				$this->warehouseCodeList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->warehouseCodeList[$_size1++] = $elem1;
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
		
		if($this->brandIdList !== null) {
			
			$xfer += $output->writeFieldBegin('brandIdList');
			
			if (!is_array($this->brandIdList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->brandIdList as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shopCode !== null) {
			
			$xfer += $output->writeFieldBegin('shopCode');
			$xfer += $output->writeI64($this->shopCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCodeList !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCodeList');
			
			if (!is_array($this->warehouseCodeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->warehouseCodeList as $iter0){
				
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