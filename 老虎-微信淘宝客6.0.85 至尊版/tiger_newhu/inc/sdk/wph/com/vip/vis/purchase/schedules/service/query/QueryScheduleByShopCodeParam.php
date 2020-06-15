<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\purchase\schedules\service\query;

class QueryScheduleByShopCodeParam {
	
	static $_TSPEC;
	public $user = null;
	public $dataAreaDivideList = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $shopCodeList = null;
	public $callFrom = null;
	public $cooperationType = null;
	public $sellFlag = null;
	public $page = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'user'
			),
			2 => array(
			'var' => 'dataAreaDivideList'
			),
			3 => array(
			'var' => 'vendorCode'
			),
			4 => array(
			'var' => 'vendorName'
			),
			5 => array(
			'var' => 'shopCodeList'
			),
			6 => array(
			'var' => 'callFrom'
			),
			7 => array(
			'var' => 'cooperationType'
			),
			8 => array(
			'var' => 'sellFlag'
			),
			9 => array(
			'var' => 'page'
			),
			10 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['user'])){
				
				$this->user = $vals['user'];
			}
			
			
			if (isset($vals['dataAreaDivideList'])){
				
				$this->dataAreaDivideList = $vals['dataAreaDivideList'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['shopCodeList'])){
				
				$this->shopCodeList = $vals['shopCodeList'];
			}
			
			
			if (isset($vals['callFrom'])){
				
				$this->callFrom = $vals['callFrom'];
			}
			
			
			if (isset($vals['cooperationType'])){
				
				$this->cooperationType = $vals['cooperationType'];
			}
			
			
			if (isset($vals['sellFlag'])){
				
				$this->sellFlag = $vals['sellFlag'];
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
		
		return 'QueryScheduleByShopCodeParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user);
				
			}
			
			
			
			
			if ("dataAreaDivideList" == $schemeField){
				
				$needSkip = false;
				
				$this->dataAreaDivideList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readI32($elem1); 
						
						$this->dataAreaDivideList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorCode); 
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("shopCodeList" == $schemeField){
				
				$needSkip = false;
				
				$this->shopCodeList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readI64($elem2); 
						
						$this->shopCodeList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("callFrom" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->callFrom);
				
			}
			
			
			
			
			if ("cooperationType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->cooperationType); 
				
			}
			
			
			
			
			if ("sellFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->sellFlag); 
				
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
		
		if($this->user !== null) {
			
			$xfer += $output->writeFieldBegin('user');
			$xfer += $output->writeString($this->user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataAreaDivideList !== null) {
			
			$xfer += $output->writeFieldBegin('dataAreaDivideList');
			
			if (!is_array($this->dataAreaDivideList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->dataAreaDivideList as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeI32($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shopCodeList !== null) {
			
			$xfer += $output->writeFieldBegin('shopCodeList');
			
			if (!is_array($this->shopCodeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->shopCodeList as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->callFrom !== null) {
			
			$xfer += $output->writeFieldBegin('callFrom');
			$xfer += $output->writeString($this->callFrom);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperationType !== null) {
			
			$xfer += $output->writeFieldBegin('cooperationType');
			$xfer += $output->writeByte($this->cooperationType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellFlag !== null) {
			
			$xfer += $output->writeFieldBegin('sellFlag');
			$xfer += $output->writeByte($this->sellFlag);
			
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