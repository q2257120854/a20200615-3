<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\purchase\schedules\service\query;

class QueryScheduleInfoApiParam {
	
	static $_TSPEC;
	public $brandIdList = null;
	public $sellTimeFrom = null;
	public $sellTimeTo = null;
	public $sellingModeList = null;
	public $normalityFlag = null;
	public $page = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandIdList'
			),
			2 => array(
			'var' => 'sellTimeFrom'
			),
			3 => array(
			'var' => 'sellTimeTo'
			),
			4 => array(
			'var' => 'sellingModeList'
			),
			5 => array(
			'var' => 'normalityFlag'
			),
			6 => array(
			'var' => 'page'
			),
			7 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandIdList'])){
				
				$this->brandIdList = $vals['brandIdList'];
			}
			
			
			if (isset($vals['sellTimeFrom'])){
				
				$this->sellTimeFrom = $vals['sellTimeFrom'];
			}
			
			
			if (isset($vals['sellTimeTo'])){
				
				$this->sellTimeTo = $vals['sellTimeTo'];
			}
			
			
			if (isset($vals['sellingModeList'])){
				
				$this->sellingModeList = $vals['sellingModeList'];
			}
			
			
			if (isset($vals['normalityFlag'])){
				
				$this->normalityFlag = $vals['normalityFlag'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryScheduleInfoApiParam';
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
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readI64($elem1); 
						
						$this->brandIdList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sellTimeFrom" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellTimeFrom);
				
			}
			
			
			
			
			if ("sellTimeTo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellTimeTo);
				
			}
			
			
			
			
			if ("sellingModeList" == $schemeField){
				
				$needSkip = false;
				
				$this->sellingModeList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readI32($elem2); 
						
						$this->sellingModeList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("normalityFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->normalityFlag); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
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
		
		
		if($this->sellTimeFrom !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeFrom');
			$xfer += $output->writeString($this->sellTimeFrom);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeTo !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeTo');
			$xfer += $output->writeString($this->sellTimeTo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingModeList !== null) {
			
			$xfer += $output->writeFieldBegin('sellingModeList');
			
			if (!is_array($this->sellingModeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sellingModeList as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->normalityFlag !== null) {
			
			$xfer += $output->writeFieldBegin('normalityFlag');
			$xfer += $output->writeI32($this->normalityFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>